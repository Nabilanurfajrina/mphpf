<?php


namespace controller;


use m\Application;
use m\Controller;

use model\DosenModel;

class DosenController extends Controller
{
    private $_mDosen;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->_mDosen = new DosenModel();
    }

    public function index()
    {
        $dosen = $this->_mDosen->findAll();

        $data = array(
            'all_dosen' => $dosen
        );

        $this->view->setData($data);

        $this->view->setContentTemplate('/home/data_dosen.php');
        $this->view->render();
    }

    public function addDosen()
    {
        if(isset($_POST['submit']))
        {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->saveDosenData();

            // Redirect ke halaman awal
            $this->redirect('/');
        }

        $this->view->setContentTemplate('/home/add_dosen.php');
        $this->view->render();
    }

    private function saveDosenData()
    {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $prodi = $_POST['prodi'];
        $jurusan = $_POST['jurusan'];
        $notelp = $_POST['no_telp'];

        $this->_mDosen->addNew($nip, $nama, $alamat, $prodi, $jurusan, $notelp);
       
    }
}
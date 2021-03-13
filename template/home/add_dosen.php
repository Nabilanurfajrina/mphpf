<form method="post" action="<?php $this->homeAddress('/add-new-dosen'); ?>">
    <label for="txt_name">NIP:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_name" type="text" placeholder="NIP Dosen" name="nip"/>
    <br/>
    <label for="txt_name">Nama:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_name" type="text" placeholder="Nama lengkap Dosen" name="nama"/>
    <br />
    <label for="txa_address">Alamat:</label>
    <br/>
    <textarea style="margin-bottom: 16px; width: 20%; height: 60px;" id="txa_address" type="text" placeholder="Alamat lengkap Dosen" name="alamat"></textarea>
    <br/>
    <label for="txt_name">Prodi:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_name" type="text" placeholder="Prodi" name="prodi"/>
    <br/>
    <label for="txt_name">Jurusan:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_name" type="text" placeholder="Jurusan" name="jurusan"/>
    <br/>
    <label for="txt_phone_number">No. Telepon:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" type="txt_phone_number" placeholder="No. Telepon yang aktif" name="no_telp"/>
    <br/>
    <input type="submit" name="submit" value="Simpan" />
</form>
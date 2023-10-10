<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan_id = $_POST['jurusan_id'];

    $sql = "INSERT INTO siswa SET nis='$nis', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jurusan_id='$jurusan_id'";
    $simpan = mysqli_query($koneksi, $sql);
    if ($simpan) {
        header('Location:index.php?m=siswa&s=tampil');
        //echo "berhasil";
    } else {
        include "index.php?m=siswa&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

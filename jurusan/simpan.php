<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nama_jurusan = $_POST['nama_jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO jurusan SET nama_jurusan='$nama_jurusan',kapasitas='$kapasitas',terisi='$terisi'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: index.php?m=jurusan');
    }else{
        include 'index.php?m=jurusan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal di tambah")';
        echo '</script>';
    }
}else{
    echo '<script>window.history.back()</>';
}
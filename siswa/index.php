<?php
$m = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
switch ($m) {
    case 'tampil': default:
        include "siswa/tampil.php";break;
    case 'tambah':
        include "siswa/tambah.php";break;
    case 'simpan':
        include "siswa/simpan.php";break;
    case 'edit':
        include "siswa/edit.php";break;
    case 'update':
        include "siswa/update.php";break;
    case 'hapus':
        include "siswa/hapus.php";break;

}
<?php
if (isset($_POST['simpan'])) {
  include_once "koneksi.php";
  $matadiklat= $_POST['matadiklat'];
  $sks= $_POST['sks'];

  $sql = "INSERT INTO matadiklat SET matadiklat='$matadiklat', sks='$sks'";
  $query = mysqli_query($koneksi,$sql);
  if ($query) {
    header('location: index.php?m=matadiklat');
  } else {
    include 'index.php?m=matadiklat';
    echo '<script language="JavaScript">';
    echo 'alert ("Data gagal di tambahkan")';
    echo '<script>';
  }
} else {
    echo '<script>window.history.back()</script>';
}
<?php
if (isset($_POST['update'])) {
  include_once "koneksi.php";
  $id =$_POST['id'];
  $id= $_POST['id'];
  $matadiklat= $_POST['matadiklat'];
  $sks= $_POST['sks'];

  $sql = "UPDATE matadiklat SET id='$id', matadiklat='$matadiklat', sks='$sks' WHERE id='$id'";
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
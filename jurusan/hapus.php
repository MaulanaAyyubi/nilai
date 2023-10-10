<?php
//cek akses lewat menu di index.php atau akses file langsung
if(isset($_GET['id'])){
	include_once "koneksi.php";
	$id=$_GET['id'];
	$sql   = "DELETE FROM jurusan WHERE id='$id'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: index.php?m=jurusan");
		//pengecekan jika hasil belum sesuai harapan
		//var_dump($sql);
	}else{
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="index.php">Kembali</a>';
	}
}else{
	echo "Jangan Akses langsung kemari, cek name pada submit <a href='index.php'>Kembali</a>";
}
?>
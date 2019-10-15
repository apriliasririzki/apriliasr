<?php 
include("koneksi.php");
$name	=$_POST['nama'];
$alm	=$_POST['alamat'];
$telp	=$_POST['tlp'];
if (empty($name) OR empty($alm) OR empty($telp)){
	echo "elemen harus diisi semua <br>";
	echo "<a href='form_input.php'>kembali ke form</a>";
}else{
	echo "Nama : ".$name."<br>";
	echo "Alamat : ".$alm."<br>";
	echo "Telepon : ".$telp."<br>";
	$mysqli="INSERT INTO tabel_user (nama, alamat, telepon) VALUES ('$name','$alm','$telp')";
	$result= mysqli_query($conn, $mysqli);
	echo "input berhasil";
	mysqli_close($conn);
}
?>
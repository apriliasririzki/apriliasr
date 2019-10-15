<?php 
include("koneksi_template.php");
$username	=$_POST['username'];
$password	=$_POST['password'];
if (empty($username) OR empty($password)){
	echo "elemen harus diisi semua <br>";
	echo "<a href='Template_Login.php'>kembali ke form</a>";
}else{
	echo "username : ".$username."<br>";
	echo "password : ".$password."<br>";
	$mysqli="INSERT INTO tabel_login (username,password) VALUES ('$username','$password')";
	$result= mysqli_query($conn, $mysqli);
	echo "input berhasil";
	mysqli_close($conn);
}
?>
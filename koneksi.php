<?php

session_start();

$Host = 'localhost';
$dbName = 'ujungaris';
$Username = 'root';
$Password = '';

$mysqli=mysqli_connect($Host, $Username, $Password, $dbName); 

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
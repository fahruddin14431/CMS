<?php 

$host="localhost";
$user="root";
$pass="";
$db="db_cms";

$koneksi = new mysqli($host,$user,$pass,$db);

if ($koneksi->connect_errno) {
	die('koneksi error'. $koneksi->connect_errno);
}

 ?>
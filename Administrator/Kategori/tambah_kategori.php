<?php 

include '../../Config/koneksi.php';

$id = $_POST['kode_kategori'];
$kategori = $_POST['kategori'];

$sql = "INSERT INTO tb_kategori VALUES ('$id', '$kategori')";

$result = $koneksi->query($sql);

header("Location:../index.php?master=kategori");

?>
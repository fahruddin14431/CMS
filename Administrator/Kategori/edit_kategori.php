<?php 

include '../../Config/koneksi.php';

$id = $_POST['kode_kategori'];
$kategori = $_POST['kategori'];

$sql = "UPDATE tb_kategori SET nama_kategori='$kategori' WHERE id_kategori='$id'";

$result = $koneksi->query($sql);

header("Location:../index.php?master=kategori");

?>
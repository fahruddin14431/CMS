<?php 

include '../../Config/koneksi.php';

$id	= $_GET['ambil_id_kategori'];

$sql = "DELETE FROM tb_kategori WHERE id_kategori = '$id'";
$koneksi->query($sql);

header("Location:../index.php?master=kategori");

 ?>
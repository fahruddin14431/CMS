<?php 

include '../../Config/koneksi.php';

$id	= $_GET['ambil_id_berita'];

$sql = "DELETE FROM tb_berita WHERE id_berita = '$id'";
$koneksi->query($sql);

header("Location:../index.php?master=berita");

 ?>
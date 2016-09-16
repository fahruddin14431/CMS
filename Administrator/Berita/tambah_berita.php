<?php 

include '../../Config/koneksi.php';

$id = $_POST['kode_ber'];
$judul = ucwords( $_POST['jud_ber']);
$id_kat = $_POST['kod_kat'];
$isi = ucfirst($_POST['isi_ber']);
$tgl = $_POST['tgl'];
$ter = $_POST['ter_ber'];
$ket = $_POST['ket_ber']

$foto=basename($_FILES['foto_ber']['name']);
$t_name=$_FILES['foto_ber']['tmp_name'];
$dir="../../Assets/img-berita";

$namaAdmin = $_POST['id_admin'];

if(move_uploaded_file($t_name,$dir."/".$foto)){

$sql = "INSERT INTO tb_berita VALUES ('$id', '$judul', '$id_kat', '$isi', '$tgl', '$ter', '$ket', '$dir/$foto', '$namaAdmin')";

$result = $koneksi->query($sql); 


	if ($result){
		header("Location:../index.php?master=berita");
	}else{
		echo "<script> alert('Tambah berita gagal'); </script> ";
	}

}

?>
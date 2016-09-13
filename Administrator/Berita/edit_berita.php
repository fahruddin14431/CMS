<?php 

include '../../Config/koneksi.php';

$id = $_POST['kode_ber'];
$judul = ucwords( $_POST['jud_ber']);
$id_kat = $_POST['kod_kat'];
$isi = ucfirst($_POST['isi_ber']);
$tgl = $_POST['tgl'];
$ter = $_POST['ter_ber'];
$ket = $_POST['ket_ber'];

$foto=basename($_FILES['foto_ber']['name']);
$t_name=$_FILES['foto_ber']['tmp_name'];
$dir="../../Assets/img-berita";

$namaAdmin = $_POST['id_admin'];

if ($foto=="") {
	
	$sql = "UPDATE tb_berita SET judul_berita='$judul', id_kategori='$id_kat', isi_berita='$isi',
			tanggal='$tgl', terbitkan='$ter', keterangan='$ket', id_admin='$namaAdmin' WHERE id_berita='$id'";
	
	$result = $koneksi->query($sql);
	header("Location:../index.php?master=berita");
}else{
	
	 $pindah = move_uploaded_file($t_name,$dir."/".$foto);
	 if ($pindah) {
		$sql = "UPDATE tb_berita SET judul_berita='$judul', id_kategori='$id_kat', isi_berita='$isi',
			tanggal='$tgl', terbitkan='$ter', keterangan='$ket',foto='$dir/$foto' ,id_admin='$namaAdmin' WHERE id_berita='$id'";
	
		$result = $koneksi->query($sql);
		header("Location:../index.php?master=berita");
	}

}



?>
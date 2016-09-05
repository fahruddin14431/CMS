<?php 

include '../Config/koneksi.php';

$sql = "SELECT * FROM tb_kategori";
		 
	if(isset($_GET['TextCari'])){
        $cari = $_GET['TextCari'];
        $sql="SELECT * FROM tb_kategori WHERE nama_kategori LIKE '%$cari%'";
    	}

		$result=$koneksi->query($sql);
//no
$n = 1 ;

//array for header
$header = array("No","Kode","Kategori");

?>

<div class="container-fluid">
	<h3><b>Daftar Kategori</b></h3>
	<br>

	<?php 
		if($row = $result->num_rows<=0){
		 echo 'Data Tidak tersedia '.'<b><a href="index.php?master=form_tambah_kategori">Tambah Data</a></b>'; } else { ?>

	<div class="col-md-8">
		<a href="index.php?master=form_tambah_kategori" class="btn btn-success "><i class="fa fa-plus-circle"></i> Tambah</a>

		<form action="" method="GET" class="form-inline pull-right">
	        <input class="form-control" type="text" placeholder="Cari Kategori" name="TextCari">
	        <input type="submit" value="Cari" class="btn btn-default">
	    </form>	

	<table class="table table-bordered table-striped table-hover">
		<thead class="bg-primary text-center">
			<?php foreach ($header as $value) { ?>
				<th class="text-center"><?php echo $value; ?></th>
			<?php } ?>	
			<th class="text-center" colspan="2">Aksi</th>	
		</thead>

		<tbody class="text-center">
			<?php while ($row = $result->fetch_object()) { ?>
			<tr>
				<td><?php echo $n++."." ?></td>
				<td><?php echo $row->id_kategori; ?></td>
				<td><?php echo $row->nama_kategori; ?></td>
				<td><a href="index.php?master=form_edit_kategori&ambil_id_kategori=<?php echo $row->id_kategori; ?>" class="btn btn-warning"><i class="fa fa-pencil-square"></i> Edit</a></td>
            	<td><a href="Kategori/hapus_kategori.php?ambil_id_kategori=<?php echo $row->id_kategori; ?>" onClick="return confirm('Data Akan Dihapus !')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>

</div>
<?php } ?>
<link rel="stylesheet" type="text/css" href="../Assets/plugins/datatables/dataTables.bootstrap.css">
<script src="../Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<?php 

include '../Config/koneksi.php';

$sql = "SELECT * FROM tb_kategori";
$result=$koneksi->query($sql);

//no
$n = 1 ;

?>

<div class="container col-md-8">
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-tittle"><b>Daftar Kategori</b></h3>
		</div>

	<div class="panel-body">
		<?php 
			if($row = $result->num_rows<=0){
			 echo 'Data Tidak tersedia '.'<b><a href="index.php?master=form_tambah_kategori">Tambah Data</a></b>'; } else { ?>

		<a href="index.php?master=form_tambah_kategori" class="btn btn-success "><i class="fa fa-plus-circle"></i> Tambah</a>
		<br><br>
		<table id="table-data" class="table table-bordered table-striped table-hover">
			<thead >
				<th>No</th>
				<th>Kode</th>
				<th>Kategori</th>
				<th>Aksi</th>
				<th>Aksi</th>	
			</thead>

			<tbody>
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

</div>
<?php } ?>

<script>
  $(document).ready(function(){
    $('#table-data').DataTable( {
    	responsive: true
    }
    	);
});
  </script>
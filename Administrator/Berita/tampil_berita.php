<link rel="stylesheet" type="text/css" href="../Assets/plugins/datatables/dataTables.bootstrap.css">
<script src="../Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../Assets/plugins/datatables/dataTables.rowReorder.min.js"></script>

<?php 

include '../Config/koneksi.php';

$sql = "SELECT 	b.id_berita, 
				b.judul_berita, 
		        k.nama_kategori,
		        b.tanggal,
		        b.terbitkan,
		        b.keterangan,
		        a.nama_admin
		FROM tb_berita b, tb_admin a, tb_kategori k
		WHERE b.id_kategori = k.id_kategori
		AND b.id_admin = a.id_admin
		ORDER BY b.id_berita ASC";
$result=$koneksi->query($sql);

//no
$n = 1 ;

?>

<div class="container col-md-12">
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-tittle"><b>Daftar Berita</b></h3>
		</div>

	<div class="panel-body">
		<?php 
			if($row = $result->num_rows<=0){
			 echo 'Data Tidak tersedia '.'<b><a href="index.php?master=tambah_berita">Tambah Data</a></b>'; } else { ?>

		<a href="index.php?master=tambah_berita" class="btn btn-success "><i class="fa fa-plus-circle"></i> Tambah</a>
		<br><br>
		<table id="table-data" class="table table-bordered table-striped table-hover">
			<thead>
				<th>No</th>
				<th>Judul</th>
				<th>Kategori</th>
				<th>Tanggal</th>
				<th>Terbit</th>	
				<th>Admin</th>
				<th>Aksi</th>
				<th>Aksi</th>
			</thead>

			<tbody>
				<?php while ($row = $result->fetch_object()) { ?>
				<tr>
					<td><?php echo $n++."." ?></td>
					<td><?php echo $row->judul_berita; ?></td>
					<td><?php echo $row->nama_kategori; ?></td>
					<td><?php echo $row->tanggal; ?></td>
					<td><?php echo $row->terbitkan; ?></td>
					<td><?php echo $row->nama_admin; ?></td>
					<td><a href="index.php?master=edit_berita&ambil_id_berita=<?php echo $row->id_berita; ?>" class="btn btn-warning"><i class="fa fa-pencil-square"></i> Edit</a></td>
					<td><a href="berita/hapus_berita.php?ambil_id_berita=<?php echo $row->id_berita; ?>" onClick="return confirm('Data Akan Dihapus !')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
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
    $('#table-data').DataTable({
        rowReorder: true,
        columnDefs: [
            { orderable: false, className: 'reorder', targets: 6 },
            { orderable: false, className: 'reorder', targets: 7 },
            { orderable: true, targets: '_all' }
        ]
    } );
});
</script>
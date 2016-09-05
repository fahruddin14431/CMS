<?php 

include '../Config/koneksi.php';

$id = $_GET['ambil_id_kategori'];

$sql = "SELECT * FROM tb_kategori WHERE id_kategori=$id";
$result=$koneksi->query($sql);

while ($row = $result->fetch_object()) {

?>

<div class="container">
	<h3><b>Ubah Daftar Kategori</b></h3>
	<br>
		<form class="form col-xs-12 col-sm-4 col-md-3" method="POST" action="Kategori/edit_kategori.php">
			<div class="form-group">
	          	<label>Kode Kategori</label>
	          	<input type="text" class="form-control" name="kode_kategori" value="<?php echo $row->id_kategori; ?>" readonly  />
	        </div>
	        <div class="form-group">
	          	<label>Kategori</label>
	          	<input type="text" class="form-control" name="kategori" maxlength="30" value="<?php echo $row->nama_kategori; ?>" autocomplete="off" required autofocus=""/>
	        </div>
	        	<input type="submit" value="Simpan" class="btn btn-success"/>
		</form>
		<?php } ?> 
</div>


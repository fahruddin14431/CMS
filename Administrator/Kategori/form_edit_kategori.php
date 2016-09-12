<?php 

include '../Config/koneksi.php';

$id = $_GET['ambil_id_kategori'];

$sql = "SELECT * FROM tb_kategori WHERE id_kategori=$id";
$result=$koneksi->query($sql);

while ($row = $result->fetch_object()) {

?>

<div class="container col-md-6">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>
				<a href="index.php?master=kategori"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
				<b>Ubah Daftar Kategori</b>
			</h3>
		</div>
		<div class="panel-body">
			<form class="form col-xs-12 col-sm-4 col-md-8" method="POST" action="Kategori/edit_kategori.php">
				<div class="row">
					<div class="form-group col-xs-8 col-sm-9 col-md-6">
			        	<label>Kode Kategori</label>
			          	<input type="text" class="form-control" name="kode_kategori" value="<?php echo $row->id_kategori; ?>" readonly  />
			        </div>
				</div>
	        	<div class="row">
		        	<div class="form-group col-xs-9 col-md-12">
				        <div class="form-group">
				          	<label>Kategori</label>
				          	<input type="text" class="form-control" name="kategori" maxlength="30" value="<?php echo $row->nama_kategori; ?>" autocomplete="off" required autofocus=""/>
				        </div>
					</div>
				</div>
		   		<div class="row">
			    	<div class="col-md-12">
					  	<button type="submit" class="btn btn-success"><i class="fa fa-check fa-lg"> Simpan</i></button>
					</div>
	        	</div>
			</form>
			<?php } ?> 
		</div>
</div>


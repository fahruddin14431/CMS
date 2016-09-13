<?php 
include '../Config/koneksi.php';
$admin = $_SESSION['user'];
$id = $_GET['ambil_id_berita'];

$sql = "SELECT * FROM tb_berita WHERE id_berita=$id";
$result=$koneksi->query($sql);

while ($row = $result->fetch_object()) {
 ?>

<div class="container col-md-8">

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-tittle">
			<a href="index.php?master=berita"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
			<b>Ubah Berita</b>
		</h3>
	</div>
	<div class="panel-body">
		<form class="form col-xs-12 col-sm-4 col-md-12" method="POST" action="Berita/edit_berita.php" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-xs-12 col-sm-9 col-md-4">
		          	<label>Kode berita</label>
		          	<input type="text" class="form-control" name="kode_ber" placeholder="Kode berita" value="<?php echo $row->id_berita; ?>" readonly  />
		        </div>
	        </div>
	        <div class="row">
		        <div class="form-group col-xs-12 col-md-12">
		          	<label>Judul</label>
		          	<input type="text" class="form-control" name="jud_ber" placeholder="Judul Berita" maxlength="200" autocomplete="off" autofocus="" value="<?php echo $row->judul_berita;  ?>" required/>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-4">
		          	<label>Kategori</label>
		          	<select name="kod_kat" class="form-control" required>
		          		<option value="">-- Pilih Kategori Berita --</option>
		          		<?php $result1 = $koneksi->query("SELECT * FROM tb_kategori"); 
		          				while ($row1 = $result1->fetch_object()) { 
		          					$status = $row1->id_kategori==$row->id_kategori?'selected':'' ?>
		          		<option <?php echo $status; ?> value = "<?php echo $row1->id_kategori ?>"><?php echo $row1->nama_kategori; ?></option>
		          		<?php } ?>
		          	</select>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-12">
		          	<label>Isi Berita</label>
		          	<textarea name="isi_ber" rows="10" class="form-control" required><?php echo $row->isi_berita; ?></textarea>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-4">
		          	<label>Tanggal</label><small class="text-muted"> - Otomatis</small>
		          	<input type="text" class="form-control" name="tgl" placeholder="berita" value="<?php echo $row->tanggal; ?>" readonly/>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-8">
		          	<label>Terbitkan</label>
		          	<?php 
		          	$status = $row->terbitkan=="YA"?'checked':'';
		          	 ?>
		          	<div class="radio">
		          		<label><input type="radio" value="YA" name="ter_ber" checked="<?php echo $status; ?>"  required> YA</label>
		          	</div>
		          	<div class="radio">
		          		<label><input type="radio" value="TIDAK" name="ter_ber" checked="<?php echo $status; ?>" > TIDAK</label>
		       		</div>
		       	</div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-8">
		          	<label>Keterangan</label><small class="text-muted"> - Opsional</small>
		          	<input type="text" class="form-control" name="ket_ber" value="<?php echo $row->keterangan; ?>" placeholder="Keterangan" />
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-8">
		          	<label>Foto</label>
		          	<?php
		           		$ganti_path = $row->foto;
		           		$foto = substr($ganti_path, 3);
		          	 ?>
		          	<img src="<?php echo $foto ?>" style="border-radius:5px" width="100%" height="200px">
		          	<br><br>
		          	<input type="file" name="foto_ber">
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-6">
		          	<label>Nama Admin</label>
		          	<select name="id_admin" class="form-control" readonly>
		          		<?php $result1 = $koneksi->query("SELECT id_admin,nama_admin FROM tb_admin WHERE user='$admin'"); 
		          				while ($row1 = $result1->fetch_object()) { 
		          					$status = $row1->id_admin==$row->id_admin?'selected':'' ?>
		          		<option <?php echo $status; ?> value = "<?php echo $row1->id_admin ?>"><?php echo $row1->nama_admin; ?></option>
		          		<?php } ?>
		          	</select>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-md-6">
	        		<button type="submit" class="btn btn-success"><i class="fa fa-check fa-lg"> Simpan</i></button>
	        	</div>
	        </div>
		</form>
		<?php } ?>
	</div>
</div>

</div>



<?php 
$admin = $_SESSION['user'];
include '../Config/koneksi.php';

    // kode otomatis
    $carikode = mysqli_query($koneksi, "SELECT MAX(id_berita) FROM tb_berita") or die (mysql_error());
    $datakode = mysqli_fetch_array($carikode);
   
    if ($datakode) {
        $nilaikode = substr($datakode[0],0);
        $kode = (int) $nilaikode;
        $kode_otomatis = $kode + 1;
    } else {
        $kode_otomatis = "3001";
    }
 ?>

<div class="container col-md-8">

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-tittle">
			<a href="index.php?master=berita"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
			<b>Tambah Berita</b>
		</h3>
	</div>
	<div class="panel-body">
		<form class="form col-xs-12 col-sm-4 col-md-12" method="POST" action="berita/tambah_berita.php" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-xs-12 col-sm-9 col-md-4">
		          	<label>Kode berita</label>
		          	<input type="text" class="form-control" name="kode_ber" placeholder="Kode berita" value="<?php echo $kode_otomatis; ?>" readonly  />
		        </div>
	        </div>
	        <div class="row">
		        <div class="form-group col-xs-12 col-md-12">
		          	<label>Judul</label>
		          	<input type="text" class="form-control" name="jud_ber" placeholder="Judul Berita" maxlength="50" autocomplete="off" autofocus="" required/>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-4">
		          	<label>Kategori</label>
		          	<select name="kod_kat" class="form-control" required>
		          		<option value="">-- Pilih Kategori Berita --</option>
		          		<?php $result = $koneksi->query("SELECT * FROM tb_kategori"); 
		          				while ($row = $result->fetch_object()) { ?>
		          		<option value = "<?php echo $row->id_kategori ?>"><?php echo $row->nama_kategori; ?></option>
		          		<?php } ?>
		          	</select>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-12">
		          	<label>Isi Berita</label>
		          	<textarea name="isi_ber" rows="10" class="form-control" required></textarea>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-4">
		          	<label>Tanggal</label><small class="text-muted"> - Otomatis</small>
		          	<input type="text" class="form-control" name="tgl" placeholder="berita" value="<?php echo date("Y-m-d"); ?>" readonly/>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-8">
		          	<label>Terbitkan</label>
		          	<div class="radio">
		          		<label><input type="radio" value="YA" name="ter_ber" required> YA</label>
		          	</div>
		          	<div class="radio">
		          		<label><input type="radio" value="TIDAK" name="ter_ber"> TIDAK</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-8">
		          	<label>Keterangan</label><small class="text-muted"> - Opsional</small>
		          	<input type="text" class="form-control" name="ket_ber" placeholder="Keterangan" />
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-6">
		          	<label>Foto</label>
		          	<input type="file" name="foto_ber" required>
		        </div>
		    </div>
		    <div class="row">
		        <div class="form-group col-xs-12 col-md-6">
		          	<label>Nama Admin</label>
		          	<select name="id_admin" class="form-control" readonly>
		          		<?php $result = $koneksi->query("SELECT id_admin,nama_admin FROM tb_admin WHERE user='$admin'"); 
		          				while ($row = $result->fetch_object()) { ?>
		          		<option value = "<?php echo $row->id_admin ?>"><?php echo $row->nama_admin; ?></option>
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
	</div>
</div>

</div>



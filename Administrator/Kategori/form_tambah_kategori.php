<?php 

include '../Config/koneksi.php';

    // kode otomatis
    $carikode = mysqli_query($koneksi, "SELECT MAX(id_kategori) FROM tb_kategori") or die (mysql_error());
    $datakode = mysqli_fetch_array($carikode);
   
    if ($datakode) {
        $nilaikode = substr($datakode[0],0);
        $kode = (int) $nilaikode;
        $kode_otomatis = $kode + 1;
    } else {
        $kode_otomatis = "2001";
    }
 ?>

<div class="container">
	<h3><b>Tambah Daftar Kategori</b></h3>
	<br>
		<form class="form col-xs-12 col-sm-4 col-md-3" method="POST" action="Kategori/tambah_kategori.php">
			<div class="form-group">
	          	<label>Kode Kategori</label>
	          	<input type="text" class="form-control" name="kode_kategori" placeholder="Kode Kategori" value="<?php echo $kode_otomatis; ?>" readonly  />
	        </div>
	        <div class="form-group">
	          	<label>Kategori</label>
	          	<input type="text" class="form-control" name="kategori" placeholder="Kategori" maxlength="30" autocomplete="off" required autofocus=""/>
	        </div>
	        	<input type="submit" value="Simpan" class="btn btn-success"/>
		</form>
</div>


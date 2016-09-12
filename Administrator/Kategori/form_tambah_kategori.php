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

<div class="container col-md-6">

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-tittle">
			<a href="index.php?master=kategori"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
			<b>Tambah Daftar Kategori</b>
		</h3>
	</div>
	<div class="panel-body">
		<form class="form col-xs-12 col-sm-4 col-md-8" method="POST" action="Kategori/tambah_kategori.php">
			<div class="row">
				<div class="form-group col-xs-8 col-sm-9 col-md-6">
		          	<label>Kode Kategori</label>
		          	<input type="text" class="form-control" name="kode_kategori" placeholder="Kode Kategori" value="<?php echo $kode_otomatis; ?>" readonly  />
		        </div>
	        </div>
	        <div class="row">
		        <div class="form-group col-xs-9 col-md-12">
		          	<label>Kategori</label>
		          	<input type="text" class="form-control" name="kategori" placeholder="Kategori" maxlength="30" autocomplete="off" autofocus="" required/>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-md-12">
	        		<button type="submit" class="btn btn-success"><i class="fa fa-check fa-lg"> Simpan</i></button>
	        	</div>
	        </div>
		</form>
	</div>
</div>

</div>



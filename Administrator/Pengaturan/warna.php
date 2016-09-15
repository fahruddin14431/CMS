<div class="container col-md-3">
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-tittle"><b>Pengaturan Warna</b></h3>
		</div>

	<div class="panel-body">
		<form method="POST">
		    <div class="form-group">
		        <input type="radio" name="warna" value="skin-blue" > Biru <small>(Default)</small>
		    </div>
		    <div class="form-group">
				<input type="radio" name="warna" value="skin-red" > Merah
			</div>
			<div class="form-group">
				<input type="radio" name="warna" value="skin-yellow" > Kuning
			</div>
			<div class="form-group">
				<input type="radio" name="warna" value="skin-green" > Hijau
			</div>
			<div class="form-group">
				<input type="radio" name="warna" value="skin-purple" > Ungu
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fa fa-check"> Simpan</i></button>
			</div>	
		</form>	    
	</div>

</div>

<?php 

$_SESSION['warna'] = isset($_POST['warna'])?$_POST['warna']:"";
if ($_SESSION['warna']!=""){
echo '<script type="text/javascript">
 window.location="index.php";
 </script>';
}


 ?>

 

</div>
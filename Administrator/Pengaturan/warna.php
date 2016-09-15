<div class="container col-md-3">
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-tittle"><b>Pengaturan Warna</b></h3>
		</div>

	<div class="panel-body">
		<form method="POST" action="">
		    <div class="form-group">
		        <input type="radio" name="warna" value="skin-blue" checked="<?php echo $_SESSION['warna']=='skin-blue'?'checked':''; ?>" > Biru <small>(Default)</small>
		    </div>
		    <div class="form-group">
				<input type="radio" name="warna" value="skin-red" checked="<?php echo $_SESSION['warna']=='skin-red'?'checked':''; ?>" > Merah
			</div>
			<div class="form-group">
				<input type="radio" name="warna" value="skin-yellow" checked="<?php echo $_SESSION['warna']=='skin-yellow'?'checked':''; ?>" > Kuning
			</div>
			<div class="form-group">
				<input type="radio" name="warna" value="skin-green" checked="<?php echo $_SESSION['warna']=='skin-green'?'checked':''; ?>" > Hijau
			</div>
			<div class="form-group">
				<input type="radio" name="warna" value="skin-purple" checked="<?php echo $_SESSION['warna']=='skin-purple'?'checked':''; ?>" > Ungu
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fa fa-check"> Simpan</i></button>
			</div>	
		</form>	    
	</div>

</div>

<?php 
$_SESSION['warna'] = isset($_POST['warna'])?$_POST['warna']:"skin-blue";
echo $_SESSION['warna'];
 ?>

</div>
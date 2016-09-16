<?php 

include 'Config/koneksi.php';

$id = $_GET['id_berita'];

$result = $koneksi->query( "SELECT * FROM tb_berita	WHERE id_berita = '$id' ");
    while ($row = $result->fetch_object()) {  ?>

        <h1><?php echo $row->judul_berita; ?></h1>
            <p>
                <span class="glyphicon glyphicon-time"></span> <?php echo $row->tanggal ?>
            </p>
            <?php 
                $ganti_link = $row->foto;
                $foto = substr($ganti_link, 6);
            ?>
        <hr>
        <img class="img-responsive" src="<?php echo $foto ?>" alt="">
        <hr>
        <p class="text-justify">
        	<?php echo $isi =  $row->isi_berita; ?>
        </p>                    
        <?php } ?>
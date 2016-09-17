<?php 

include 'Config/koneksi.php';

$id = $_GET['id_berita'];

$result = $koneksi->query( "SELECT  b.id_berita,
                                    b.judul_berita,
                                    k.nama_kategori,
                                    b.isi_berita,
                                    b.tanggal,
                                    b.foto,
                                    a.nama_admin
                            FROM tb_berita b, tb_kategori k, tb_admin a
                            WHERE b.id_admin = a.id_admin
                            AND b.id_kategori = k.id_kategori 
                            AND b.id_berita = '$id' ");
    while ($row = $result->fetch_object()) {  ?>

        <h1><?php echo $row->judul_berita; ?></h1>
            <p class="text-muted">
                <?php $s = "&nbsp"; ?>
                <span class="fa fa-clock-o"></span><?php echo $s.$row->tanggal.$s?>
                <span class="fa fa-tags"></span><?php echo $s.$row->nama_kategori.$s ?>
                <span class="fa fa-user"></span><?php echo $s.$row->nama_admin.$s ?>
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

</div>
<!-- end Blog Entries Column -->

<?php include 'sidebar.php'; ?>
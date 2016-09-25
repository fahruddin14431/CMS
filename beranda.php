<?php 

include 'Config/koneksi.php';

// pagination

$start = 0;
$limit = 3;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $start = ($id-1)*$limit;
}else{
    $id = 1;
}



$result = $koneksi->query("SELECT   b.id_berita,
                                    b.judul_berita,
                                    k.nama_kategori,
                                    b.isi_berita,
                                    b.tanggal,
                                    b.foto,
                                    a.nama_admin
                            FROM tb_berita b, tb_kategori k, tb_admin a
                            WHERE b.id_admin = a.id_admin
                            AND b.id_kategori = k.id_kategori
                            AND terbitkan = 'YA' ORDER BY id_berita DESC LIMIT $start, $limit");

    while ($row = $result->fetch_object()) {  ?>
    <br>
        <h1><?php echo $row->judul_berita; ?></h1>
            <p class="text-muted">
                <?php $s = "&nbsp"; ?>
                <span class="fa fa-clock-o"></span><?php echo $s.$row->tanggal.$s?>
                <span class="fa fa-tags"></span><?php echo $s.$row->nama_kategori.$s ?>
                <span class="fa fa-user"></span><?php echo $s.$row->nama_admin.$s ?>
            </p>
            <?php 
                // memperbarui alamat gambar
                $ganti_link = $row->foto;
                $foto = substr($ganti_link, 6);
            ?>
        <hr>
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <img class="img-responsive" src="<?php echo $foto ?>" alt="">
            </div>
        </div>
        <hr>
        <p class="text-justify">
            <?php 
                $isi =  $row->isi_berita;

                 // cek kondisi banyak kata berita
                if(strlen($isi)>30){
                    $bagi_isi = explode(" ", $isi, 33);
                    for ($i=0; $i <32 ; $i++) { 
                        echo $bagi_isi[$i]." ";
                    }
                }else{
                    echo $isi;
                }
            ?>
        </p>                    
        <a class="btn btn-primary" href="index.php?halaman=detail_berita&id_berita=<?php echo $row->id_berita ?>">
            Selanjutnya <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <hr>
        <?php } ?>

        <?php 

        // hitung total berita dengan terbitkan = ya
        $rows = mysqli_num_rows(mysqli_query($koneksi, "SELECT id_berita FROM tb_berita WHERE terbitkan = 'YA' "));
        // total halaman = total berita / batas 
        $total = ceil($rows/$limit);

         ?>

        <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <?php if ($id>1){ ?>
                        <a href="index.php?halaman=beranda&id=<?php echo $id-1 ?>">&larr; Terbaru</a>
                    <?php } ?>
                </li>
                <li class="next">
                    <?php if($id!=$total){ ?>
                        <a href="index.php?halaman=beranda&id=<?php echo $id+1 ?>">Terdahulu &rarr;</a>
                    <?php } ?>
                </li>
            </ul>
        <!-- end Pager -->

</div>
<!-- end Blog Entries Column -->

<?php include 'sidebar.php'; ?>
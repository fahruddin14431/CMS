<?php 

include 'Config/koneksi.php';

$result = $koneksi->query("SELECT * FROM tb_berita WHERE terbitkan = 'YA' ORDER BY id_berita DESC LIMIT 3");
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
        <img class="img-responsive" height="auto" src="<?php echo $foto ?>" alt="">
        <hr>
        <p class="text-justify">
            <?php 
                $isi =  $row->isi_berita; 
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

        <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>
        <!-- end Pager -->
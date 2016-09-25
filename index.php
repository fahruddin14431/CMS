<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CMS">
    <meta name="author" content="Fahruddin Yusuf Habibi">

    <title>CMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Assets/bootstrap/css/blog-home.css" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CMS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?halaman=beranda">Beranda</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=profil">Profil</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kontak">Kontak</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=tentang">Tentang</a>
                    </li>
                    <li>
                        <a href="Login/login.php" target="blank">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.nav -->
    <?php 
        $page = basename($_SERVER['REQUEST_URI']);
        if ($page == 'index.php' || $page == 'cms'){
            include 'slider.php';
        }    
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php 
                    if(@$_GET['halaman']=="beranda"){
                        include 'beranda.php';
                    }
                    elseif(@$_GET['halaman']=="profil"){
                        include 'profil.php';
                    }
                    elseif (@$_GET['halaman']=="kontak") {
                        include 'kontak.php';
                    }
                    elseif (@$_GET['halaman']=="tentang") {
                        include 'tentang.php';
                    }
                    elseif (@$_GET['halaman']=="detail_berita") {
                        include 'detail_berita.php';
                    }else{
                        include 'depan.php';
                    }   
                ?>


        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CMS <?php echo date("Y"); ?></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="Assets/bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Assets/bootstrap/js/bootstrap.min.js"></script>

     <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
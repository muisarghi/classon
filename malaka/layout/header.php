<?php
ob_start();
@ini_set('display_errors', 'on');

include 'inc/inc.php';
$skola=mysqli_query($conn,"select * from sekolah order by npsn desc limit 1");
while($skol=mysqli_fetch_array($skola))
	{
	$namaskol=$skol['nama'];
	$alamatskol=$skol['alamat'];
	$kecamatanskol=$skol['kecamatan'];
	$kabupatenskol=$skol['kabupaten'];
	$provinsiskol=$skol['provinsi'];
	$kodeposskol=$skol['kodepos'];
	$telpskol=$skol['telp'];
	$emailskol=$skol['email'];
	$fb_nameskol=$skol['fb_name'];
	$fb_pathskol=$skol['fb_path'];
	$instagram_nameskol=$skol['instagram_name'];
	$instagram_pathskol=$skol['instagram_path'];
	$logoskol=$skol['logo'];
	$footerskol=$skol['footer'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $namaskol; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="index.php"><span><?php echo $namaskol; ?></span></a></h1>
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li class="drop-down"><a href="index.php?load=PROFILE">Profil</a>
            <ul>
							<li><a href="index.php?load=PROFILE">Profile</a></li>
							<li><a href="index.php?load=SEJARAH">Sejarah</a></li>
							<li><a href="index.php?load=VISI">Visi Misi</a></li>
							<li><a href="index.php?load=TUJUAN">Tujuan</a></li>
							<li><a href="index.php?load=SAMBUTAN">Sambutan</a></li>
							<li><a href="index.php?load=JAJARAN">Jajaran</a></li>
            </ul>
          </li>
					<li><a href="index.php?load=BERITA">Berita</a></li>
					<li class="drop-down"><a href="#">Informasi</a>
            <ul>
							<li><a href="index.php?load=INFORMASI">Pengumuman</a></li>
							<li><a href="index.php?load=GALERY">Galeri</a></li>
							<li><a href="index.php?load=BUKUTAMU">Buku Tamu</a></li>
            </ul>
					</li>
					<li class="drop-down"><a href="#">Jurusan</a>
            <ul>
							<li><a href="index.php?load=JURRPL">IPA</a></li>
							<li><a href="jurusan.html">IPS</a></li>
            </ul>
          </li>
          <li><a href="#">PPDB</a></li>
					<li><a href="https://onklas.com">E-Learning</a></li>
					<li><a href="https://onklas.com">Login</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
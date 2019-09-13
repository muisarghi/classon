<?php
ob_start();
@ini_set('display_errors', 'off');

include 'inc/inc.php';

$skola=mysql_query("select * from sekolah order by npsn desc limit 1");
while($skol=mysql_fetch_array($skola))
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
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-tutwuri-122x123.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home | <?php echo $namaskol; ?></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  

</head>
<body>
  <section class="menu cid-rs0XR0R4YX" once="menu" id="menu2-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="<?php echo $logoskol; ?>" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.html">
                        <?php echo $namaskol;?></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">
                        Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="false">
                        Profil</a><div class="dropdown-menu"><a class="text-black dropdown-item display-4" href="index.php?load=profil">Profil</a><a class="text-black dropdown-item display-4" href="index.php?load=sejarah">Sejarah</a><a class="text-black dropdown-item display-4" href="index.php?load=visi">Visi Misi</a><a class="text-black dropdown-item display-4" href="index.php?load=sambutan">Sambutan</a><a class="text-black dropdown-item display-4" href="index.php?load=jajaran" aria-expanded="false">Jajaran</a></div>
						</li>
						<li class="nav-item"><a class="nav-link link text-black display-4" href="index.php?load=berita" aria-expanded="false">
                        Berita</a></li>
						<li class="nav-item dropdown">
						<a class="nav-link link text-black dropdown-toggle display-4" href="#" aria-expanded="true" data-toggle="dropdown-submenu">
                        Jurusan</a>
							<div class="dropdown-menu">
							<?php
							$jurusan1=mysql_query("select * from jurusan order by id asc");
							while($jurusan=mysql_fetch_array($jurusan1))
								{
								echo"
								<a class='text-black dropdown-item display-4' href='index.php?load=jurusan&id=$jurusan[id]' aria-expanded='false'>$jurusan[jurusan]</a>
								";
								}
							?>
							<!--
							<a class="text-black dropdown-item display-4" href="index.php?load=jurmultimedia" aria-expanded="false">Multimedia</a>
							<a class="text-black dropdown-item display-4" href="index.php?load=jurtatabusana" aria-expanded="false">Tata Busana</a>
							<a class="text-black dropdown-item display-4" href="index.php?load=jurperhotelan" aria-expanded="false">Perhotelan</a><a class="text-black dropdown-item display-4" href="index.php?load=jurkecantikan" aria-expanded="true">Kecantikan</a>
							-->

							</div>
							</li>
							
							<li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="https://mobirise.co" aria-expanded="false" data-toggle="dropdown-submenu">
							Informasi</a>
								<div class="dropdown-menu">
								<a class="text-black dropdown-item display-4" href="index.php?load=galery" aria-expanded="false">Galeri
								</a>
								<a class="text-black dropdown-item display-4" href="index.php?load=pengumuman" aria-expanded="false">Pengumuman</a>
								<a class="text-black dropdown-item display-4" href="index.php?load=kontak" aria-expanded="false">Kontak</a>
								</div>
							</li>
							
							<li class="nav-item"><a class="nav-link link text-black display-4" href="https://onklas.com" aria-expanded="false" target="_blank">PPDB</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="https://onklas.com" aria-expanded="false" target="_blank">E-Learning</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="./admin/" aria-expanded="false" target="_blank">| &nbsp; &nbsp;Login /Daftar</a></li></ul>
            
        </div>
    </nav>
</section>
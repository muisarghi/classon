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
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title><?php echo $namaskol; ?></title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/fw/build/fontawesome-all.min.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/nivo-slider/css/nivo-slider.css">
  <link rel="stylesheet" href="css/nivo-slider-theme.css">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/tutwuri.png" type="image/png">
  <style>
    #footer a {
      color: #fff;
    }
    #footer .social {
      display: inline-block;
      margin-right: 15px;
    }
  </style>
  <link rel="stylesheet" href="css/custom.css">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h5" href="index.php">
	<?php echo "<img src='$logoskol' height='50px'> $namaskol"; ?>
	</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" data-toggle="dropdown">Profil</a>
          <div class="dropdown-menu">
            <a href="index.php?load=PROFILE" class="dropdown-item">Profile</a>
            <a href="index.php?load=SEJARAH" class="dropdown-item">Sejarah</a>
            <a href="index.php?load=VISI" class="dropdown-item">Visi Misi</a>
            <a href="index.php?load=TUJUAN" class="dropdown-item">Tujuan</a>
            <a href="index.php?load=SAMBUTAN" class="dropdown-item">Sambutan Kepala Sekolah</a>
            <a class="dropdown-item" href="index.php?load=JAJARAN">Jajaran</a>
          </div>
        </li>
        <li class="nav-item">
		<!--<a class="nav-link" href="#berita">Berita</a>-->
		<a class="nav-link" href="index.php?load=BERITA">Berita</a>
		</li>
        <li class="nav-item dropdown">
          <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" data-toggle="dropdown">Informasi</a>
          <div class="dropdown-menu">
            <a href="index.php?load=INFORMASI" class="dropdown-item">Pengumuman</a>
            <a href="index.php?load=GALERY" class="dropdown-item">Galeri</a>
            <a href="index.php?load=BUKUTAMU" class="dropdown-item">Buku Tamu</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Jurusan</a>
          <div class="dropdown-menu">
            <?php
			$jurusan1=mysql_query("select * from jurusan order by jurusan asc");
			while($jurusan=mysql_fetch_array($jurusan1))
				{
				echo"
				<a href='index.php?load=JURUSAN&id=$jurusan[id]' class='dropdown-item'>$jurusan[jurusan]</a>
				";
				}
			?>
			<!--<a href="index.php?load=jurRPL" class="dropdown-item">Rekayasa Perangkat Lunak</a>
			-->
          </div>
        </li>
        <li class="nav-item active"><a class="nav-link" href="https://onklas.com">PPDB</a></li>
        <li class="nav-item active"><a class="nav-link" href="https://onklas.com">E-Learning</a></li>
        <li class="nav-item active"><a class="nav-link" href="./admin/">Login</a></li>
      </ul>
    </div>
  </nav>
</header>
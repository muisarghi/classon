<?php
ob_start();
@ini_set('display_errors', 'off');

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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $namaskol; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Library -->
  <link rel="stylesheet" href="vendor/nivo-slider/css/nivo-slider.css">
  <link rel="stylesheet" href="css/nivo-slider-theme.css">

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo $logoskol; ?>" type="image/png">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="<?php echo $logoskol; ?>" style="width: 25%">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
            <div class="dropdown-menu">
              <!--<a href="#services" class="dropdown-item">Profile</a>-->
				<a href="index.php?load=PROFILE" class="dropdown-item">Profile</a>
				<a href="index.php?load=SEJARAH" class="dropdown-item">Sejarah</a>
				<a href="index.php?load=VISI" class="dropdown-item">Visi Misi</a>
				<a href="index.php?load=TUJUAN" class="dropdown-item">Tujuan</a>
				<a href="index.php?load=SAMBUTAN" class="dropdown-item">Sambutan Kepala Sekolah</a>
				<a href="index.php?load=JAJARAN" class="dropdown-item">Jajaran</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#berita">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi</a>
            <div class="dropdown-menu">
              <a href="index.php?load=INFORMASI" class="dropdown-item">Pengumuman</a>
              <a href="index.php?load=GALERY" class="dropdown-item">Galeri</a>
              <a href="index.php?load=BUKUTAMU" class="dropdown-item">Buku Tamu</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jurusan</a>
            <div class="dropdown-menu">
			<?php
					$jurusan1=mysqli_query($conn,"select * from jurusan order by jurusan asc");
					while($jurusan=mysqli_fetch_array($jurusan1))
						{
						echo"
						<a href='index.php?load=JURUSAN&id=$jurusan[id]' class='dropdown-item'>$jurusan[jurusan]</a>
						";
						}
					?>
              <!--<a href="jurusan.html" class="dropdown-item">Rekayasa Perangkat Lunak</a>-->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://onklas.com">PPDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://onklas.com">ELearning</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://onklas.com">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
ob_start();
@ini_set('display_errors', 'off');

include 'inc/inc.php';
include 'layout/sekolah.php';
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
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="lib/fw/build/fontawesome-all.min.css">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/magnific-popup/magnific-popup.css">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css">
	<style>
		.cover { width: 100%; }
	</style>
  <link rel="shortcut icon" href="img/tutwuri.png" type="image/png">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Cari sesuatu</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <input type="text" class="form-control form-control-lg form-control-a">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php"><span class="color-b"><?php echo $namaskol; ?></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fas fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
		<?php
		if(isset($_GET['load']))
			{
			$load=$_GET['load'];
			}
		else
			{
			$load='';
			}
		//$load=$_GET['load'];
		//echo"--- $load";
		if($load=='')
			{$lhome='active'; $lprofile=''; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='PROFILE')
			{$lhome=''; $lprofile='active'; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='SEJARAH')
			{$lhome=''; $lprofile='active'; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='VISI')
			{$lhome=''; $lprofile='active'; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='TUJUAN')
			{$lhome=''; $lprofile='active'; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='SAMBUTAN')
			{$lhome=''; $lprofile='active'; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='JAJARAN')
			{$lhome=''; $lprofile='active'; $lberita=''; $linformasi=''; $ljurusan='';}
		elseif($load=='BERITA')
			{$lhome=''; $lprofile=''; $lberita='active'; $linformasi=''; $ljurusan='';}
		elseif($load=='DETAILBERITA')
			{$lhome=''; $lprofile=''; $lberita='active'; $linformasi=''; $ljurusan='';}
		elseif($load=='INFORMASI')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi='active'; $ljurusan='';}
		elseif($load=='DETAILINFORMASI')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi='active'; $ljurusan='';}
		elseif($load=='GALERY')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi='active'; $ljurusan='';}
		elseif($load=='BUKUTAMU')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi='active'; $ljurusan='';}
		elseif($load=='BUKUTAMU2')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi='active'; $ljurusan='';}
		elseif($load=='BUKUTAMU3')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi='active'; $ljurusan='';}
		elseif($load=='JURRPL')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi=''; $ljurusan='active';}
		else
			{}
		?>
          <li class="nav-item"><a class="nav-link <?php echo $lhome; ?>" href="index.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link <?php echo $lprofile; ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?load=PROFILE">Profile</a>
              <a class="dropdown-item" href="index.php?load=SEJARAH">Sejarah</a>
              <a class="dropdown-item" href="index.php?load=VISI">Visi Misi</a>
              <a class="dropdown-item" href="index.php?load=TUJUAN">Tujuan</a>
              <a class="dropdown-item" href="index.php?load=SAMBUTAN">Sambutan Kepala Sekolah</a>
              <a class="dropdown-item" href="index.php?load=JAJARAN">Jajaran</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link <?php echo $lberita; ?>" href="index.php?load=BERITA">Berita</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link <?php echo $linformasi; ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Informasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?load=INFORMASI">Pengumuman</a>
              <a class="dropdown-item" href="index.php?load=GALERY">Galeri</a>
              <a class="dropdown-item" href="index.php?load=BUKUTAMU">Buku Tamu</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link <?php echo $ljurusan; ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Jurusan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<?php
			$jurusan1=mysqli_query($conn,"select * from jurusan order by jurusan asc");
			while($jurusan=mysqli_fetch_array($jurusan1))
				{
				echo"
				<a class='dropdown-item' href='index.php?load=JURUSAN&id=$jurusan[id]'>$jurusan[jurusan]</a>
				";
				}
			?>
              <!--<a class="dropdown-item" href="index.php?load=JURRPL">Rekayasa Perangkat Lunak</a>-->
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="https://onklas.com" target="_blank">PPDB</a></li>
          <li class="nav-item"><a class="nav-link" href="https://onklas.com" target="_blank">E-Learning</a></li>
          <li class="nav-item"><a class="nav-link" href="https://onklas.com" target="_blank">Login</a></li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fas fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
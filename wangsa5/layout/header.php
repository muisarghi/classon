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
<html>

<head>
  <meta charset="utf-8">
  <title>SMA Negeri Indonesia</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <link rel="shortcut icon" href="images/tutwuri.png" type="image/png">

  <link rel="stylesheet" href="vendor/fw/build/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/profil.css">
</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
	  
            <div class="logo">
				
				
				
                <figure>
                    <h3 class="text-dark">
					<a href='index.php'><img src="<?php echo $logoskol; ?>" height="65px"></a> &nbsp;&nbsp;
					<a href='index.php'><?php echo $namaskol; ?></a>
					</h3>
                </figure>
            </div>
            <div class="right-side">
                <ul class="contact-info">
                    <li class="item">
                        <div class="icon-box">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <strong>Email</strong>
                        <br>
                        <!--<a href="#">-->
                            <span><?php echo $emailskol; ?></span>
                        </a>
                    </li>
                    <li class="item">
                        <div class="icon-box">
                            <i class="fas fa-phone"></i>
                        </div>
                        <strong>Telepon</strong>
                        <br>
                        <span><?php echo $telpskol; ?></span>
                    </li>
                </ul>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

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
		elseif($load=='JURUSAN')
			{$lhome=''; $lprofile=''; $lberita=''; $linformasi=''; $ljurusan='active';}
		else
			{}
		?>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="<?php echo $lhome; ?>"><a href="index.php">Home</a></li>
                    <li class="dropdown <?php echo $lprofile; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?load=PROFILE" class="active">Profile</a></li>
                            <li><a href="index.php?load=SEJARAH">Sejarah</a></li>
                            <li><a href="index.php?load=VISI">Visi Misi</a></li>
                            <li><a href="index.php?load=TUJUAN">Tujuan</a></li>
                            <li><a href="index.php?load=SAMBUTAN">Sambutan Kepala Sekolah</a></li>
                            <li><a href="index.php?load=JAJARAN">Jajaran</a></li>
                        </ul>
                    </li>
                    <!--<li class="<?php echo $lberita; ?>"><a href="#berita">Berita</a></li> -->
					<li class="<?php echo $lberita; ?>"><a href="index.php?load=BERITA">Berita</a></li>
                    <li class="dropdown <?php echo $linformasi; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?load=INFORMASI">Pengumuman</a></li>
                            <li><a href="index.php?load=GALERY">Galeri</a></li>
                            <li><a href="index.php?load=BUKUTAMU">Buku Tamu</a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo $ljurusan; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jurusan <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
							<?php
							$jurusan1=mysql_query("select * from jurusan order by jurusan asc");
							while($jurusan=mysql_fetch_array($jurusan1))
							{
							echo"
							<li><a href='index.php?load=JURUSAN&id=$jurusan[id]'>$jurusan[jurusan]</a></li>
							";
							}
                            ?>
                        </ul>
                    </li>
                    <li><a href="https://onklas.com">PPDB</a></li>
                    <li><a href="https://onklas.com">E-Learning</a></li>
                    <li><a href="./admin/" target="_blank">Login</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->



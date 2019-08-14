<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Buku Tamu SMA Negeri Indonesia</title>
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
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

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
        <h1 class="text-light"><a href="#header"><span>SMAN.ID</span></a></h1>
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
					<li class="active"><a href="index.html">Home</a></li>
					<li class="drop-down"><a href="#">Profil</a>
            <ul>
							<li><a href="profil.html">Profile</a></li>
							<li><a href="sejarah.html">Sejarah</a></li>
							<li><a href="visimisi.html">Visi Misi</a></li>
							<li><a href="tujuan.html">Tujuan</a></li>
							<li><a href="sambutan.html">Sambutan</a></li>
							<li><a href="jajaran.html">Jajaran</a></li>
            </ul>
          </li>
					<li><a href="berita.html">Berita</a></li>
					<li class="drop-down"><a href="#">Informasi</a>
            <ul>
							<li><a href="informasi.html">Pengumuman</a></li>
							<li><a href="galeri.html">Galeri</a></li>
							<li><a href="tamu.html">Buku Tamu</a></li>
            </ul>
					</li>
					<li class="drop-down"><a href="#">Jurusan</a>
            <ul>
							<li><a href="jurusan.html">IPA</a></li>
							<li><a href="jurusan.html">IPS</a></li>
            </ul>
          </li>
          <li><a href="#">PPDB</a></li>
					<li><a href="https://onklas.com">E-Learning</a></li>
					<li><a href="#">Login</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <main id="main" class="text-center">

			<!--==========================
				About Us Section
			============================-->
			<section id="about" class="text-left col-md-7 d-inline-block">
				<div class="container">
					<header class="section-header">
						<h3>Pesan Disampaikan!</h3>
					</header>
					<p>
						Pesan telah disampaikan pada <?php echo $_GET['jajaran']; ?>
					</p>
				</div>
			</section><!-- #about -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
						<h3>SMAN.ID</h3>
						<img src="img/galeri/tutwuri.png" class="rounded-circle tutwuri">
            <p>
							Jalan Pasar Besar No. 55, Surabaya<br />
							Jawa Timur (60242)
						</p>
          </div>

          <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Info Kontak</h4>
            <p>
              <strong>Phone:</strong> 031-123456<br>
              <strong>Email:</strong> halo@smanegeri.id<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SMAN.ID</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

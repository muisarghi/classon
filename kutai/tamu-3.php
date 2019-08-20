<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buku Tamu SMA Negeri Indonesia</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

  <link rel="shortcut icon" href="img/tutwuri.png" type="image/png">

  <style>
    #konten img { width: 100%; }
    #kontak img {
      width: 150px !important;
      height: 150px;
    }
  </style>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark navbar-shrink" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger float-left" href="#page-top">
      <img src="img/tutwuri.jpeg" style="width: 25%" class="float-left rounded-circle">
    </a>
    <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="./">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" data-toggle="dropdown">Profil</a>
            <div class="dropdown-menu">
              <a href="profil.html" class="dropdown-item">Profile</a>
              <a href="sejarah.html" class="dropdown-item">Sejarah</a>
              <a href="visimisi.html" class="dropdown-item">Visi Misi</a>
              <a href="tujuan.html" class="dropdown-item">Tujuan</a>
              <a href="sambutan.html" class="dropdown-item">Sambutan Kepala Sekolah</a>
              <a href="jajaran.html" class="dropdown-item">Jajaran</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="berita.html">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Informasi</a>
            <div class="dropdown-menu">
              <a href="informasi.html" class="dropdown-item">Pengumuman</a>
              <a href="galeri.html" class="dropdown-item">Galeri</a>
              <a href="tamu.html" class="dropdown-item">Buku Tamu</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jurusan</a>
            <div class="dropdown-menu">
              <a href="jurusan.html" class="dropdown-item">Rekayasa Perangkat Lunak</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">PPDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://onklas.com">ELearning</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Login</a>
          </li>
        </ul>
    </div>
  </div>
</nav>

<section class="page-section" style="margin-top: 100px;" id="konten">
  <div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Pesan Disampaikan!</h2>
				<hr />
				<p>
					Pesan telah disampaikan pada <?php echo $_GET['toSend']; ?>
				</p>
			</div>
		</div>
  </div>
</section>

<!-- Contact -->
  <section class="page-section" id="kontak">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3">
              <img src="img/tutwuri.jpeg" style="width: 100%" class="rounded-circle img-responsive">
            </div>
            <div class="col-md-9">
              <h6>SMA Negeri Indonesia</h6>
              <p>
                Jl. Pasar Besar No. 55, Surabaya, Jawa Timur<br />
                (60255)
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h6>INFO KONTAK</h5>
          <p>
            Telp : 031-123456<br />
            Email : halo@smanegeri.sch.id
          </p>
        </div>
      </div>
    </div>
  </section>
<!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; SMA Negeri Indonesia 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>
</html>
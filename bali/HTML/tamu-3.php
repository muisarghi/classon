<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Buku Tamu SMA Negeri Indonesia</title>
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
  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/tutwuri.png" type="image/png">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
<header class="navigation fixed-top nav-bg">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="index.html">SMAN.ID</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" data-toggle="dropdown">Profil</a>
          <div class="dropdown-menu">
            <a href="profil.html" class="dropdown-item">Profile</a>
            <a href="sejarah.html" class="dropdown-item">Sejarah</a>
            <a href="visimisi.html" class="dropdown-item">Visi Misi</a>
            <a href="tujuan.html" class="dropdown-item">Tujuan</a>
            <a href="sambutan.html" class="dropdown-item">Sambutan Kepala Sekolah</a>
            <a class="dropdown-item" href="jajaran.html">Jajaran</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link js-scroll-trigger dropdown-toggle" href="informasi.html" data-toggle="dropdown">Informasi</a>
          <div class="dropdown-menu">
            <a href="informasi.html" class="dropdown-item">Pengumuman</a>
            <a href="galeri.html" class="dropdown-item">Galeri</a>
            <a href="tamu.html" class="dropdown-item">Buku Tamu</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Jurusan</a>
          <div class="dropdown-menu">
            <a href="jurusan.html" class="dropdown-item">Rekayasa Perangkat Lunak</a>
          </div>
        </li>
        <li class="nav-item active"><a class="nav-link" href="#">PPDB</a></li>
        <li class="nav-item active"><a class="nav-link" href="https://onklas.com">E-Learning</a></li>
        <li class="nav-item active"><a class="nav-link" href="#">Login</a></li>
      </ul>
    </div>
  </nav>
</header>

<section class="section detailBerita">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
				<h3 class="font-tertiary mb-5">Pesan Disampaikan!</h3>
        <p>
					Pesan disampaikan pada <?php echo $_GET['toSend']; ?>
				</p>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<section class="section bg-dark" id="footer">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="container text-light">
            <div class="row">
              <div class="col-md-3">
                <img src="images/tutwuri.jpeg" style="width: 100%" class="rounded-circle">
              </div>
              <div class="col md-9">
                <span class="text-white">Sekolah Negeri Indonesia</span>
                <p class="text-light">
                  Jalan Pasar Besar No. 55, Surabaya, Jawa Timur (60252)
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="container text-light">
            <span class="text-white">INFO KONTAK</span>
            <p class="text-light">
              Telp : 031-123456<br />
              Email : halo@sekolahnegeri.sch.id
            </p>
            <span class="text-white">IKUTI KAMI</span>
            <p class="text-light">
              <div class="social">
                <a href="#">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
              </div>
              <div class="social">
                <a href="#">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
              </div>
              <div class="social">
                <a href="#">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright ©<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> a theme by <a href="themefisher.com">themefisher.com</a></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

</body>
</html>
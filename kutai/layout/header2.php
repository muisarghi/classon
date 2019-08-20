<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profil SMA Negeri Indonesia</title>

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
            <a class="nav-link active js-scroll-trigger dropdown-toggle" href="#" data-toggle="dropdown">Profil</a>
            <div class="dropdown-menu">
              <a href="index.php?load=PROFILE" class="dropdown-item">Profile</a>
              <a href="index.php?load=SEJARAH" class="dropdown-item">Sejarah</a>
              <a href="index.php?load=VISI" class="dropdown-item">Visi Misi</a>
              <a href="index.php?load=TUJUAN" class="dropdown-item">Tujuan</a>
              <a href="index.php?load=SAMBUTAN" class="dropdown-item">Sambutan Kepala Sekolah</a>
              <a href="index.php?load=JAJARAN" class="dropdown-item">Jajaran</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?load=BERITA">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi</a>
            <div class="dropdown-menu">
              <a href="index.php?load=PENGUMUMAN" class="dropdown-item">Pengumuman</a>
              <a href="index.php?load=GALERY" class="dropdown-item">Galeri</a>
              <a href="index.php?load=BUKUTAMU" class="dropdown-item">Buku Tamu</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jurusan</a>
            <div class="dropdown-menu">
              <!--<a href="jurusan.html" class="dropdown-item">Rekayasa Perangkat Lunak</a>-->
			  <?php
					$jurusan1=mysqli_query($conn,"select * from jurusan order by jurusan asc");
					while($jurusan=mysqli_fetch_array($jurusan1))
						{
						echo"
						<li><a href='index.php?load=JURUSAN&id=$jurusan[id]'>$jurusan[jurusan]</a>
						";
						}
					?>
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
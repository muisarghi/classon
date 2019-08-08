<?php
ob_start();

class on
{

function index()
	{
	include('inc/inc.php');
	include ('slider.php');
	?>
	
  <!-- Button to buku tamu -->
  <section class="section text-center mt-4">
    <a href="tamu.html" class="btn btn-b btn-lg">Buku Tamu</a>
  </section>

  <section class="section-t8 mt-1" id="profil">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="title-box">
            <h2 class="title-a">Profil Sekolah</h2>
          </div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis qui eaque fugiat minus, quod sunt perspiciatis corrupti aliquam, eos eius ipsa rem nisi consequatur doloribus repellendus. Reprehenderit deleniti repudiandae repellat?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab harum expedita quos totam enim rem eligendi soluta voluptas repellendus. Dicta debitis dolores facere cumque commodi fugiat aliquid repellat nam.
          </p>
          <a href="index.php?load=PROFILE"><button class="btn btn-b">Lihat profil lengkap</button></a>
        </div>
        <div class="col-md-4">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Visi
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul>
                    <li>Menjadi sekolah yang beriman dan bertaqwa</li>
                    <li>Menjadi sekolah yang beriman dan bertaqwa</li>
                    <li>Menjadi sekolah yang beriman dan bertaqwa</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Misi
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <ul>
                    <li>Menjadi sekolah yang beriman dan bertaqwa</li>
                    <li>Menjadi sekolah yang beriman dan bertaqwa</li>
                    <li>Menjadi sekolah yang beriman dan bertaqwa</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Services Star /-->
  <section class="section-services section-t8" id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fas fa-clock"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Fullday</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fas fa-check"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Akreditasi A</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fas fa-list"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Prestasi</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fas fa-bus"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Akses Mudah</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Serv  ices End /-->

  <!-- Portfolio / Galeri -->
  <section class="section-t8 section-news" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="title-box float-left">
              <h2 class="title-a">Galeri</h2>
            </div>
            <div class="title-link float-right">
              <a href="galeri.html">Semua Koleksi
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-4 col-sm-6">
            <a href="img/galeri/galeri_1.jpg" class="portfolio-box">
              <img src="img/galeri/galeri_1.jpg" class="img-fluid" style="width: 100%">
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  Category
                </div>
                <div class="project-name">
                  Pengibaran Bendera Merah Putih
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="img/galeri/galeri_2.jpg" class="portfolio-box">
              <img src="img/galeri/galeri_2.jpg" class="img-fluid" style="width: 100%">
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  Category
                </div>
                <div class="project-name">
                  Salah satu guru yang sedang memimpin doa dengan khidmat
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="img/galeri/galeri_3.jpg" class="portfolio-box">
              <img src="img/galeri/galeri_3.jpg" class="img-fluid" style="width: 100%">
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  Category
                </div>
                <div class="project-name">
                  Pembacaan Teks Pancasila
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="img/galeri/skola_2.jpg" class="portfolio-box">
              <img src="img/galeri/skola_2.jpg" class="img-fluid" style="width: 100%">
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  Category
                </div>
                <div class="project-name">
                  Lapangan Sekolah
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="img/galeri/skola_3.jpg" class="portfolio-box">
              <img src="img/galeri/skola_3.jpg" class="img-fluid" style="width: 100%">
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  Category
                </div>
                <div class="project-name">
                  Kegiatan Ekstrakurikuler
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="img/galeri/skola_4.jpeg" class="portfolio-box">
              <img src="img/galeri/skola_4.jpeg" class="img-fluid" style="width: 100%">
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  Category
                </div>
                <div class="project-name">
                  Kegiatan Doa Bersama
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ News Star /-->
  <section class="section-news section-t8" id="berita">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Berita Terbaru</h2>
            </div>
            <div class="title-link">
              <a href="berita.html">Semua Berita
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">House</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html"> Pegal Nugas, Siswi ini Ngemut Pensil</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">1 Januari 2019</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html"> Pegal Nugas, Siswi ini Ngemut Pensil</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">1 Januari 2019</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html"> Pegal Nugas, Siswi ini Ngemut Pensil</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">1 Januari 2019</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News End /-->

  <!--/ Testimonials Star /-->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Pablo & Emma</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->

  <section class="section-jajaran" id="jajaran">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-4 text-center">
          <div class="title-box">
            <h2 class="title-a">Jajaran</h2>
          </div>
        </div>
        <div class="col-md-12 text-center">
          <img src="img/agent-1.jpg" class="rounded-circle" style="width: 150px;height: 150px;">
          <h3 class="mt-4">John Doe</h3>
          <p class="text-muted">Kepala Sekolah</p>
          <a href="jajaran.html" class="btn btn-b text-white">Lihat semua</a>
        </div>
      </div>
    </div>
  </section>
	<?php
	}

function profile()
	{
	include('inc/inc.php');
	include 'layout/sekolah.php';
	//include('title.php');
	$a1=mysqli_query($conn,"select * from profile order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$profile_panjang=$a['profile_panjang'];
		$bg=$a['bg'];
		}
	?>
	<!--/ Intro Single star /-->
	<section class="intro-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="title-single-box">
					<h1 class="title-single">Profil <?php echo $namaskol; ?></h1>
					</div>
				</div>
				
				<div class="col-md-12 col-lg-4">
				<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				<li class="breadcrumb-item">
				<a href="index.php">Home</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					Profil
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

		<!--/ News Single Star /-->
	  <section class="news-single nav-arrow-b">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12">
			  <div class="news-img-box">
				<img src="<?php echo $bg; ?>" alt="" class="img-fluid cover">
			  </div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			  <div class="post-content color-text-a mt-4">
				<?php echo $profile_panjang; ?>
			  </div>


			 <?php
				include 'layout/medsos.php';
			 ?>

			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Single End /-->
	<?php
	}

function sejarah()
	{
	include('inc/inc.php');
	include 'layout/sekolah.php';
	$a1=mysqli_query($conn,"select * from sejarah order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	?>
		<!--/ Intro Single star /-->
	  <section class="intro-single">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-lg-8">
			  <div class="title-single-box">
				<h1 class="title-single">Sejarah <?php echo $namaskol; ?></h1>
			  </div>
			</div>
			<div class="col-md-12 col-lg-4">
			  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.php">Home</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					Sejarah
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

	  <!--/ News Single Star /-->
	  <section class="news-single nav-arrow-b">
		<div class="container">
		  <div class="row">

			<div class="col-sm-12">
				<div class="news-img-box">
				<img src="<?php echo $bg; ?>" alt="" class="img-fluid cover">
				</div>
			</div>

			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			  <div class="post-content color-text-a mt-4">
				
				<?php echo"$text"; ?>
			  </div>
			  
			  <?php include 'layout/medsos.php'; ?>


			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Single End /-->
	<?php
	}

function visi()
	{
	include('inc/inc.php');
	include 'layout/sekolah.php';
	$a1=mysqli_query($conn,"select * from visimisi order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	?>
		<!--/ Intro Single star /-->
	  <section class="intro-single">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-lg-8">
			  <div class="title-single-box">
				<h1 class="title-single">Visi &amp; Misi <?php echo $namaskol; ?></h1>
			  </div>
			</div>
			<div class="col-md-12 col-lg-4">
			  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.php">Home</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					Visi &amp; Misi
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

	  <!--/ News Single Star /-->
	  <section class="news-single nav-arrow-b">
		<div class="container">
		  <div class="row">

			<div class="col-sm-12">
				<div class="news-img-box">
				<img src="<?php echo $bg; ?>" alt="" class="img-fluid cover">
				</div>
			</div>

			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			  <div class="post-content color-text-a mt-4">
				
				<?php echo"$text"; ?>
			  </div>
			  
			  <?php include 'layout/medsos.php'; ?>


			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Single End /-->
	<?php
	}

function tujuan()
	{
	include('inc/inc.php');
	include 'layout/sekolah.php';
	$a1=mysqli_query($conn,"select * from tujuan order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	?>
	<!--/ Intro Single star /-->
	  <section class="intro-single">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-lg-8">
			  <div class="title-single-box">
				<h1 class="title-single">Tujuan <?php echo $namaskol; ?></h1>
			  </div>
			</div>
			<div class="col-md-12 col-lg-4">
			  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.php">Home</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					Tujuan
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

	  <!--/ News Single Star /-->
	  <section class="news-single nav-arrow-b">
		<div class="container">
		  <div class="row">

			<div class="col-sm-12">
				<div class="news-img-box">
				<img src="<?php echo $bg; ?>" alt="" class="img-fluid cover">
				</div>
			</div>

			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			  <div class="post-content color-text-a mt-4">
				
				<?php echo"$text"; ?>
			  </div>
			  
			  <?php include 'layout/medsos.php'; ?>


			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Single End /-->
	<?php
	}

function sambutan()
	{
	include('inc/inc.php');
	include 'layout/sekolah.php';
	$a1=mysqli_query($conn,"select * from kepsek order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$nama=$a['nama'];
		$img=$a['img'];
		$sambutan=$a['sambutan'];
		}
	?>
		<!--/ Intro Single star /-->
	  <section class="intro-single">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-lg-8">
			  <div class="title-single-box">
				<h1 class="title-single">Sambutan Kepala <?php echo $namaskol; ?></h1>
			  </div>
			</div>
			<div class="col-md-12 col-lg-4">
			  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.php">Home</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					Sambutan
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

	  <!--/ News Single Star /-->
	  <section class="news-single nav-arrow-b">
		<div class="container">
		  <div class="row">
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			  <div class="post-content color-text-a mt-4">
				<div class="text-center mt-4 mb-4">
				<img src="<?php echo $img; ?>" class="rounded-circle fotoProfil mb-4">
				<h4><?php echo $nama; ?></h4>
				<p>Kepala Sekolah</p>
				</div>
				<?php echo $sambutan; ?>
			  </div>
			  
			  <?php include 'layout/medsos.php'; ?>


			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Single End /-->
	<?php
	}

function jajaran()
	{
	include('inc/inc.php');
	include 'layout/sekolah.php';
	?>
	<!--/ Intro Single star /-->
	  <section class="intro-single">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-lg-8">
			  <div class="title-single-box">
				<h1 class="title-single">Jajaran</h1>
				<span class="color-text-a">di <?php echo $namaskol; ?></span>
			  </div>
			</div>
			<div class="col-md-12 col-lg-4">
			  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.php">Home</a>
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

	  <!--/ News Grid Star /-->
	  <section class="news-grid grid">
		<div class="container">

		<?php
		$a1=mysqli_query($conn,"select * from jajaran where jabatan like '%kepala sekolah%'");
		while($a=mysqli_fetch_array($a1))
			{
			$namakepsek=$a['nama'];
			$jabatankepsek=$a['jabatan'];
			$imgkepsek=$a['img'];
			}
		?>

		  <div id="kepala">
			<div class="row">
			  <div class="col-md-12 text-center">
				<div class="col-md-4 jajaran-item">
				  <div class="card-box-b card-shadow news-box">
					<div class="img-box-b">
					  <img src="<?php echo $imgkepsek; ?>" alt="" class="img-b img-fluid">
					</div>
					<div class="card-overlay">
					  <div class="card-header-b">
						<div class="card-title-b">
						  <h2 class="title-2">
							<a href="#"><?php echo $namakepsek; ?> </a>
						  </h2>
						</div>
						<div class="card-date">
						  <span class="date-b">Kepala Sekolah</span>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <div id="waka">
			<div class="row">
			  <div class="col-md-12 text-center">
				
				<?php
				$b1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%'");
				while($b=mysqli_fetch_array($b1))
					{
					echo"
					<div class='col-md-3 jajaran-item'>
					  <div class='card-box-b card-shadow news-box'>
						<div class='img-box-b'>
						  <img src='$b[img]' alt='' class='img-b img-fluid'>
						</div>
						<div class='card-overlay'>
						  <div class='card-header-b'>
							<div class='card-title-b'>
							  <h2 class='title-2'>
								<a href='index.php?load=PROGRAM&id=$b[id]'>$b[nama]</a>
							  </h2>
							</div>
							<div class='card-date'>
							  <span class='date-b'>$b[jabatan]</span>
							  <br />
							  <a href='index.php?load=PROGRAM&id=$b[id]' class='btn text-white btn-outline-success'>Lihat program</a>
							</div>
						  </div>
						</div>
					  </div>
					</div>
					";
					}
				?>
				

			  </div>
			</div>
		  </div>

		  <div id="guru">
			<div class="row">
			  <div class="col-md-12 text-center">
				<?php
				$c1=mysqli_query($conn,"select * from jajaran where jabatan not like '%waka%' and jabatan not like '%kepala sekolah%'");
				while($c=mysqli_fetch_array($c1))
					{
					echo"
					<div class='col-md-2 jajaran-item'>
					  <div class='card-box-b card-shadow news-box'>
						<div class='img-box-b'>
						  <img src='$c[img]' alt='' class='img-b img-fluid'>
						</div>
						<div class='card-overlay'>
						  <div class='card-header-b'>
							<div class='card-title-b'>
							  <h2 class='title-2'>
								<a href='#'>$c[nama]</a>
							  </h2>
							</div>
						  </div>
						</div>
					  </div>
					</div>
					";
					}
				?>

			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Grid End /-->
	<?php
	}

function program()
	{
	include('inc/inc.php');
	//include('title.php');
	$id=$_GET['id'];
	$a1=mysqli_query($conn,"select * from jajaran where id='$id'");
	while($a=mysqli_fetch_array($a1))
		{
		$nama=$a['nama'];
		$img=$a['img'];
		$jabatan=$a['jabatan'];
		$program=$a['program'];
		}
	?>
	<!--/ Intro Single star /-->
	  <section class="intro-single">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-lg-8">
			  <div class="title-single-box">
				<h1 class="title-single">Program <?php echo $jabatan; ?></h1>
			  </div>
			</div>
			<div class="col-md-12 col-lg-4">
			  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="index.php">Home</a>
				  </li>
				  <li class="breadcrumb-item " aria-current="page">
					<a href="index.php?load=JAJARAN">Jajaran</a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">
					Program
				  </li>
				</ol>
			  </nav>
			</div>
		  </div>
		</div>
	  </section>
	  <!--/ Intro Single End /-->

	  <!--/ News Single Star /-->
	  <section class="news-single nav-arrow-b">
		<div class="container">
		  <div class="row">
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			  <div class="post-content color-text-a mt-4">
				<div class="text-center mt-4 mb-4">
				<img src="<?php echo $img; ?>" class="rounded-circle fotoProfil mb-4">
				<h4><?php echo $nama; ?></h4>
				<p><?php echo $jabatan; ?></p>
				</div>
				<?php echo $program; ?>
			  </div>
			  
			  <?php include 'layout/medsos.php'; ?>


			</div>
		  </div>
		</div>
	  </section>
	  <!--/ News Single End /-->
	<?php
	}

function berita()
	{
	include('inc/inc.php');
	include('layout/sekolah.php');
	//@ini_set('display_errors', 'on');
	?>
	 <!--/ Intro Single star /-->
	<section class="intro-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="title-single-box">
				<h1 class="title-single">Berita Terbaru</h1>
				<span class="color-text-a"><?php echo $namaskol; ?></span>
				</div>
			</div>
			
			<div class="col-md-12 col-lg-4">
			<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
			<li class="breadcrumb-item">
			<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
			Berita Terbaru
			</li>
            </ol>
			</nav>
			</div>
		</div>
	</div>
	</section>
	<!--/ Intro Single End /-->

	<!--/ News Grid Star /-->
	<section class="news-grid grid">
    <div class="container">
		<div class="row">
		<?php
		if(!isset($_GET['page']))
			{
			$page = 1;
			} 
		else 
			{
			$page = $_GET['page'];
			}
						
		$max_results =3;
		$from=(($page*$max_results)-$max_results);

		$a1=mysqli_query($conn,"select kategori_berita.id, kategori_berita.kategori as namakategori, berita.* from berita left join kategori_berita on berita.kategori=kategori_berita.id order by berita.id desc limit $from, $max_results");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<div class='col-md-4'>
				<div class='card-box-b card-shadow news-box'>
					<div class='img-box-b'>
					<img src='$a[img]' alt='' class='img-b img-fluid'>
					</div>
					
					<div class='card-overlay'>
						<div class='card-header-b'>
							<div class='card-category-b'>
							<a href='index.php?load=DETAILBERITA&id=$a[id]' class='category-b'>$a[namakategori]</a>
							</div>
						<div class='card-title-b'>
						<h2 class='title-2'>
						<a href='index.php?load=DETAILBERITA&id=$a[id]'>$a[judul]</a>
						</h2>
						</div>
					
						<div class='card-date'>
					  <span class='date-b'>$a[tgl]</span>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			";
			}
		$jmlresult=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from berita ");
		while($jmresult=mysqli_fetch_array($jmlresult))
			{
			$total_results=$jmresult['jmlresult'];
			}
		$total_pages = ceil($total_results / $max_results);

		?>
		
        </div>
      </div>
      

	  <div class="row">
		<div class="col-sm-12">
		<nav class="pagination-a">
		<ul class="pagination justify-content-end">
		<!--
		<li class="page-item disabled">
		<a class="page-link" href="#" tabindex="-1">
		<span class="ion-ios-arrow-back"></span>
		</a>
		</li>
		-->
		<?php
		if($page > 1)
			{
			$prev = ($page - 1);
			$prevn='';
			}
		else
			{
			$prev = ($page - 1);
			$prevn='disabled';
			}
		echo "<li class='page-item $prevn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$prev\"><span class='ion-ios-arrow-back'></span> </li>";
		
		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='page-item active'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li class='page-item'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$i\">$i</a> </li>";
				}
			}
					
		if($page < $total_pages)
			{
			$next = ($page + 1);
			$nextn='';
			}
		else
			{
			$next = ($page + 1);
			$nextn='disabled';
			}
		echo "<li class='page-item $nextn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$next\"><span class='ion-ios-arrow-forward'></span></a></li>";
		echo"
		
		";
		?>
		<!--
		<li class="page-item">
		<a class="page-link" href="#">1</a>
		</li>
		<li class="page-item active">
		<a class="page-link" href="#">2</a>
		</li>
		<li class="page-item">
		<a class="page-link" href="#">3</a>
		</li>

		<li class="page-item next">
		<a class="page-link" href="#">
		<span class="ion-ios-arrow-forward"></span>
		</a>
		</li>
		-->



		
		</ul>
		<?php //echo"<p>Terdapat $total_results Produk Hasil Pencarian</p>"; 
		?> 
		</nav>
        </div>

	</div>

	
	</section>
	<!--/ News Grid End /-->
	<?php
	}


function detailberita()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	//include('title.php');

	$a1=mysqli_query($conn,"select kategori_berita.id, kategori_berita.kategori as namakategori, berita.* from berita left join kategori_berita on berita.kategori=kategori_berita.id where berita.id='$id' and berita.status='1'");
	while($a=mysqli_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		$namakategori=$a['namakategori'];
		}

	echo"
	<section class='intro-single'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 col-lg-8'>
				<div class='title-single-box'>
				<h1 class='title-single'>$judul</h1>
				<span class='color-text-a'>Berita $namakategori</span>
				</div>
			</div>
			
			<div class='col-md-12 col-lg-4'>
			  <nav aria-label='breadcrumb' class='breadcrumb-box d-flex justify-content-lg-end'>
				<ol class='breadcrumb'>
				  <li class='breadcrumb-item'>
					<a href='index.php'>Home</a>
				  </li>
				  <li class='breadcrumb-item'>
					<a href='index.php?load=BERITA'>Berita</a>
				  </li>
				  <li class='breadcrumb-item active' aria-current='page'>
					$judul
				  </li>
				</ol>
			  </nav>
			</div>

		</div>
	</div>
	</section>
	  


	<section class='news-single nav-arrow-b'>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='news-img-box'>
				<center>
				<img src='$img' alt='' class='img-fluid cover' >
				</center>
				</div>
			</div>
			
			<div class='col-md-10 offset-md-1 col-lg-8 offset-lg-2'>
				<div class='post-information'>
				<ul class='list-inline text-center color-a'>
				<li class='list-inline-item mr-2'>
				<strong>Penulis: </strong>
				<span class='color-text-a'>$penulis</span>
				</li>
				<li class='list-inline-item mr-2'>
				<strong>Kategori: </strong>
				<span class='color-text-a'>$namakategori</span>
				</li>
				<li class='list-inline-item'>
				<strong>Tanggal: </strong>
				<span class='color-text-a'>".date('d-m-Y', strtotime($tgl))."</span>
				</li>
				</ul>
				</div>
			
				<div class='post-content color-text-a'>
				$text
				</div>
				";
				include ('layout/medsos.php');
				
			
			echo"
			</div>
		  </div>
		</div>
	  </section>
	  
	";
	
	}

function informasi()
	{
	include('inc/inc.php');
	include('layout/sekolah.php');
	@ini_set('display_errors', 'on');
	?>
	 <!--/ Intro Single star /-->
	<section class="intro-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="title-single-box">
				<h1 class="title-single">Informasi</h1>
				<span class="color-text-a"><?php echo $namaskol; ?></span>
				</div>
			</div>
			
			<div class="col-md-12 col-lg-4">
			<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
			<li class="breadcrumb-item">
			<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
			Informasi
			</li>
            </ol>
			</nav>
			</div>
		</div>
	</div>
	</section>
	<!--/ Intro Single End /-->

	<!--/ News Grid Star /-->
	<section class="news-grid grid">
    <div class="container">
		<div class="row">
		<?php
		
		if(!isset($_GET['page']))
			{
			$page = 1;
			} 
		else 
			{
			$page = $_GET['page'];
			}
						
		$max_results =3;
		$from=(($page*$max_results)-$max_results);

		$a1=mysqli_query($conn,"select kategori_informasi.id, kategori_informasi.kategori as namakategori, informasi2.* from informasi2 left join kategori_informasi on informasi2.kat=kategori_informasi.id order by informasi2.id desc limit $from, $max_results");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<div class='col-md-4'>
				<div class='card-box-b card-shadow news-box'>
					<div class='img-box-b'>
					<img src='$a[img]' alt='' class='img-b img-fluid'>
					</div>
					
					<div class='card-overlay'>
						<div class='card-header-b'>
							<div class='card-category-b'>
							<a href='index.php?load=DETAILINFORMASI&id=$a[id]' class='category-b'>$a[namakategori]</a>
							</div>
						<div class='card-title-b'>
						<h2 class='title-2'>
						<a href='index.php?load=DETAILINFORMASI&id=$a[id]'>$a[judul]</a>
						</h2>
						</div>
					
						<div class='card-date'>
					  <span class='date-b'>$a[tgl]</span>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			";
			}
		$jmlresult=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from informasi2 ");
		while($jmresult=mysqli_fetch_array($jmlresult))
			{
			$total_results=$jmresult['jmlresult'];
			}
		$total_pages = ceil($total_results / $max_results);

		?>
		
        </div>
      </div>
      

	  <div class="row">
		<div class="col-sm-12">
		<nav class="pagination-a">
		<ul class="pagination justify-content-end">
		<!--
		<li class="page-item disabled">
		<a class="page-link" href="#" tabindex="-1">
		<span class="ion-ios-arrow-back"></span>
		</a>
		</li>
		-->
		<?php
		if($page > 1)
			{
			$prev = ($page - 1);
			$prevn='';
			}
		else
			{
			$prev = ($page - 1);
			$prevn='disabled';
			}
		echo "<li class='page-item $prevn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$prev\"><span class='ion-ios-arrow-back'></span> </li>";
		
		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='page-item active'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li class='page-item'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$i\">$i</a> </li>";
				}
			}
					
		if($page < $total_pages)
			{
			$next = ($page + 1);
			$nextn='';
			}
		else
			{
			$next = ($page + 1);
			$nextn='disabled';
			}
		echo "<li class='page-item $nextn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$next\"><span class='ion-ios-arrow-forward'></span></a></li>";
		echo"
		
		";
		?>
		
		</ul>
		<?php //echo"<p>Terdapat $total_results Produk Hasil Pencarian</p>"; 
		?> 
		</nav>
        </div>

	</div>

	
	</section>
	<!--/ News Grid End /-->
	<?php
	}


function detailinformasi()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	//include('title.php');

	$a1=mysqli_query($conn,"select kategori_informasi.id, kategori_informasi.kategori as namakategori, informasi2.* from informasi2 left join kategori_informasi on informasi2.kat=kategori_informasi.id where informasi2.id='$id'");
	while($a=mysqli_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		$namakategori=$a['namakategori'];
		}

	echo"
	<section class='intro-single'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 col-lg-8'>
				<div class='title-single-box'>
				<h1 class='title-single'>$judul</h1>
				<span class='color-text-a'>Informasi $namakategori</span>
				</div>
			</div>
			
			<div class='col-md-12 col-lg-4'>
			  <nav aria-label='breadcrumb' class='breadcrumb-box d-flex justify-content-lg-end'>
				<ol class='breadcrumb'>
				  <li class='breadcrumb-item'>
					<a href='index.php'>Home</a>
				  </li>
				  <li class='breadcrumb-item'>
					<a href='index.php?load=INFORMASI'>Informasi</a>
				  </li>
				  <li class='breadcrumb-item active' aria-current='page'>
					$judul
				  </li>
				</ol>
			  </nav>
			</div>

		</div>
	</div>
	</section>
	  


	<section class='news-single nav-arrow-b'>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='news-img-box'>
				<center>
				<img src='$img' alt='' class='img-fluid cover' >
				</center>
				</div>
			</div>
			
			<div class='col-md-10 offset-md-1 col-lg-8 offset-lg-2'>
				<div class='post-information'>
				<ul class='list-inline text-center color-a'>
				<li class='list-inline-item mr-2'>
				<strong>Penulis: </strong>
				<span class='color-text-a'>$penulis</span>
				</li>
				<li class='list-inline-item mr-2'>
				<strong>Kategori: </strong>
				<span class='color-text-a'>$namakategori</span>
				</li>
				<li class='list-inline-item'>
				<strong>Tanggal: </strong>
				<span class='color-text-a'>".date('d-m-Y', strtotime($tgl))."</span>
				</li>
				</ul>
				</div>
			
				<div class='post-content color-text-a'>
				$text
				</div>
				";
				include ('layout/medsos.php');
				
			
			echo"
			</div>
		  </div>
		</div>
	  </section>
	  
	";
	
	}


function galery()
	{
	
	include('inc/inc.php');
	echo"
	<section class='section-t8 galeri' id='portfolio'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 mb-4'>
				<div class='title-box'>
				<h2 class='title-a'>Galeri</h2>
				</div>
			</div>
		</div>
	</div>
	
	<div class='container-fluid p-0'>
		<div class='row no-gutters'>
		";
		$a1=mysqli_query($conn,"select kategori_galeri.id, kategori_galeri.kategori as namakategori, galeri.* from galeri left join kategori_galeri on galeri.kat=kategori_galeri.id where galeri.kat !=0 order by galeri.id DESC");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<div class='col-lg-4 col-sm-6'>
			<a href='$a[img]' class='portfolio-box'>
			<img src='$a[img]' class='img-fluid' style='width: 100%'>
				<div class='portfolio-box-caption'>
					<div class='project-category text-white-50'>
					$a[namakategori]
					</div>
					
					<div class='project-name'>
					$a[judul]
					</div>
				</div>
				</a>
			</div>
			";
			}
			
		echo"
		</div>
	</div>
	</section>
		
	";
	}

function bukutamu()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');
	echo"
	<section class='section detailBerita'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
			<h3 class='font-tertiary mb-5'>Buku Tamu</h3>
			<form action='index.php?load=BUKUTAMU2' method='post'>
				<div class='form-group'>
				<label for='nama'>Nama :</label>
				<input type='text' class='form-control' required name='nama' id='nama'>
				</div>
						
				<div class='form-group'>
				<label for='telp'>No. Telp :</label>
				<input type='number' class='form-control' required name='telp' id='telp'>
				</div>
				
				<div class='form-group'>
				<label for='alamat'>Alamat :</label>
				<textarea name='alamat' class='form-control' required rows='5' id='alamat'></textarea>
				</div>
				
				<div class='form-group'>
				<label for='keperluan'>Keperluan :</label>
				<textarea name='keperluan' class='form-control' required rows='5' id='keperluan'></textarea>
				</div>
				
				<div class='form-group'>
				<button class='btn btn-primary btn-sm'>Selanjutnya</button>
				</div>
			</form>
			</div>
		</div>
	</div>
	</section>";

	}

function bukutamu2()
	{	
	$nama=$_POST['nama'];
	$telp=$_POST['telp'];
	$alamat=$_POST['alamat'];
	$keperluan=$_POST['keperluan'];
	include('inc/inc.php');
	include('title.php');

	echo"
	<section class='section tamu'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
			<h3 class='font-tertiary mb-5'>Pilih jajaran yang ingin ditemui</h3>
			<hr />
			
			<form action='index.php?load=bukutamuc' id='formTamu' method='post'>
				<div class='col-md-12 text-center'>	
				";
				$a1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%' order by nama");
				while($a=mysqli_fetch_array($a1))
					{
					echo"
					<div class='col-lg-3 mb-4 d-inline-block jajaran-item' dipilih='tidak' onclick='pilih(this)' data-jajaran='$a[id]*$a[nama]'>
					<article class='card shadow text-center jajaran'>
						<div class='foto foto-2' style='background: url($a[img])'>
						</div>
					
						<div class='card-body'>
						<h4 class='card-title'>
						<a class='text-dark' href='index.php?load=PROGRAM&id=$a[id]' target='_blank'>$a[nama]</a>
						</h4>
						<p class='cars-text'>$a[jabatan]</p>
						</div>
					</article>
					</div>

					";
					}
					
				echo"
				</div>
				
				<div class='text-center mt-4'>
				<input type='hidden' name='toSend' id='toSend'>
				<input type='hidden' name='nama' value='$nama'>
				<input type='hidden' name='alamat' value='$alamat'>
				<input type='hidden' name='telp' value='$telp'>
				<input type='hidden' name='keperluan' value='$keperluan'>
				<button class='btn btn-primary'>Submit</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</section>
	";
	?>
	<script>
	function pilih(that) {
		$(".jajaran-item").attr('dipilih', 'tidak')
		$(that).attr('dipilih', 'ya')
		let selected = $(that).attr('data-jajaran')
		$("#toSend").val(selected)
	}
	$("#formTamu").submit(() => {
		let toSend = $("#toSend").val()
		if(toSend == "") {
			alert('Pilih jajaran yang akan ditemui!')
			return false
		}
	})
	</script>
	<?php
	}

function bukutamuc()
	{
	include('inc/inc.php');
	$nama=$_POST['nama'];
	$telp=$_POST['telp'];
	$alamat=$_POST['alamat'];
	$keperluan=$_POST['keperluan'];
	$toSend=$_POST['toSend'];
	$kpd=explode('*', $toSend);
	$kepada=$kpd[0];
	$jajaran=$kpd[1];
	$a=mysqli_query($conn,"insert into guestbook values ('', '$nama', '$alamat', '$telp', '$keperluan', '$kepada')");
	if($a)
		{
		header('location: index.php?load=BUKUTAMU3&jajaran='.$jajaran.'');
		}
	else
		{
		header('location: index.php?load=BUKUTAMU3&jajaran='.$jajaran.'');
		}
	}


function bukutamu3()
	{
	$jajaran=$_GET['jajaran'];
	include('inc/inc.php');
	include('title.php');
	echo"
	<section class='section detailBerita'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
			<h3 class='font-tertiary mb-5'>Pesan Disampaikan!</h3>
			<p>
			Pesan disampaikan pada $jajaran
			</p>
			</div>
		</div>
	</div>
	</section>
	";
	}


function jurRPL()
	{
	include('inc/inc.php');
	include('title.php');
	
	?>
	<section class="section detailBerita">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="font-tertiary mb-5">Rekayasa Perangkat Lunak</h3>
        <div class="content">
					<div class="text-center text-muted">
						<img src="images/tim/pichai.jpg" class="fotoProfil rounded-circle"><br />
						Sundar Pichai - Kaprog Rekayasa Perangkat Lunak
					</div>
						<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex perspiciatis repellat est quod soluta quam, quae eveniet, non delectus animi rerum obcaecati culpa odio, minima nemo esse incidunt ipsa reprehenderit?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas earum iusto sint voluptatem odio! Facere qui ratione nemo excepturi molestiae, debitis inventore magnam molestias exercitationem, doloribus dolorem iste quae impedit.
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laborum reprehenderit voluptatem laudantium dolore, dolores vitae corrupti nesciunt corporis quam ipsa harum, aliquid vel obcaecati. Maxime rem cum similique est.
					</p>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex perspiciatis repellat est quod soluta quam, quae eveniet, non delectus animi rerum obcaecati culpa odio, minima nemo esse incidunt ipsa reprehenderit?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas earum iusto sint voluptatem odio! Facere qui ratione nemo excepturi molestiae, debitis inventore magnam molestias exercitationem, doloribus dolorem iste quae impedit.
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laborum reprehenderit voluptatem laudantium dolore, dolores vitae corrupti nesciunt corporis quam ipsa harum, aliquid vel obcaecati. Maxime rem cum similique est.
					</p>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex perspiciatis repellat est quod soluta quam, quae eveniet, non delectus animi rerum obcaecati culpa odio, minima nemo esse incidunt ipsa reprehenderit?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas earum iusto sint voluptatem odio! Facere qui ratione nemo excepturi molestiae, debitis inventore magnam molestias exercitationem, doloribus dolorem iste quae impedit.
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laborum reprehenderit voluptatem laudantium dolore, dolores vitae corrupti nesciunt corporis quam ipsa harum, aliquid vel obcaecati. Maxime rem cum similique est.
					</p>
        </div>
      </div>
    </div>
  </div>
	</section>
	<?php
	}



}

?>
<?php
ob_start();

class on
{

function index()
	{
	include('inc/inc.php');
	include ('slider.php');
	?>
	<!-- services -->
	<section class="section" id="info">
	  <div class="container">
		<div class="row">
		  <div class="col-md-6 mt-4 mb-4 mb-md-0">
			<div class="card hover-shadow shadow bg-primary text-white">
			  <div class="card-body text-center px-4 py-5">
				<div class="col-md-4 float-left">
				  <i class="fas fa-school icon mb-4 d-inline-block"></i>
				  <h4 class="mb-4 text-white">Sekolah Negeri</h4>
				</div>
				<div class="col-md-8 float-left text-left">
				  <p class="text-white">
					Dibawah naungan dinas pendidikan langsung menjadikan sekolah ini lebih disiplin dalam mengajar para siswa
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-md-6 mt-4 mb-4 mb-md-0">
			<div class="card hover-shadow shadow bg-primary text-white">
			  <div class="card-body text-center px-4 py-5">
				<div class="col-md-4 float-left">
				  <i class="fas fa-check icon mb-4 d-inline-block"></i>
				  <h4 class="mb-4 text-white">Akreditasi A</h4>
				</div>
				<div class="col-md-8 float-left text-left">
				  <p class="text-white">
					Kualitas pendidikan sangat penting bagi kami, itu terbukti dengan akreditasi A pada sekolah ini.
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-md-6 mt-4 mb-4 mb-md-0">
			<div class="card hover-shadow shadow bg-primary text-white">
			  <div class="card-body text-center px-4 py-5">
				<div class="col-md-4 float-left">
				  <i class="fas fa-list icon mb-4 d-inline-block"></i>
				  <h4 class="mb-4 text-white">Berprestasi</h4>
				</div>
				<div class="col-md-8 float-left text-left">
				  <p class="text-white">
					Telah menjuarai berbagai bidang perlombaan di tingkat kabupaten maupun provinsi menjadikan sekolah ini lebih unggul dari yang lain.
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-md-6 mt-4 mb-4 mb-md-0">
			<div class="card hover-shadow shadow bg-primary text-white">
			  <div class="card-body text-center px-4 py-5">
				<div class="col-md-4 float-left">
				  <i class="fas fa-clock icon mb-4 d-inline-block"></i>
				  <h4 class="mb-4 text-white">Fullday School</h4>
				</div>
				<div class="col-md-8 float-left text-left">
				  <p class="text-white">
					Sesuai dengan visi kami untuk meningkatkan kualitas pendidikan, kami menerapkan fullday school agar pembelajaran dapat dilakukan lebih optimal
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	<!-- /services -->

	<!-- profil -->
	<section class="section bg-primary position-relative testimonial-bg-shapes text-white" id="profil">
	  <div class="container">
		<div class="row mx-auto ">
		  <h3 class="section-title text-white mb-5">Profil Sekolah</h3>
		  
			<?php
			$profseko=mysql_query("select * from profile order by id desc limit 1");
			while($profsek=mysql_fetch_array($profseko))
				{
				$profile_singkat=$profsek['profile_singkat'];
				}
			echo"<p class='text-white mb-4'>$profile_singkat </p>";
			?>
		  </p>
		  <a href="index.php?load=PROFILE" class="btn btn-light btn-lg">Selengkapnya</a>
		</div>
	  </div>
	</section>

	<!-- portfolio -->
	<section class="section" id="galeri">
	  <div class="container">
		<div class="row">
		  <div class="col-12 text-center">
			<h2 class="section-title">Galeri</h2>
		  </div>
		</div>
		<div class="row shuffle-wrapper">
		<?php
		$galerys=mysql_query("select * from galeri where kat !=0 order by id DESC limit 6");
		while($galery=mysql_fetch_array($galerys))
			{
			echo"
			<div class='col-lg-4 col-6 mb-4 shuffle-item'>
			<div class='position-relative rounded hover-wrapper'>
			  <img src='$galery[img]' alt='portfolio-image' class='img-fluid rounded w-100'>
			  <div class='hover-overlay'>
				<div class='hover-content'>
				  <a class='btn btn-light btn-sm' href='$galery[img]'>View Image</a>
				</div>
			  </div>
			</div>
		  </div>
			";
			}
		?>
		</div>
		<div class="text-center mt-4">
		  <a href="index.php?load=GALERY" class="btn btn-primary btn-lg">Koleksi lainnya</a>
		</div>
	  </div>
	</section>
	<!-- /portfolio -->

	<!-- blog -->
	<section class="section" id="berita">
	  <div class="container">
		<div class="row">
		  <div class="col-12 text-center">
			<h2 class="section-title">Berita</h2>
		  </div>
			
			<?php
			$beritas=mysql_query("select * from berita order by id desc limit 3");
			while($berita=mysql_fetch_array($beritas))
				{
				echo"
				<div class='col-lg-4 col-sm-6 mb-4 mb-lg-0'>
				<article class='card shadow'>
				  <img class='rounded card-img-top' src='$berita[img]' alt='post-thumb'>
				  <div class='card-body'>
					<h4 class='card-title'><a class='text-dark' href='index.php?load=DETAILBERITA&id=$berita[id]'>$berita[judul]</a>
					</h4>
					<p class='cars-text'>";
					$text=explode(' ',$berita['text']);
					for($i=0;$i<=15;$i++)
						{
						echo"$text[$i] ";
						}
					echo"
					</p>
					<a href='index.php?load=DETAILBERITA&id=$berita[id]' class='btn btn-xs btn-primary'>Read More</a>
				  </div>
				</article>
			  </div>
				";
				}
			?>

		</div>
		<div class="text-center mt-4">
		  <a href="index.php?load=BERITA" class="btn btn-primary btn-lg">Berita lainnya</a>
		</div>
	  </div>
	</section>
	<!-- /blog -->

	<!-- testimonial -->
	<section class="section bg-primary position-relative testimonial-bg-shapes" id="jajaran">
	  <div class="container">
		<div class="row">
		  <div class="col-12 text-center">
			<h3 class="section-title text-white mb-5">Jajaran</h3>
		  </div>
		  <div class="col-lg-10 mx-auto testimonial-slider">
			<!-- slider-item -->
			<div class="text-center testimonial-content">
			<?php
			//$kepseka=mysql_query("select * from kepsek order by id desc limit 1");
			$kepseka=mysql_query("select * from jajaran where jabatan like '%kepala sekolah%'");
			while($kepsek=mysql_fetch_array($kepseka))
				{
				$mnama=$kepsek['nama'];
				$mimg=$kepsek['img'];
				}
			?>
			  <img class="img-fluid rounded-circle mb-4 d-inline-block fotoProfil" src="<?php echo $mimg; ?>"
				alt="client-image">
			  <h4 class="text-white"><?php echo $mnama; ?></h4>
			  <h6 class="text-light mb-4">Kepala Sekolah</h6>
			  <a href="index.php?load=JAJARAN" class="btn btn-light mb-4">Selengkapnya</a>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- bg shapes -->
	  <img src="img/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
	  <img src="img/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
	  <img src="img/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
	  <img src="img/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
	  <img src="img/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
	</section>
	<!-- /testimonial -->
	<?php
	}

function profile()
	{
	include('inc/inc.php');
	include('title.php');
	$a1=mysql_query("select * from profile order by id desc limit 1");
	while($a=mysql_fetch_array($a1))
		{
		$profile_panjang=$a['profile_panjang'];
		$bg=$a['bg'];
		}
	?>
	
	<section class="section detailBerita">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<div class="content">
				<img src="<?php echo $bg; ?>" class="cover rounded">
				<?php echo $profile_panjang; ?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function sejarah()
	{
	include('inc/inc.php');
	include('title.php');
	$a1=mysql_query("select * from sejarah order by id desc limit 1");
	while($a=mysql_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	?>
	<section class="section detailBerita">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<div class="content">
				<img src="<?php echo $bg; ?>" class="cover rounded">
				<?php echo $text; ?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function visi()
	{
	include('inc/inc.php');
	include('title.php');
	$a1=mysql_query("select * from visimisi order by id desc limit 1");
	while($a=mysql_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	?>
	<section class="section detailBerita">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<div class="content">
				<img src="<?php echo $bg; ?>" class="cover rounded">
				<?php echo $text; ?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function tujuan()
	{
	include('inc/inc.php');
	include('title.php');
	$a1=mysql_query("select * from tujuan order by id desc limit 1");
	while($a=mysql_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	?>
	<section class="section detailBerita">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<div class="content">
				<img src="<?php echo $bg; ?>" class="cover rounded">
				<?php echo $text; ?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function sambutan()
	{
	include('inc/inc.php');
	include('title.php');
	$a1=mysql_query("select * from kepsek order by id desc limit 1");
	while($a=mysql_fetch_array($a1))
		{
		//$nama=$a['nama'];
		//$img=$a['img'];
		$sambutan=$a['sambutan'];
		}

	$b1=mysql_query("select * from jajaran where jabatan like '%kepala sekolah%' order by id desc limit 1");
	while($b=mysql_fetch_array($b1))
		{
		$nama=$b['nama'];
		$img=$b['img'];
		//$sambutan=$a['sambutan'];
		}

	?>
	<section class="section detailBerita">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<div class="content">
					<div class="text-center mt-4">
					<img src="<?php echo"$img"; ?>" class="fotoProfil rounded-circle">
					<h4><?php echo $nama; ?> </h4>
					<p class="text-muted">Kepala Sekolah</p>
					</div>
					
					<p>
					<?php echo $sambutan; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function jajaran()
	{
	include('inc/inc.php');
	include('title.php');
	?>
	<section class="section berita">
		<div class="container">
			<div id="kepala">
				<div class="row">
					<div class="col-md-12 text-center">
						
						<?php
						//$a1=mysql_query("select * from kepsek order by id desc limit 1");
						$a1=mysql_query("select * from jajaran where jabatan like '%kepala sekolah%'");
						while($a=mysql_fetch_array($a1))
							{
							$namakepsek=$a['nama'];
							$jabatankepsek="KEPALA SEKOLAH";
							$imgkepsek=$a['img'];
							}
						?>
						<div class="col-lg-4 col-sm-6 mb-4 d-inline-block">
						<article class="card shadow text-center jajaran">
							<div class="foto" style="background: url('<?php echo $imgkepsek; ?>')">
							</div>
							
							<div class="card-body">
							<h4 class="card-title">
							<a class="text-dark" href="#"><?php echo $namakepsek; ?></a>
							</h4>
							<p class="cars-text"><?php echo $jabatankepsek; ?></p>
							</div>
						</article>
						</div>

					</div>
				</div>
			</div>

			<div id="waka">
				<div class="row">
					<div class="col-md-12 text-center">
						<?php
						$b1=mysql_query("select * from jajaran where jabatan like '%waka%'");
						while($b=mysql_fetch_array($b1))
							{
							echo"
							<div class='col-lg-3 mb-4 d-inline-block jajaran-item'>
							<article class='card shadow text-center jajaran'>
								<div class='foto foto-2' style='background: url($b[img])'>
								</div>
								
								<div class='card-body'>
								<h4 class='card-title'>
								<a class='text-dark' href='#'>$b[nama]</a>
								</h4>
								<p class='cars-text'>$b[jabatan]</p>
								<a href='index.php?load=PROGRAM&id=$b[id]' class='btn btn-primary btn-sm'>Lihat program</a>
								</div>
							</article>
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
					$c1=mysql_query("select * from jajaran where jabatan not like '%waka%' and jabatan not like '%kepala sekolah%'");
					while($c=mysql_fetch_array($c1))
						{
						echo"
						<div class='col-lg-2 mb-4 d-inline-block jajaran-item'>
						<article class='card shadow text-center jajaran'>
							<div class='foto foto-2' style='background: url($c[img])'>
							</div>
							
							<div class='card-body'>
							<h4 class='card-title'>
							<a class='text-dark' href='#'>$c[nama]</a>
							</h4>
							</div>
						</article>
						</div>
						";
						}
					?>
						
					</div>
				</div>
			</div>

		</div>
	</div>
	</section>
	<?php
	}

function program()
	{
	include('inc/inc.php');
	include('title.php');
	$id=$_GET['id'];
	$a1=mysql_query("select * from jajaran where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$nama=$a['nama'];
		$img=$a['img'];
		$jabatan=$a['jabatan'];
		$program=$a['program'];
		}
	?>
	<section class="section detailBerita">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<div class="content">
					<div class="text-center mt-4">
					<img src="<?php echo"$img"; ?>" class="fotoProfil rounded-circle">
					<h4><?php echo $nama; ?> </h4>
					<p class="text-muted"><?php echo $jabatan; ?></p>
					</div>
					
					<p>
					<?php echo $program; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function berita()
	{
	include('inc/inc.php');
	include('title.php');
	
	?>
	<section class="section berita">
	<div class="container">
		<div class="row">
		<?php
		$a1=mysql_query("select * from berita order by id desc");
		while($a=mysql_fetch_array($a1))
			{
			echo"
			<div class='col-lg-4 col-sm-6 mb-4'>
			<article class='card shadow'>
			<img class='rounded card-img-top' src='$a[img]' alt='post-thumb'>
				<div class='card-body'>
				<h4 class='card-title'>
				<a class='text-dark' href='index.php?load=DETAILBERITA&id=$a[id]'>$a[judul]</a>
				</h4>
				<p class='cars-text'>";
				$text=explode(' ',$a['text']);
				for($i=0;$i<=30;$i++)
					{
					echo"$text[$i] ";
					}
				echo"
				</p>
				<a href='index.php?load=DETAILBERITA&id=$a[id]' class='btn btn-xs btn-primary'>Baca berita</a>
				</div>
			</article>
			</div>
			";
			}
		?>
		</div>
	</div>
	</section>
	<?php
	}


function detailberita()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');

	$a1=mysql_query("select * from berita where id='$id' and status='1'");
	while($a=mysql_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		}
	echo"
	<section class='section detailBerita'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
			<h3 class='font-tertiary mb-5'>$judul</h3>
			<p class='font-secondary'>Published on ".date("F d, Y", strtotime($tgl))." by 
			<span class='text-primary'> $penulis</span>
			</p>
        
				<div class='content'>
				<img src='$img' class='cover rounded'>
				<p>
				$text
				</p>
				</div>
			</div>
		</div>
	</div>
	</section>

	<section class='section berita'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 text-center'>
			<h2 class='section-title'>Berita Terkait</h2>
			</div>";
			
			$b1=mysql_query("select * from berita where id !='$id' order by id desc limit 3");
			while($b=mysql_fetch_array($b1))
				{
				echo"
				<div class='col-lg-4 col-sm-6 mb-4 mb-lg-0'>
				<article class='card shadow'>
				<img class='rounded card-img-top' src='$b[img]' alt='post-thumb'>
					<div class='card-body'>
					<h4 class='card-title'>
					<a class='text-dark' href='#'>$b[judul]</a>
					</h4>
					<p class='cars-text'>";
					$text=explode(' ',$b['text']);
						for($i=0;$i<=30;$i++)
						{
						echo"$text[$i] ";
						}
					echo"
					</p>
					<a href='index.php?load=DETAILBERITA&id=$b[id]' class='btn btn-xs btn-primary'>Read More</a>
					</div>
				</article>
				</div>
				";
				}

		echo"
		</div>
	</div>
	</section>";
	
	}

function informasi()
	{
	include('inc/inc.php');
	include('title.php');
	
	?>
	<section class="section berita">
	<div class="container">
		<div class="row">
		<?php
		$a1=mysql_query("select * from informasi2 order by id desc");
		while($a=mysql_fetch_array($a1))
			{
			echo"
			<div class='col-lg-4 col-sm-6 mb-4'>
			<article class='card shadow'>
			<img class='rounded card-img-top' src='$a[img]' alt='post-thumb'>
				<div class='card-body'>
				<h4 class='card-title'>
				<a class='text-dark' href='index.php?load=DETAILINFORMASI&id=$a[id]'>$a[judul]</a>
				</h4>
				<p class='cars-text'>";
				$text=explode(' ',$a['text']);
				for($i=0;$i<=30;$i++)
					{
					echo"$text[$i] ";
					}
				echo"
				</p>
				<a href='index.php?load=DETAILINFORMASI&id=$a[id]' class='btn btn-xs btn-primary'>Selengkapnya</a>
				</div>
			</article>
			</div>
			";
			}
		?>
		</div>
	</div>
	</section>
	<?php
	}

function detailinformasi()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');

	$a1=mysql_query("select * from informasi2 where id='$id' ");
	while($a=mysql_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		}
	echo"
	<section class='section detailBerita'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
			<h3 class='font-tertiary mb-5'>$judul</h3>
			<p class='font-secondary'>Published on ".date("F d, Y", strtotime($tgl))." by 
			<span class='text-primary'> $penulis</span>
			</p>
        
				<div class='content'>
				<img src='$img' class='cover rounded'>
				<p>
				$text
				</p>
				</div>
			</div>
		</div>
	</div>
	</section>

	<section class='section berita'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 text-center'>
			<h2 class='section-title'>Informasi Lainnya</h2>
			</div>";
			
			$b1=mysql_query("select * from informasi2 where id !='$id' order by id desc limit 3");
			while($b=mysql_fetch_array($b1))
				{
				echo"
				<div class='col-lg-4 col-sm-6 mb-4 mb-lg-0'>
				<article class='card shadow'>
				<img class='rounded card-img-top' src='$b[img]' alt='post-thumb'>
					<div class='card-body'>
					<h4 class='card-title'>
					<a class='text-dark' href='index.php?load=DETAILINFORMASI&id=$b[id]'>$b[judul]</a>
					</h4>
					<p class='cars-text'>";
					$text=explode(' ',$b['text']);
						for($i=0;$i<=30;$i++)
						{
						echo"$text[$i] ";
						}
					echo"
					</p>
					<a href='index.php?load=DETAILINFORMASI&id=$b[id]' class='btn btn-xs btn-primary'>Read More</a>
					</div>
				</article>
				</div>
				";
				}

		echo"
		</div>
	</div>
	</section>";
	
	}

function galery()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');
	echo"
	<section class='section'>
	  <div class='container'>
		<div class='row mb-5'>
		  <div class='col-12'>
			<div class='btn-group btn-group-toggle justify-content-center d-flex' data-toggle='buttons'>
			<label class='btn btn-sm btn-primary active'>
			<input type='radio' name='shuffle-filter' value='all' checked='checked' />Semua
			</label>
			";
			$a1=mysql_query("select * from kategori_galeri order by kategori");
			while($a=mysql_fetch_array($a1))
				{
				echo"
				<label class='btn btn-sm btn-primary'>
				<input type='radio' name='shuffle-filter' value='$a[id]' />$a[kategori]</label>
				";
				}
			/*
			<label class='btn btn-sm btn-primary'>
			<input type='radio' name='shuffle-filter' value='siswa' />Siswa</label>
			<label class='btn btn-sm btn-primary'>
			<input type='radio' name='shuffle-filter' value='guru' />Guru</label>
			*/

			echo"
			</div>
		  </div>
		</div>
		<div class='row shuffle-wrapper'>
		";
		$b1=mysql_query("select * from galeri where kat !=0 order by kat, id desc");
		while($b=mysql_fetch_array($b1))
			{
			echo"
			<div class='col-lg-4 col-6 mb-4 shuffle-item' data-groups='[&quot;$b[kat]&quot;]'>
				<div class='position-relative rounded hover-wrapper'>
				<img src='$b[img]' alt='$b[judul]' class='img-fluid rounded w-100 d-block'>
					<div class='hover-overlay'>
						<div class='hover-content'>
						<a class='btn btn-light btn-sm' href='$b[img]'>Lihat gambar</a>
						</div>
					</div>
				</div>
			</div>
			";
			}
			
			/*
			<div class='col-lg-4 col-6 mb-4 shuffle-item' data-groups='[&quot;siswa&quot;]'>
				<div class='position-relative rounded hover-wrapper'>
				<img src='images/galeri/galeri_1.jpg' alt='portfolio-image' class='img-fluid rounded w-100 d-block'>
					<div class='hover-overlay'>
						<div class='hover-content'>
						<a class='btn btn-light btn-sm' href='images/galeri/galeri_1.jpg'>Lihat gambar</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class='col-lg-4 col-6 mb-4 shuffle-item' data-groups='[&quot;guru&quot;]'>
				<div class='position-relative rounded hover-wrapper'>
				<img src='images/galeri/galeri_2.jpg' alt='portfolio-image' class='img-fluid rounded w-100 d-block'>
					<div class='hover-overlay'>
						<div class='hover-content'>
						<a class='btn btn-light btn-sm' href='images/galeri/galeri_2.jpg'>Lihat gambar</a>
						</div>
					</div>
				</div>
			</div>

			<div class='col-lg-4 col-6 mb-4 shuffle-item' data-groups='[&quot;siswa&quot;]'>
				<div class='position-relative rounded hover-wrapper'>
				<img src='images/galeri/galeri_3.jpg' alt='portfolio-image' class='img-fluid rounded w-100 d-block'>
					<div class='hover-overlay'>
						<div class='hover-content'>
						<a class='btn btn-light btn-sm' href='images/galeri/galeri_3.jpg'>Lihat gambar</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class='col-lg-4 col-6 mb-4 shuffle-item' data-groups='[&quot;guru&quot;]'>
				<div class='position-relative rounded hover-wrapper'>
				<img src='images/galeri/galeri_6.jpg' alt='portfolio-image' class='img-fluid rounded w-100 d-block'>
					<div class='hover-overlay'>
						<div class='hover-content'>
						<a class='btn btn-light btn-sm' href='images/galeri/galeri_6.jpg'>Lihat gambar</a>
						</div>
					</div>
				</div>
			</div>
				
			<div class='col-lg-4 col-6 mb-4 shuffle-item' data-groups='[&quot;siswa&quot;]'>
				<div class='position-relative rounded hover-wrapper'>
				<img src='images/galeri/galeri_7.jpg' alt='portfolio-image' class='img-fluid rounded w-100 d-block'>
					<div class='hover-overlay'>
						<div class='hover-content'>
						<a class='btn btn-light btn-sm' href='images/galeri/galeri_7.jpg'>Lihat gambar</a>
						</div>
					</div>
				</div>
			</div>
			*/

		echo"
		</div>
	  </div>
	</section>";
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
				$a1=mysql_query("select * from jajaran where jabatan like '%waka%' order by nama");
				while($a=mysql_fetch_array($a1))
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
	$a=mysql_query("insert into guestbook values ('', '$nama', '$alamat', '$telp', '$keperluan', '$kepada')");
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


function jurusan()
	{
	include('inc/inc.php');
	include('title.php');
	$id=$_GET['id'];
	$a1=mysql_query("select jajaran.id, jajaran.img, jajaran.nama, jurusan.* from jurusan, jajaran where jajaran.id=jurusan.ka_jurusan and jurusan.id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$img=$a['img'];
		$nama=$a['nama'];
		$jurusan=$a['jurusan'];
		$keterangan=$a['keterangan'];
		}
	?>
	<section class="section detailBerita">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="font-tertiary mb-5"><?php echo $jurusan; ?></h3>
        <div class="content">
					<div class="text-center text-muted">
						<img src="<?php echo $img; ?>" class="fotoProfil rounded-circle"><br />
						<?php echo"$nama - Kaprog $jurusan "; ?>
					</div>
					<p>
					<?php echo $keterangan; ?>	
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
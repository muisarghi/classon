<?php
ob_start();

class on
{

function index()
	{
	include('inc/inc.php');
	include ('slider.php');
	echo"
	<main id='main'>
    <section id='about'>
	<div class='container'>
	<header class='section-header'>
	<h3 class='text-center'>Profil Sekolah</h3>
	";
	$profilesek=mysqli_query($conn,"select * from profile order by id desc limit 1");
	while($profilese=mysqli_fetch_array($profilesek))
		{
		echo"
		<p>$profilese[profile_singkat]
		</p>
		";
		}
	echo"
	</header>
	</div>
    </section>
	
    <section id='services' class='section-bg'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-6 col-lg-5 offset-lg-1 wow bounceInUp' data-wow-duration='1.4s'>
				<div class='box'>
					<div class='icon'><i class='ion-android-bus' style='color: #ff689b;'></i>
					</div>
				<h4 class='title'><a href='#services'>Akses Mudah</a></h4>
				<p class='description'>Tak perlu khawatir telat masuk karena sekolah ini dilewati oleh berbagai kendaraan umum dan lokasi yang mudah dijangkau</p>
				</div>
			</div>
				
			<div class='col-md-6 col-lg-5 wow bounceInUp' data-wow-duration='1.4s'>
				<div class='box'>
					<div class='icon'><i class='ion-ios-alarm' style='color: #e9bf06;'></i>
					</div>
				<h4 class='title'><a href='#services'>Fullday School</a></h4>
				<p class='description'>Sesuai dengan visi kami untuk meningkatkan kualitas pendidikan, kami menerapkan fullday school agar pembelajaran dapat dilakukan lebih optimal</p>
				</div>
			</div>

			<div class='col-md-6 col-lg-5 offset-lg-1 wow bounceInUp' data-wow-delay='0.1s' data-wow-duration='1.4s'>
				<div class='box'>
					<div class='icon'><i class='ion-ios-star' style='color: #3fcdc7;'></i>
					</div>
				<h4 class='title'><a href='#services'>Berprestasi</a></h4>
				<p class='description'>Telah menjuarai berbagai bidang perlombaan di tingkat kabupaten maupun provinsi menjadikan sekolah ini lebih unggul dari yang lain.</p>
				</div>
			</div>
			
			<div class='col-md-6 col-lg-5 wow bounceInUp' data-wow-delay='0.1s' data-wow-duration='1.4s'>
				<div class='box'>
					<div class='icon'><i class='ion-cash' style='color:#41cf2e;'></i>
					</div>
				<h4 class='title'><a href='#services'>Dukungan Finansial</a></h4>
				<p class='description'>Sekolah sangat memahami kondisi finansial orang tua, untuk itu sekolah menyediakan program untuk siswa yang finansialnya kurang beruntung</p>
				</div>
			</div>
		</div>

	</div>
    </section>

    <section id='portfolio' class='clearfix'>
	<div class='container'>
	<header class='section-header'>
	<h3 class='section-title text-center'>Galeri</h3>
	</header>
		<div class='row'>
			<div class='col-lg-12'>
            <ul id='portfolio-flters'>
            <li data-filter='*' class='filter-active'>All</li>";

			//<li data-filter='.filter-guru'>Guru</li>
			//<li data-filter='.filter-siswa'>Siswa</li>
            $galerys=mysqli_query($conn,"select kategori_galeri.id as idkat, kategori_galeri.kategori as namakategori, galeri.* from kategori_galeri  left join galeri on galeri.kat=kategori_galeri.id group by kategori_galeri.id order by galeri.id desc limit 4");
			while($galery=mysqli_fetch_array($galerys))
				{
				echo"
				<li data-filter='.filter-$galery[idkat]'>$galery[namakategori]</li>
				";
				}
			echo"
			</ul>
		</div>
	</div>

	<div class='row portfolio-container'>
	";
	$galeris=mysqli_query($conn,"select kategori_galeri.id as idkat, kategori_galeri.kategori as namakategori, galeri.* from galeri left join kategori_galeri on galeri.kat=kategori_galeri.id order by galeri.id desc limit 6");
	while($galeri=mysqli_fetch_array($galeris))
		{
		echo"
		<div class='col-lg-4 col-md-6 portfolio-item filter-$galeri[idkat]'>
			<div class='portfolio-wrap'>
			<img src='$galeri[img]' class='img-fluid' alt=''>
				<div class='portfolio-info'>
                <h4><a href='#'>$galeri[judul]</a></h4>
                <p>App</p>
					<div>
					<a href='$galeri[img]' data-lightbox='portfolio' data-title='$galeri[judul]' class='link-preview' title='Preview'><i class='ion ion-eye'></i></a>
					<a href='#' class='link-details' title='More Details'><i class='ion ion-android-open'></i></a>
					</div>
				</div>
            </div>
		</div>
		";
		}

	echo"
	</div>
    </section>

    <section class='section-bg pt-5 pb-5'>
	<div class='container'>
		<div class='section-header'>
		<h3>Berita</h3>
        </div>
        
		
		<div class='row'>
		";
		$beritas=mysqli_query($conn,"select kategori_berita.id, kategori_berita.kategori as namakategori, berita.* from berita left join kategori_berita on berita.kategori=kategori_berita.id order by berita.id desc limit 3");
		while($berita=mysqli_fetch_array($beritas))
			{
			echo"
			<div class='col-md-4 berita-item'>
				<div class='konten'>
				<img src='$berita[img]'>
					<div class='wrapper'>
					<h4>$berita[judul]</h4>
					<p>";
					$text=explode(' ',$berita['text']);
					for($i=0;$i<=15;$i++)
						{
						echo"$text[$i] ";
						}
					echo"
					</p>
					<a href='index.php?load=DETAILBERITA&id=$berita[id]' class='btn btn-primary'>Baca</a>
					</div>
				</div>
			</div>
			";
			}


		echo"
		</div>
	</div>
    </section>
	";
	
	$kepsek1=mysqli_query($conn,"select * from kepsek order by id desc limit 1");
	while($kepsek=mysqli_fetch_array($kepsek1))
		{
		$namakeps=$kepsek['nama'];
		$imgkeps=$kepsek['img'];
		}

	$waka1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%' order by id asc limit 1");
	while($waka=mysqli_fetch_array($waka1))
		{
		$namawaka=$waka['nama'];
		$imgwaka=$waka['img'];
		}
	echo"
	<section id='team'>
	<div class='container text-center'>
		<div class='section-header'>
		<h3 class='text-center'>Jajaran</h3>
        </div>

        <div class='row'>
			<div class='col-md-3'></div>
				
				<div class='col-md-3 wow fadeInUp d-inline-block'>
					<div class='member'>
					<img src='$imgkeps' class='img-fluid foto' />
						<div class='member-info'>
							<div class='member-info-content'>
							<h4>$namakeps</h4>
							<span>Kepala Sekolah</span>
								<div class='social'>
								<a href=''><i class='fa fa-twitter'></i></a>
								<a href=''><i class='fa fa-facebook'></i></a>
								<a href=''><i class='fa fa-google-plus'></i></a>
								<a href=''><i class='fa fa-linkedin'></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class='col-md-3 wow fadeInUp d-inline-block'>
					<div class='member'>
					<img src='$imgwaka' class='img-fluid foto' />
						<div class='member-info'>
							<div class='member-info-content'>
							<h4>$namawaka</h4>
							<span>Wakil Kepala</span>
								<div class='social'>
								<a href=''><i class='fa fa-twitter'></i></a>
								<a href=''><i class='fa fa-facebook'></i></a>
								<a href=''><i class='fa fa-google-plus'></i></a>
								<a href=''><i class='fa fa-linkedin'></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class='col-md-12 text-center'>
				<a href='index.php?load=JAJARAN' class='btn btn-primary'>Selengkapnya</a>
				</div>
			</div>

		</div>
	</div>
    </section>
	
    
	</main>
	";
	
	}

function profile()
	{
	include('inc/inc.php');
	include('sekolah.php');
	$a1=mysqli_query($conn,"select * from profile order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$profile_panjang=$a['profile_panjang'];
		$bg=$a['bg'];
		}
	
	echo"
	<main id='main' class='text-center'>
		<section id='about' class='text-left col-md-7 d-inline-block'>
			<div class='container'>
			<header class='section-header'>
			<h3>Profil  $namaskol</h3>
			</header>
			
				<div class='col-md-12 text-center'>
				<img src='$bg' class='rounded mb-4 w-100'>
				</div>
			
			<p>
			$profile_panjang
			</p>
			</div>
		</section>
	</main>";
	
	}

function sejarah()
	{
	include('inc/inc.php');
	include('sekolah.php');
	$a1=mysqli_query($conn,"select * from sejarah order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	
	echo"
	<main id='main' class='text-center'>
		<section id='about' class='text-left col-md-7 d-inline-block'>
			<div class='container'>
			<header class='section-header'>
			<h3>Sejarah  $namaskol</h3>
			</header>
			
				<div class='col-md-12 text-center'>
				<img src='$bg' class='rounded mb-4 w-100'>
				</div>
			
			<p>
			$text
			</p>
			</div>
		</section>
	</main>";
	}

function visi()
	{
	include('inc/inc.php');
	include('sekolah.php');
	$a1=mysqli_query($conn,"select * from visimisi order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	echo"
	<main id='main' class='text-center'>
		<section id='about' class='text-left col-md-7 d-inline-block'>
			<div class='container'>
			<header class='section-header'>
			<h3>Visi & Misi  $namaskol</h3>
			</header>
			
				<div class='col-md-12 text-center'>
				<img src='$bg' class='rounded mb-4 w-100'>
				</div>
			
			<p>
			$text
			</p>
			</div>
		</section>
	</main>";
	}

function tujuan()
	{
	include('inc/inc.php');
	include('sekolah.php');
	$a1=mysqli_query($conn,"select * from tujuan order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$text=$a['text'];
		$bg=$a['bg'];
		}
	echo"
	<main id='main' class='text-center'>
		<section id='about' class='text-left col-md-7 d-inline-block'>
			<div class='container'>
			<header class='section-header'>
			<h3>Tujuan $namaskol</h3>
			</header>
			
				<div class='col-md-12 text-center'>
				<img src='$bg' class='rounded mb-4 w-100'>
				</div>
			
			<p>
			$text
			</p>
			</div>
		</section>
	</main>";
	}

function sambutan()
	{
	include('inc/inc.php');
	include('sekolah.php');
	$a1=mysqli_query($conn,"select * from kepsek order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$nama=$a['nama'];
		$img=$a['img'];
		$sambutan=$a['sambutan'];
		}
	echo"
	<main id='main' class='text-center'>
		<section id='about' class='text-left col-md-7 d-inline-block'>
			<div class='container'>
			<header class='section-header'>
			<h3>Sambutan Kepala $namaskol</h3>
			</header>
				<div class='col-md-12 text-center'>
				<img src='$img' class='rounded-circle mb-4 foto'>
				<p class='text-muted'>$nama - Kepala Sekolah</p>
				</div>
			<p>
			$sambutan
			</p>
			</div>
		</section>
	</main>
	";
	}

function jajaran()
	{
	@ini_set('display_errors', 'off');
	include('inc/inc.php');
	
	echo"
	<main id='main'>
		<section id='about' class='text-left col-md-12'>
			<div class='container'>
				<div class='section-header'>
				<h3>Jajaran</h3>
				</div>
					
				<div class='row'>
					<div id='kepala' class='text-center col-md-12'>
						<div class='col-md-4 jajaran-item d-inline-block'>
							<div class='konten'>";
							$a1=mysqli_query($conn,"select * from kepsek order by id desc limit 1");
							while($a=mysqli_fetch_array($a1))
								{
								$namakepsek=$a['nama'];
								//$jabatankepsek=$a['jabatan'];
								$imgkepsek=$a['img'];
								}
							echo"
							<img src='$imgkepsek'>
								<div class='wrapper'>
								<h4>$namakepsek</h4>
								<p class='text-muted'>Kepala Sekolah</p>
								</div>
							</div>
						</div>
					</div>

					<div id='waka' class='text-center col-md-12'>
					";
					
					$b1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%'");
					while($b=mysqli_fetch_array($b1))
					{
					echo"
						<div class='col-md-3 jajaran-item d-inline-block'>
							<div class='konten'>
							<img src='$b[img]'>
								<div class='wrapper'>
								<h4>$b[nama]</h4>
								<p class='text-muted'>$b[jabatan]</p>
								<a href='index.php?load=PROGRAM&id=$b[id]' class='btn btn-primary'>Lihat program</a>
								</div>
							</div>
						</div>
						";
					}


					echo"
					</div>

					
					<div id='guru' class='text-center col-md-12'>
					";	
					$c1=mysqli_query($conn,"select * from jajaran where jabatan not like '%waka%' and jabatan not like '%kepala sekolah%'");
					while($c=mysqli_fetch_array($c1))
						{
						echo"
						<div class='col-md-2 jajaran-item d-inline-block'>
							<div class='konten'>
							<img src='$c[img]'>
								<div class='wrapper'>
								<h4>$c[nama]</h4>
								</div>
							</div>
						</div>
						";
						}
						
						/*
						<div class='col-md-2 jajaran-item d-inline-block'>
							<div class='konten'>
							<img src='img/tim/hardwell.jpg'>
								<div class='wrapper'>
								<h4>Hardwell</h4>
								</div>
							</div>
						</div>
						
						<div class='col-md-2 jajaran-item d-inline-block'>
							<div class='konten'>
							<img src='img/tim/hardwell.jpg'>
								<div class='wrapper'>
								<h4>Hardwell</h4>
								</div>
							</div>
						</div>
						
						<div class='col-md-2 jajaran-item d-inline-block'>
							<div class='konten'>
							<img src='img/tim/hardwell.jpg'>
								<div class='wrapper'>
								<h4>Hardwell</h4>
								</div>
							</div>
						</div>
							
						<div class='col-md-2 jajaran-item d-inline-block'>
							<div class='konten'>
							<img src='img/tim/hardwell.jpg'>
								<div class='wrapper'>
								<h4>Hardwell</h4>
								</div>
							</div>
						</div>
						*/

					echo"
					</div>

				</div>
			</div>
		</section>
	</main>
	";



	/*
	<section class="section berita">
		<div class="container">
			<div id="kepala">
				<div class="row">
					<div class="col-md-12 text-center">
						
						<?php
						$a1=mysqli_query($conn,"select * from jajaran where jabatan like '%kepala sekolah%'");
						while($a=mysqli_fetch_array($a1))
							{
							$namakepsek=$a['nama'];
							$jabatankepsek=$a['jabatan'];
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
						$b1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%'");
						while($b=mysqli_fetch_array($b1))
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
					$c1=mysqli_query($conn,"select * from jajaran where jabatan not like '%waka%' and jabatan not like '%kepala sekolah%'");
					while($c=mysqli_fetch_array($c1))
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
	*/
	}

function program()
	{
	include('inc/inc.php');
	$id=$_GET['id'];
	$a1=mysqli_query($conn,"select * from jajaran where id='$id'");
	while($a=mysqli_fetch_array($a1))
		{
		$nama=$a['nama'];
		$img=$a['img'];
		$jabatan=$a['jabatan'];
		$program=$a['program'];
		}
	echo"
	<main id='main' class='text-center'>
		<section id='about' class='text-left col-md-7 d-inline-block'>
			<div class='container'>
			<header class='section-header'>
			<h3>Program $jabatan</h3>
			</header>
				<div class='col-md-12 text-center'>
				<img src='$img' class='rounded-circle mb-4 foto'>
				<p class='text-muted'>$nama - $jabatan</p>
				</div>
			<p>
			$program
			</p>
			</div>
		</section>
	</main>
	";
	?>
	
	<?php
	}

function berita()
	{
	include('inc/inc.php');
	
	?>
	<main id="main">
	<section id="about" class="text-left col-md-12">
	<div class="container">
		<div class="section-header">
		<h3>Berita</h3>
		</div>
		
		<div class="row">
		<?php
		$a1=mysqli_query($conn,"select * from berita order by id desc");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<div class='col-md-4 berita-item'>
				<div class='konten'>
				<img src='$a[img]'>
					<div class='wrapper'>
					<h4>$a[judul]</h4>
					<p>";
					$text=explode(' ',$a['text']);
					for($i=0;$i<=15;$i++)
						{
						echo"$text[$i] ";
						}
					echo"</p>
					<a href='index.php?load=DETAILBERITA&id=$a[id]' class='btn btn-primary'>Baca</a>
					</div>
				</div>
			</div>
			";
			}
		?>
			
		</div>
	</div>
	</section>
	</main>
	
	<?php
	}


function detailberita()
	{
	$id=$_GET['id'];
	include('inc/inc.php');

	$a1=mysqli_query($conn,"select * from berita where id='$id' and status='1'");
	while($a=mysqli_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		}
	echo"
	<main id='main' class='text-center'>
	<section id='about' class='text-left col-md-7 d-inline-block'>
	<div class='container'>
	<header class='section-header'>
	<h3>$judul</h3>
	</header>
		<div class='col-md-12 text-center'>
		<img src='$img' class='rounded mb-4 w-100'>
		</div>
	
	<p>
	$text
	</p>
	<a href='index.php?load=BERITA'>[ kembali ]</a>
	</div>
	</section>
	</main>
	";
	
	}

function informasi()
	{
	include('inc/inc.php');
	
	echo"
	<main id='main'>
	<section id='about' class='text-left col-md-12'>
	<div class='container'>
		<div class='section-header'>
		<h3>Pengumuman</h3>
		</div>
		
		<div class='row'>
		";
		$a1=mysqli_query($conn,"select * from informasi2 order by id desc");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<div class='col-md-4 berita-item'>
				<div class='konten'>
				<img src='$a[img]'>
					<div class='wrapper'>
					<h4>$a[judul]</h4>
					<p>";
					$text=explode(' ',$a['text']);
					for($i=0;$i<=15;$i++)
						{
						echo"$text[$i] ";
						}
					
					echo"</p>
					<a href='index.php?load=DETAILINFORMASI&id=$a[id]' class='btn btn-primary'>Baca</a>
					</div>
				</div>
			</div>";
			}
			
		
		echo"
		</div>
	</div>
	</section>
	</main>
	";
	?>

	
	<?php
	}

function detailinformasi()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');

	$a1=mysqli_query($conn,"select * from informasi2 where id='$id' ");
	while($a=mysqli_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		}
	echo"
	<main id='main' class='text-center'>
	<section id='about' class='text-left col-md-7 d-inline-block'>
	<div class='container'>
	<header class='section-header'>
	<h3>$judul</h3>
	</header>
		<div class='col-md-12 text-center'>
		<img src='$img' class='rounded mb-4 w-100'>
		</div>
	
	<p>
	$text
	</p>
	<a href='index.php?load=INFORMASI'>[ kembali ]</a>
	</div>
	</section>
	</main>
	";
	
	}

function galery()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	
	echo"
	<main id='main'>
	<section id='portfolio' class='clearfix'>
	<div class='container'>
	<header class='section-header'>
	<h3 class='section-title text-center'>Galeri</h3>
	</header>
		<div class='row'>
			<div class='col-lg-12'>
            <ul id='portfolio-flters'>
			<li data-filter='*' class='filter-active'>All</li>";
			$a1=mysqli_query($conn,"select * from kategori_galeri order by kategori");
			while($a=mysqli_fetch_array($a1))
				{
				echo"
				<li data-filter='.filter-$a[id]'>$a[kategori]</li>	
				";
				}
			
            echo"
			</ul>
			</div>
		</div>

		<div class='row portfolio-container'>
		";
		$b1=mysqli_query($conn,"select * from galeri where kat !=0 order by kat, id desc");
		while($b=mysqli_fetch_array($b1))
			{
			echo"
			<div class='col-lg-4 col-md-6 portfolio-item filter-$b[kat]'>
				<div class='portfolio-wrap'>
				<img src='$b[img]' class='img-fluid' alt=''>
					<div class='portfolio-info'>
					<h4><a href='#'>$b[judul]</a></h4>
					<p>$b[judul]</p>
						<div>
						<a href='$b[img]' data-lightbox='portfolio' data-title='$b[judul]' class='link-preview' title='Preview'><i class='ion ion-eye'></i></a>
						<a href='#' class='link-details' title='More Details'><i class='ion ion-android-open'></i></a>
						</div>
					</div>
				</div>
			</div>
			";
			}
			
		
		echo"
        </div>

	</div>
    </section>
	</main>
	";

	
	}

function bukutamu()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	echo"
	<main id='main' class='text-center'>
	<section id='about' class='text-left col-md-7 d-inline-block'>
	<div class='container'>
	<header class='section-header'>
	<h3>Buku Tamu</h3>
	</header>
	<p>
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
		<button class='btn btn-primary'>Selanjutnya</button>
		</div>
		</form>
	</p>
	</div>
	</section>
	</main>
	";
	
	}

function bukutamu2()
	{	
	$nama=$_POST['nama'];
	$telp=$_POST['telp'];
	$alamat=$_POST['alamat'];
	$keperluan=$_POST['keperluan'];
	include('inc/inc.php');
	
	echo"
	<main id='main' class='text-center'>
	<section id='about' class='text-left col-md-12 d-inline-block'>
	<div class='container'>
	<header class='section-header'>
	<h3>Ingin bertemu dengan?</h3>
	</header>
	<form action='index.php?load=bukutamuc' method='post'>
		<div id='waka' class='text-center col-md-12'>
		";
		$a1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%' order by nama");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<div class='col-md-3 jajaran-item d-inline-block' onclick='pilih(this)' data-jajaran='$a[id]*$a[nama]' dipilih='tidak'>
				<div class='konten'>
				<img src='$a[img]'>
					<div class='wrapper'>
					<h4>$a[nama]</h4>
					<p class='text-muted'>$a[jabatan]</p>
					</div>
				</div>
			</div>
			";
			}
			

		echo"
		</div>
		<div class='mt-2 text-center'>
		<input type='hidden' name='toSend' id='jajaran'>
		<input type='hidden' name='nama' value='$nama'>
		<input type='hidden' name='alamat' value='$alamat'>
		<input type='hidden' name='telp' value='$telp'>
		<input type='hidden' name='keperluan' value='$keperluan'>
		<button class='btn btn-primary btn-lg'>Submit</button>
		</div>
		</form>
	</div>
	</section>
	</main>
	";
	
	?>
	<script src="js/main.js"></script>
	<script>
		function pilih(that) {
			$(".jajaran-item").attr('dipilih', 'tidak')
			$(that).attr('dipilih', 'ya')
			let nama = $(that).attr('data-jajaran')
			$("#jajaran").val(nama)
		}
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
	echo"
	<main id='main' class='text-center'>
	<section id='about' class='text-left col-md-7 d-inline-block'>
	<div class='container'>
	<header class='section-header'>
	<h3>Pesan Disampaikan!</h3>
	</header>
	<p>
	Pesan telah disampaikan pada $jajaran
	</p>
	</div>
	</section>
	</main>
	";
	
	
	}


function jurusan()
	{
	include('inc/inc.php');
	$id=$_GET['id'];
	$a1=mysqli_query($conn,"select jajaran.id, jajaran.img, jajaran.nama, jurusan.* from jurusan, jajaran where jajaran.id=jurusan.ka_jurusan and jurusan.id='$id'");
	while($a=mysqli_fetch_array($a1))
		{
		$img=$a['img'];
		$nama=$a['nama'];
		$jurusan=$a['jurusan'];
		$keterangan=$a['keterangan'];
		}
	echo"
	<main id='main' class='text-center'>
	<section id='about' class='text-left col-md-7 d-inline-block'>
	<div class='container'>
	<header class='section-header'>
	<h3>Jurusan $jurusan</h3>
	</header>
		
		<div class='col-md-12 text-center'>
		<img src='$img' class='rounded-circle mb-4 foto'>
		<p class='text-muted'>$nama - Kepala Jurusan $jurusan</p>
		</div>
	
	<p>
	$keterangan
	</p>
	</div>
	</section>
	</main>
	";
	
	
	}



}

?>
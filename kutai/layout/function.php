<?php
ob_start();

class on
{

function index()
	{
	include('inc/inc.php');
	include ('slider.php');
	/*
	<div class='text-center mt-4 mb-4'>
	<a href='tamu.html' class='btn btn-warning btn-lg'>Buku Tamu</a>
	</div>
	*/
	echo"
	
  
	<section class='page-section bg-light' id='info'>
		<div class='container'>
			<div class='row text-center'>
				<div class='col-md-6 bg-white p-4 rounded'>
					<div class='col-md-4 float-left'>
					<span class='fa-stack fa-4x'>
					<i class='fas fa-circle fa-stack-2x text-primary'></i>
					<i class='fas fa-briefcase fa-stack-1x fa-inverse'></i>
					</span>
					<h4 class='service-heading'>Cepat Kerja</h4>
					</div>
					
					<div class='col-md-8 float-left text-left'>
					Sekolah ini punya banyak kolega yang siap menampung lulusan sehingga tak perlu mencari dan menunggu panggilan kerja
					</div>
				</div>
				
				<div class='col-md-6 bg-white p-4 rounded'>
					<div class='col-md-4 float-left'>
					<span class='fa-stack fa-4x'>
					<i class='fas fa-circle fa-stack-2x text-primary'></i>
					<i class='fas fa-check fa-stack-1x fa-inverse'></i>
					</span>
					<h4 class='service-heading'>Akreditasi A</h4>
					</div>
					
					<div class='col-md-8 float-left text-left'>
					Kualitas pendidikan sangat penting bagi kami, itu terbukti dengan akreditasi A pada sekolah ini.
					</div>
				</div>
				
				<div class='col-md-6 bg-white p-4 rounded'>
					<div class='col-md-4 float-left'>
					<span class='fa-stack fa-4x'>
					<i class='fas fa-circle fa-stack-2x text-primary'></i>
					<i class='fas fa-list fa-stack-1x fa-inverse'></i>
					</span>
					<h4 class='service-heading'>Prestasi</h4>
					</div>
					
					<div class='col-md-8 float-left text-left'>
					Telah menjuarai berbagai bidang perlombaan di tingkat kabupaten maupun provinsi menjadikan sekolah ini lebih unggul dari yang lain.
					</div>
				</div>
				
				<div class='col-md-6 bg-white p-4 rounded'>
					<div class='col-md-4 float-left'>
					<span class='fa-stack fa-4x'>
					<i class='fas fa-circle fa-stack-2x text-primary'></i>
					<i class='fas fa-clock fa-stack-1x fa-inverse'></i>
					</span>
					<h4 class='service-heading'>Fullday School</h4>
					</div>
					
					<div class='col-md-8 float-left text-left'>
					Sesuai dengan visi kami untuk meningkatkan kualitas pendidikan, kami menerapkan fullday school agar pembelajaran dapat dilakukan lebih optimal
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class='page-section' id='profil'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
				<h2 class='section-heading'>Profil Sekolah</h2>
				<p>
				";
				$profilesek=mysqli_query($conn,"select * from profile order by id desc limit 1");
				while($profilese=mysqli_fetch_array($profilesek))
					{
					echo"$profilese[profile_singkat]";
					}
				echo"
				<a href='index.php?load=PROFILE' class='btn btn-warning btn-lg mt-4'>Selengkapnya</a>
				</p>
				</div>
			</div>
		</div>
	</section>

	<section class='bg-light page-section' id='portfolio'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12 text-center'>
				<h2 class='section-heading text-uppercase'>Galeri</h2>
				</div>
			</div>
			
			<div class='row'>
			";

			$galerys=mysqli_query($conn,"select * from galeri order by id desc limit 6");
			while($galery=mysqli_fetch_array($galerys))
				{
				echo"
				<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal$galery[id]'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
						<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
				<img class='img-fluid' src='$galery[img]' alt=''>
				</a>
				</div>
				";
				}
				
			
			echo"
			</div>
			
			<div class='text-center mt-4'>
			<a href='index.php?load=GALERY' class='btn btn-outline-warning btn-lg'>Gambar lainnya</a>
			</div>
		</div>
    </section>
  
	
	<section class='bg-light page-section' id='berita'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12 text-center'>
				<h2 class='section-heading text-uppercase'>Berita Terbaru</h2>
				<p>&nbsp;</p>
				</div>
			</div>
			
			<div class='row'>
			";	
			$beritas=mysqli_query($conn,"select * from berita order by id desc limit 3");
			while($berita=mysqli_fetch_array($beritas))
				{
				//data-toggle='modal'
				echo"
				<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link'  href='index.php?load=DETAILBERITA&id=$berita[id]'>
				<img class='img-fluid' src='$berita[img]' alt=''>
				</a>
					<div class='portfolio-caption text-left'>
					<h4>$berita[judul]</h4>
					<p class='text-muted'>
					".date('F d, Y', strtotime($berita[tgl]))."
					</p>
					</div>
				</div>
				";
				}
				
				
			echo"
			</div>
			
			<div class='text-center mt-4'>
			<a href='index.php?load=BERITA' class='btn btn-outline-warning btn-lg'>Berita Lainnya</a>
			</div>
		</div>
	</section>

	<section class='bg-light page-section' id='jajaran'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12 text-center'>
				<h2 class='section-heading text-uppercase'>Jajaran</h2>
				</div>
			</div>
			";

			$kepsek1=mysqli_query($conn,"select * from kepsek order by id desc limit 1");
			while($kepsek=mysqli_fetch_array($kepsek1))
				{
				$namakepsek=$kepsek['nama'];
				$imgkepsek=$kepsek['img'];
				}
			echo"
			<div class='row'>
				<div class='col-sm-12'>
					<div class='team-member'>
					<img class='mx-auto rounded-circle' src='$imgkepsek'>
					<h4>$namakepsek</h4>
					<p class='text-muted'>Kepala Sekolah</p>
					<a href='index.php?load=JAJARAN' class='btn btn-outline-warning btn-lg'>Lainnya</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	";
	



	$c1=mysqli_query($conn,"select kategori_galeri.id as idkat, kategori_galeri.kategori as namakategori, galeri.* from galeri right join kategori_galeri on kategori_galeri.id=galeri.kat order by galeri.id desc limit 6");
	while($c=mysqli_fetch_array($c1))
		{
		echo"
		<div class='portfolio-modal modal fade' id='portfolioModal$c[id]' tabindex='-1' role='dialog' aria-hidden='true'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='close-modal' data-dismiss='modal'>
						<div class='lr'>
							<div class='rl'>
							</div>
						</div>
					</div>
					
					<div class='container'>
						<div class='row'>
							<div class='col-lg-8 mx-auto'>
								<div class='modal-body'>
								<h2 class='text-uppercase'>$c[judul]</h2>
								<p class='item-intro text-muted'></p>
								<img class='img-fluid d-block mx-auto' src='$c[img]' alt=''>
								<p></p>
								<ul class='list-inline'>
									<li>Tanggal: ".date('F d, Y', strtotime($c['tgl']))."</li>
									<li>Kategori: $c[namakategori]</li>
								</ul>
								<button class='btn btn-primary' data-dismiss='modal' type='button'>
								<i class='fas fa-times'></i>
								Close</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		";
		}

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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>Profil $namaskol</h2>
		<img src='$bg' class='rounded mb-4 mt-4'>
		<p>
		$profile_panjang
		</p>
	</div>
	</section>";

	
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>Sejarah $namaskol</h2>
		<img src='$bg' class='rounded mb-4 mt-4'>
		<p>
		$text
		</p>
		</div>
	</section>";
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>Visi & Misi $namaskol</h2>
		<img src='$bg' class='rounded mb-4 mt-4'>
		<p>
		$text
		</p>
		</div>
	</section>";
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>Tujuan $namaskol</h2>
		<img src='$bg' class='rounded mb-4 mt-4'>
		<p>
		$text
		</p>
		</div>
	</section>";
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>Sambutan Kepala $namaskol</h2>
		<hr />
			<div class='text-center mt-4 mb-4'>
			<img src='$img' class='fotoProfil rounded-circle'>
			<h4 class='mt-4'>$nama</h4>
			<p class='text-muted'>Kepala Sekolah</p>
			</div>
			<p>
			$sambutan
			</p>
		</div>
	</section>
	";
	}

function jajaran()
	{
	@ini_set('display_errors', 'off');
	include('inc/inc.php');
	
	$a1=mysqli_query($conn,"select * from kepsek order by id desc limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$namakepsek=$a['nama'];
		$imgkepsek=$a['img'];
		}

	echo"
	<section class='page-section' style='margin-top: 50px;' id='berita'>
		<div class='container'>
			<div class='row'>
				<h2 class='section-heading'>Jajaran</h2>
			</div>
		</div>
		
		<div class='container'>
			<div id='kepala'>
				<div class='row'>
					<div class='col-md-12 text-center'>
						<div class='col-md-4 col-sm-6 portfolio-item d-inline-block jajaran-item'>
						<a class='portfolio-link' href='#'>
						<div class='foto' style='background: url($imgkepsek)'></div>
						<div class='portfolio-caption text-center'>
						<h4>$namakepsek</h4>
						<p class='text-muted'>Kepala Sekolah</p>
						</div>
						</a>
						</div>
					</div>
				</div>
			</div>

			<div id='waka'>
				<div class='row'>
					<div class='col-md-12 text-center'>
					";
					$b1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%'");
					while($b=mysqli_fetch_array($b1))
						{
						echo"
						<div class='col-md-3 col-sm-6 portfolio-item d-inline-block jajaran-item'>
						<a class='portfolio-link' href='#'>
							<div class='foto' style='background: url($b[img])'>
							</div>
							
							<div class='portfolio-caption text-center'>
							<h4>$b[nama]</h4>
							<p class='text-muted'>$b[jabatan]</p>
							<a href='index.php?load=PROGRAM&id=$b[id]' class='btn btn-warning'>Lihat program</a>
							</div>
						</a>
						</div>
						";
						}
						
					echo"
					</div>
				</div>
			</div>

			<div id='guru'>
				<div class='row'>
					<div class='col-md-12 text-center'>
					";	
					$c1=mysqli_query($conn,"select * from jajaran where jabatan not like '%waka%' and jabatan not like '%kepala sekolah%'");
					while($c=mysqli_fetch_array($c1))
						{
						echo"
						<div class='col-md-2 portfolio-item d-inline-block jajaran-item'>
						<a class='portfolio-link' href='#'>
							<div class='foto' style='background: url($c[img])'>
							</div>
							
							<div class='portfolio-caption text-center'>
							<h4>$c[nama]</h4>
							</div>
						</a>
						</div>
						";
						}
						
					echo"
					</div>
				</div>
			</div>
		</div>
	</section>
	";
		
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>Program $jabatan</h2>
		<hr />
			<div class='text-center mt-4 mb-4'>
			<img src='$img' class='fotoProfil rounded-circle'>
			<h4 class='mt-4'>$nama</h4>
			<p class='text-muted'>$jabatan</p>
			</div>
			<p>
			$program
			</p>
		</div>
	</section>
	";
	?>
	
	<?php
	}

function berita()
	{
	?>
	<style>
		.portfolio-item {margin-bottom: 30px;}
		.portfolio-item img { height: 200px; width: 100%;}
		.portfolio-item a:nth-child(1) { text-decoration: none;color: #444; }
	</style>
	<?php
	include('inc/inc.php');
	echo"
	<section class='page-section' style='margin-top: 50px;' id='berita'>
		<div class='container'>
			<div class='row'>
			<h2 class='section-heading'>Berita</h2>
			</div>
		</div>
		
		<div class='container'>
			<div class='row'>
			";
			$a1=mysqli_query($conn,"select * from berita order by id desc");
			while($a=mysqli_fetch_array($a1))
				{
				echo"
				<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' href='index.php?load=DETAILBERITA&id=$a[id]'>
				<img class='img-fluid' src='$a[img]'>
					<div class='portfolio-caption text-left'>
					<h4>$a[judul]</h4>
					<p class='text-muted'>". date("F d, Y", strtotime($a['tgl']))."</p>
					<p>
					";
					$text=explode(' ',$a['text']);
					for($i=0;$i<=15;$i++)
						{
						echo"$text[$i] ";
						}
					echo"
					</p>
					<a href='index.php?load=DETAILBERITA&id=$a[id]' class='btn btn-outline-warning'>Baca</a>
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>$judul</h2>
		<img src='$img' class='rounded mb-4 mt-4'>
		<p>
		$text
		</p>
		</div>
	</section>
	";
	
	}

function informasi()
	{
	?>
	<style>
		.portfolio-item {margin-bottom: 30px;}
		.portfolio-item img { height: 200px; width: 100%;}
		.portfolio-item a:nth-child(1) { text-decoration: none;color: #444; }
	</style>
	<?php
	include('inc/inc.php');
	echo"
	<section class='page-section' style='margin-top: 50px;' id='berita'>
		<div class='container'>
			<div class='row'>
			<h2 class='section-heading'>Informasi</h2>
			</div>
		</div>
		
		<div class='container'>
			<div class='row'>
			";
			$a1=mysqli_query($conn,"select * from informasi2 order by id desc");
			while($a=mysqli_fetch_array($a1))
				{
				echo"
				<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' href='index.php?load=DETAILINFORMASI&id=$a[id]'>
				<img class='img-fluid' src='$a[img]'>
					<div class='portfolio-caption text-left'>
					<h4>$a[judul]</h4>
					<p class='text-muted'>". date("F d, Y", strtotime($a['tgl']))."</p>
					<p>
					";
					$text=explode(' ',$a['text']);
					for($i=0;$i<=15;$i++)
						{
						echo"$text[$i] ";
						}
					echo"
					</p>
					<a href='index.php?load=DETAILINFORMASI&id=$a[id]' class='btn btn-outline-warning'>Baca</a>
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

function detailinformasi()
	{
	$id=$_GET['id'];
	include('inc/inc.php');

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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>$judul</h2>
		<img src='$img' class='rounded mb-4 mt-4'>
		<p>
		$text
		</p>
		</div>
	</section>
	";
	
	}

function galery()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	
	echo"
	<section class='bg-light page-section mt-4' id='portfolio'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 text-center'>
				<h2 class='section-heading text-uppercase'>Galeri</h2>
			</div>
		</div>
		
		<div class='row'>
		";
			$b1=mysqli_query($conn,"select * from galeri where kat !=0 order by id desc");
			while($b=mysqli_fetch_array($b1))
				{
				echo"
				<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal$b[id]'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='$b[img]' alt=''>
				</a>
			</div>
				";
				}
			/*
			<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='img/galeri/galeri_1.jpg' alt=''>
				</a>
			</div>
			
			<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='img/galeri/galeri_2.jpg' alt=''>
				</a>
			</div>
			
			<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='img/galeri/galeri_3.jpg' alt=''>
				</a>
			</div>
			
			<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='img/galeri/skola_2.jpg' alt=''>
				</a>
			</div>
			
			<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='img/galeri/skola_3.jpg' alt=''>
				</a>
			</div>
			
			<div class='col-md-4 col-sm-6 portfolio-item'>
				<a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
					<div class='portfolio-hover'>
						<div class='portfolio-hover-content'>
							<i class='fas fa-eye fa-3x'></i>
						</div>
					</div>
					<img class='img-fluid' src='img/galeri/skola_4.jpeg' alt=''>
				</a>
			</div>
			*/
		echo"
		</div>
	</div>
	</section>";
	$c1=mysqli_query($conn,"select kategori_galeri.id as idkat, kategori_galeri.kategori as namakategori, galeri.* from galeri right join kategori_galeri on kategori_galeri.id=galeri.kat order by galeri.id desc");
	while($c=mysqli_fetch_array($c1))
		{
		echo"
		<div class='portfolio-modal modal fade' id='portfolioModal$c[id]' tabindex='-1' role='dialog' aria-hidden='true'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='close-modal' data-dismiss='modal'>
						<div class='lr'>
							<div class='rl'>
							</div>
						</div>
					</div>
					
					<div class='container'>
						<div class='row'>
							<div class='col-lg-8 mx-auto'>
								<div class='modal-body'>
								<h2 class='text-uppercase'>$c[judul]</h2>
								<p class='item-intro text-muted'></p>
								<img class='img-fluid d-block mx-auto' src='$c[img]' alt=''>
								<p></p>
								<ul class='list-inline'>
									<li>Tanggal: ".date('F d, Y', strtotime($c['tgl']))."</li>
									<li>Kategori: $c[namakategori]</li>
								</ul>
								<button class='btn btn-primary' data-dismiss='modal' type='button'>
								<i class='fas fa-times'></i>
								Close</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		";
		}
	
	

	
	}

function bukutamu()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	echo"
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-2'></div>
					<div class='col-md-8'>
					<h2>Buku Tamu</h2>
					<hr />
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
						<button class='btn btn-warning'>Selanjutnya</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12 text-center'>
				<form action='index.php?load=BUKUTAMUC' id='formTamu' method='post'>
					
					<div class='text-left mb-4'>
						<h2>Ingin bertemu dengan?</h2>
						<hr />
					</div>
					";
					$a1=mysqli_query($conn,"select * from jajaran where jabatan like '%waka%' order by nama");
					while($a=mysqli_fetch_array($a1))
						{
						echo"
						<div class='col-md-3 col-sm-6 portfolio-item d-inline-block jajaran-item tamu' onclick='pilih(this)' data-jajaran='$a[id]*$a[nama]' dipilih='tidak'>
							<div class='foto' style='background: url($a[img])'>
							</div>
							
							<div class='portfolio-caption text-center'>
							<h4>$a[nama]</h4>
							<p class='text-muted'>$a[jabatan]</p>
							</div>
						</div>
						";
						}

					/*
					<div class='col-md-3 col-sm-6 portfolio-item d-inline-block jajaran-item tamu' onclick='pilih(this)' data-jajaran='Steve Aoki' dipilih='tidak'>
						<div class='foto' style='background: url(img/tim/steveaoki.jpg)'></div>
						<div class='portfolio-caption text-center'>
							<h4>Steve Aoki</h4>
							<p class='text-muted'>Waka Kurikulum</p>
						</div>
					</div>
					
					<div class='col-md-3 col-sm-6 portfolio-item d-inline-block jajaran-item tamu' onclick='pilih(this)' data-jajaran='Hardwell' dipilih='tidak'>
						<div class='foto' style='background: url(img/tim/hardwell.jpg)'></div>
						<div class='portfolio-caption text-center'>
							<h4>Hardwell</h4>
							<p class='text-muted'>Waka Sarpras</p>
						</div>
					</div>
					
					<div class='col-md-3 col-sm-6 portfolio-item d-inline-block jajaran-item tamu' onclick='pilih(this)' data-jajaran='Mesto' dipilih='tidak'>
						<div class='foto' style='background: url(img/tim/mesto.jpg)'></div>
						<div class='portfolio-caption text-center'>
							<h4>Mesto</h4>
							<p class='text-muted'>Waka Kesiswaan</p>
						</div>
					</div>
					
					<div class='col-md-3 col-sm-6 portfolio-item d-inline-block jajaran-item tamu' onclick='pilih(this)' data-jajaran='Tom Cruise' dipilih='tidak'>
						<div class='foto' style='background: url(img/tim/tomcruise.jpg)'></div>
						<div class='portfolio-caption text-center'>
							<h4>Tom Cruise</h4>
							<p class='text-muted'>Waka Humas</p>
						</div>
					</div>
					*/

					echo"
					<div class='text-center mt-4'>
					<button class='btn btn-warning btn-lg'>Submit</button>
					<input type='hidden' name='toSend' id='toSend'>
					<input type='hidden' name='nama' value='$nama'>
					<input type='hidden' name='alamat' value='$alamat'>
					<input type='hidden' name='telp' value='$telp'>
					<input type='hidden' name='keperluan' value='$keperluan'>
					</div>
			
				</form>
				</div>
			</div>
		</div>
	</section>
	";
	/*
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
	*/
	?>
	<script>
	function pilih(that) {
		$(".tamu").attr('dipilih', 'tidak')
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
	echo"
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-2'></div>
				
				<div class='col-md-8'>
				<h2>Pesan Disampaikan!</h2>
				<hr />
				<p>
				Pesan telah disampaikan pada $jajaran
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
	<section class='page-section' style='margin-top: 100px;' id='konten'>
		<div class='container'>
		<h2>$jurusan</h2>
		<p>
			<div class='text-center mb-4'>
			<img src='$img' class='fotoProfil mb-4 mt-4'>
			<h4 class='text-muted'>$nama - $jurusan</h4>
			</div>
		<p>
		$keterangan
		</p>
		</p>
		</div>
	</section>
	";
	
	
	}



}

?>
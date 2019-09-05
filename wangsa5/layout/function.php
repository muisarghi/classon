<?php
ob_start();

class on
{

function index()
	{
	@ini_set('display_errors', 'on');
	include('inc/inc.php');
	include ('slider.php');
	?>
	<section class="cta" id="info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fas fa-school"></i>
                        <h2>Sekolah Negeri</h2>
                    </div>
                    <div class="top-doctor item">
                        <i class="fas fa-check"></i>
                        <h2>Akreditasi A</h2>
                    </div>
                    <div class="working-time item">
                        <i class="fas fa-list"></i>
                        <h2>Prestasi</h2>
                    </div>
                    <div class="working-time item">
                        <i class="fas fa-user-circle"></i>
                        <h2>Pengajar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>

	<section class="section bg-gray" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Profil Sekolah</h1>
                <p class="mt-4">
					<?php
                    $profilesek=mysql_query("select * from profile order by id desc limit 1");
					while($profilese=mysql_fetch_array($profilesek))
						{
						echo"$profilese[profile_singkat]";
						}
					?>
                </p>
                <a href="index.php?load=PROFILE" class="btn btn-info btn-lg">Selengkapnya</a>
            </div>
        </div>
    </div>
	</section>

	<section class="team-section section" id="berita">
    <div class="container">
        <div class="section-title text-center">
            <h3>Berita Terbaru</h3>
        </div>
        <div class="row">
            <?php
			$beritas=mysql_query("select * from berita order by id desc limit 3");
			while($berita=mysql_fetch_array($beritas))
				{
				echo"
				<div class='col-md-4 col-sm-6 col-xs-12'>
					<div class='team-member'>
						<img src='$berita[img]' alt='doctor' class='img-responsive'>
						<div class='contents'>
							<h4>$berita[judul]</h4>
							<p>";
							$text=explode(' ',$berita['text']);
							for($i=0;$i<=10;$i++)
								{
								echo"$text[$i] ";
								}
							echo"</p>
							<a href='index.php?load=DETAILBERITA&id=$berita[id]' class='btn btn-main'>read more</a>
						</div>
					</div>
				</div>
				";
				}
			/*
			<div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="http://www.smkn2sby.sch.id/media_library/posts/large/427e4cfce68a36bff874f793c9e0d0be.JPG" alt="doctor" class="img-responsive">
                    <div class="contents">
                        <h4>Jalin Keja Sama dengan Bengkel</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            
			<div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/galeri/galeri_11.jpg" alt="doctor" class="img-responsive">
                    <div class="contents">
                        <h4>Kepala Sekolah Himbau Siswa agar Tidak Coret Seragam Pasca Pengumuman</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            
			<div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="http://www.smkn2sby.sch.id/media_library/posts/large/427e4cfce68a36bff874f793c9e0d0be.JPG" alt="doctor" class="img-responsive">
                    <div class="contents">
                        <h4>Jalin Keja Sama dengan Bengkel</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
			*/
			?>

        </div>
        <div class="text-center mt-4">
            <a href="index.php?load=BERITA" class="btn btn-info btn-lg" style="margin-top: 40px;">Berita Lain</a>
        </div>
    </div>
	</section>
	<!--End team section-->

	<section class="section" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title text-center">
                <h3 style="margin-bottom: 30px;">Galeri</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            
		<?php
		$galerys=mysql_query("select * from galeri, kategori_galeri where galeri.kat=kategori_galeri.id order by galeri.id desc limit 3");
		while($galery=mysql_fetch_array($galerys))
			{
			echo"
			<div class='col-lg-4 col-sm-6'>
                <a href='$galery[img]' class='portfolio-box'>
                    <img src='$galery[img]' class='img-fluid' style='width: 100%'>
                    <div class='portfolio-box-caption'>
                        <div class='project-category text-white-50'>
                            $galery[kategori]
                        </div>
                        <div class='project-name'>
                            $galery[judul]
                        </div>
                    </div>
                </a>
            </div>
			";
			}
		/*
			<div class="col-lg-4 col-sm-6">
                <a href="http://www.sman2-sby.sch.id/wp-content/lg-gallery/Hari%20Kesaktian%20Pancasila/slides/DSC_7013_resize.JPG" class="portfolio-box">
                    <img src="http://www.sman2-sby.sch.id/wp-content/lg-gallery/Hari%20Kesaktian%20Pancasila/slides/DSC_7013_resize.JPG" class="img-fluid" style="width: 100%">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            Category
                        </div>
                        <div class="project-name">
                            Project name
                        </div>
                    </div>
                </a>
            </div>
            
			<div class="col-lg-4 col-sm-6">
                <a href="http://www.sman2-sby.sch.id/wp-content/lg-gallery/Hari%20Pramuka/slides/DSC_6371.JPG" class="portfolio-box">
                    <img src="http://www.sman2-sby.sch.id/wp-content/lg-gallery/Hari%20Pramuka/slides/DSC_6371.JPG" class="img-fluid" style="width: 100%">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            Category
                        </div>
                        <div class="project-name">
                            Project name
                        </div>
                    </div>
                </a>
            </div>
            
			<div class="col-lg-4 col-sm-6">
                <a href="http://www.sman2-sby.sch.id/wp-content/lg-gallery/Hari%20Pahlawan/slides/DSC_8150_resize.JPG" class="portfolio-box">
                    <img src="http://www.sman2-sby.sch.id/wp-content/lg-gallery/Hari%20Pahlawan/slides/DSC_8150_resize.JPG" class="img-fluid" style="width: 100%">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            Category
                        </div>
                        <div class="project-name">
                            Project name
                        </div>
                    </div>
                </a>
            </div>
			*/
		
		?>


        </div>
    </div>
	</section>

	<div class="text-center">
    <a href="index.php?load=GALERY" class="btn btn-info btn-lg">Foto lainnya</a>
	</div>

	<section class="section" id="jajaran">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-title text-center">
                <h3 style="margin-bottom: 30px;">Jajaran</h3>
				<?php
				$kepsek1=mysql_query("select * from jajaran where jabatan like '%kepala sekolah%' order by id desc limit 1");
				while($kepsek=mysql_fetch_array($kepsek1))
					{
					$namakepsek=$kepsek['nama'];
					$imgkepsek=$kepsek['img'];
					}
				?>
                <img src="<?php echo $imgkepsek; ?>" style="width: 150px;height: 150px;border-radius: 200px;">
                <h4 style="margin-top: 40px;font-size: 180%;"><?php echo $namakepsek;?></h4>
                <p style="margin-top: 20px;">Kepala Sekolah</p>
                <a href="index.php?load=JAJARAN" class="btn btn-info btn-lg">Selengkapnya</a>
            </div>
        </div>
    </div>
	</section>

	<!--testimonial-section-->
	<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimoni</h3>
        </div>
        <div class="testimonial-carousel">
            
			<?php

			$testim=mysql_query("select * from testimoni order by id desc");
			while($testi=mysql_fetch_array($testim))
				{
				echo"
				<div class='slide-item'>
					<div class='inner-box text-center'>
						<div class='image-box'>
							<figure>
								<img src='images/testimonials/1.png' alt=''>
							</figure>
						</div>
						<h6>$testi[nama]</h6>
						<p>$testi[komentar]</p>
					</div>
				</div>
				";
				}
			/*
			<!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
			*/
			?>


        </div>
    </div>
	</section>

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
	
	<!-- Contact Section -->
	<section class="blog-section section style-four style-five">
		<div class="container">
			<div class="row">
			<center>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="left-side">
						<div class="item-holder">
							<div class="image-box">
                            <figure>
							<img src="<?php echo $bg; ?>" alt="">
                            </figure>
                        </div>
                        
						<div class="content-text">
						<p>
						<?php echo $profile_panjang;?>
                        </p>
                        </div>
					</div>
                </div>
            </center>
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
	<!-- Contact Section -->
	<section class="blog-section section style-four style-five">
		<div class="container">
			<div class="row">
			<center>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="left-side">
						<div class="item-holder">
							<div class="image-box">
                            <figure>
							<img src="<?php echo $bg; ?>" alt="">
                            </figure>
                        </div>
                        
						<div class="content-text">
						<p>
						<?php echo $text;?>
                        </p>
                        </div>
					</div>
                </div>
            </center>
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
	<!-- Contact Section -->
	<section class="blog-section section style-four style-five">
		<div class="container">
			<div class="row">
			<center>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="left-side">
						<div class="item-holder">
							<div class="image-box">
                            <figure>
							<img src="<?php echo $bg; ?>" alt="">
                            </figure>
                        </div>
                        
						<div class="content-text">
						<p>
						<?php echo $text;?>
                        </p>
                        </div>
					</div>
                </div>
            </center>
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
	<!-- Contact Section -->
	<section class="blog-section section style-four style-five">
		<div class="container">
			<div class="row">
			<center>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="left-side">
						<div class="item-holder">
							<div class="image-box">
                            <figure>
							<img src="<?php echo $bg; ?>" alt="">
                            </figure>
                        </div>
                        
						<div class="content-text">
						<p>
						<?php echo $text;?>
                        </p>
                        </div>
					</div>
                </div>
            </center>
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
	<!-- Contact Section -->
	<section class="blog-section section style-four style-five">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="left-side">
						<div class="item-holder">
							<div class="image-box text-center">
								<figure>
									<img src="<?php echo $img; ?>" class="fotoProfil">
								</figure>
							</div>
							<div class="content-text">
								<div class="text-center">
									<h3><?php echo $nama; ?></h3>
									<p class="text-muted">Kepala Sekolah</p>
								</div>
								<p>
								<?php echo $sambutan; ?>
								</p>
							</div>
						</div>
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
	
	<section class="blog-section section style-four style-five">
    <div class="container">
		<!--<h2 class="mb-4">Jajaran</h2>-->
        <div id="kepala">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="col-md-4 jajaran-item text-center">
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

						<div class="foto" style="background: url(<?php echo $imgkepsek;?>)"></div>
						<h4><?php echo $namakepsek; ?></h4>
						<p class="text-muted">Kepala Sekolah</p>
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
					<div class='col-md-3 jajaran-item text-center'>
						<div class='foto' style='background: url($b[img])'></div>
						<h4>$b[nama]</h4>
						<p class='text-muted'>$b[jabatan]</p>
						<a href='index.php?load=PROGRAM&id=$b[id]' class='btn btn-info'>Lihat program</a>
					</div>
					";
					}
				?>
					<!--
					<div class="col-md-3 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/zuck.jpg)"></div>
						<h4>Mark Zuckerberg</h4>
						<p class="text-muted">Waka Kurikulum</p>
						<a href="#" class="btn btn-info">Lihat program</a>
					</div>
					<div class="col-md-3 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/mesto.jpg)"></div>
						<h4>Mesto</h4>
						<p class="text-muted">Waka Sarpras</p>
						<a href="#" class="btn btn-info">Lihat program</a>
					</div>
					<div class="col-md-3 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/kevin.jpg)"></div>
						<h4>Kevin Systrom</h4>
						<p class="text-muted">Waka Kesiswaan</p>
						<a href="#" class="btn btn-info">Lihat program</a>
					</div>
					<div class="col-md-3 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/bezos.jpg)"></div>
						<h4>Jeff Bezos</h4>
						<p class="text-muted">Waka Humas</p>
						<a href="#" class="btn btn-info">Lihat program</a>
					</div>
					-->



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
					<div class='col-md-2 jajaran-item text-center'>
						<div class='foto' style='background: url($c[img])'></div>
						<h4>$c[nama]</h4>
					</div>
					";
					}
				?>

					<!--
					<div class="col-md-2 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/hardwell.jpg)"></div>
						<h4>Hardwell</h4>
					</div>
					<div class="col-md-2 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/tomcruise.jpg)"></div>
						<h4>Tom Cruise</h4>
					</div>
					<div class="col-md-2 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/pichai.jpg)"></div>
						<h4>Sundar Pichai</h4>
					</div>
					<div class="col-md-2 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/timcook.jpg)"></div>
						<h4>Tim Cook</h4>
					</div>
					<div class="col-md-2 jajaran-item text-center">
						<div class="foto" style="background: url(img/tim/nadella.jpg)"></div>
						<h4>Satya Nadella</h4>
					</div>
					-->

				</div>
			</div>
		</div>
    </div>
	</section>
	
	
	<?php
	/*
	
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

	*/
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
	<section class="blog-section section style-four style-five">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="left-side">
						<div class="item-holder">
							<div class="image-box text-center">
								<figure>
									<img src="<?php echo $img; ?>" class="fotoProfil">
								</figure>
							</div>
							<div class="content-text">
								<div class="text-center">
									<h3><?php echo $nama; ?></h3>
									<p class="text-muted"><?php echo $jabatan; ?></p>
								</div>
								<p>
								<?php echo $program; ?>
								</p>
							</div>
						</div>
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
	
	echo"
	
	<section class='blog-section style-four section'>
    <div class='container'>
        <div class='row'>
		
            <div class='col-md-9 col-sm-12 col-xs-12'>
                <div class='left-side'>
				
                ";
				
				if(isset($_GET['search']))
					{
					$searchs=$_GET['search'];
					$cari1=" (judul like '%$searchs%') ";
					$mypage1="&search=$searchs";
					}
				else
					{
					$searchs=' ';
					$cari1=" judul !='' ";
					$mypage1="";
					}
				
				if(isset($_GET['kat']))
					{
					$kats=$_GET['kat'];
					$cari2=" (kategori='$kats') ";
					$mypage2="&kat=$kats";
					}
				else
					{
					$kats=' ';
					$cari2=" kategori !='' ";
					$mypage2="";
					}

				if(isset($_GET['tag']))
					{
					$tags=$_GET['tag'];
					$cari3=" (text like '%$tags%') ";
					$mypage3="&tag=$tags";
					}
				else
					{
					$tags=' ';
					$cari3=" text !='' ";
					$mypage3="";
					}
				
				$caris=mysql_result(mysql_query("select count(id) from berita where $cari1 and $cari2 and $cari3 "),0);
				//$search
				//$kat
				//$tags
				//MAAF, DATA TIDAK DITEMUKAN
				if($caris==0)
					{
					echo"<h2>MAAF, DATA TIDAK DITEMUKAN !!! </h2>";
					}
				else
					{
					
					}

				if(!isset($_GET['page']))
					{
					$page = 1;
					} 
				else 
					{
					$page = $_GET['page'];
					}
						
				$max_results =2;
				$from=(($page*$max_results)-$max_results);

				$a1=mysql_query("select * from berita where $cari1 and $cari2 and $cari3 order by id desc limit $from, $max_results");
				while($a=mysql_fetch_array($a1))
					{
					echo"
					<div class='item-holder'>
                        <div class='image-box'>
                            <figure>
                                <a href='index.php?load=DETAILBERITA&id=$a[id]'><img src='$a[img]' alt='$a[judul]'></a>
                            </figure>
                        </div>
                        <div class='content-text'>
                            <a href='index.php?load=DETAILBERITA&id=$a[id]'>
							<h6>$a[judul]</h6></a>
                            <span>By $a[penulis] / ".date('d F Y', strtotime($a['tgl']))."</span>
                            <p>";
							$text=explode(' ',$a['text']);
							for($i=0;$i<=10;$i++)
								{
								echo"$text[$i] ";
								}
							echo"</p>
                            <div class='link-btn'>
                                <a href='index.php?load=DETAILBERITA&id=$a[id]' class='btn-style-one'>Baca Selengkapnya</a>
                            </div>
                        </div>
					</div>
					";
					}


				echo"
                </div>
            </div>

            <div class='col-md-3 col-sm-12 col-xs-12'>
                <div class='right-side'>
                    <div class='text-title'>
                        <h6>Search</h6>
                    </div>
                    <div class='search-box'>
                        <form method='post' action='index.php?load=sberita'>
                            <input type='search' name='search' placeholder='Cari Berita ...' required=''>
							
                        </form>
                    </div>
                    <div class='categorise-menu'>
                        <div class='text-title'>
                            <h6>Kategori</h6>
                        </div>
                        <ul class='categorise-list'>";
						$kat1=mysql_query("SELECT berita.kategori,COUNT(berita.kategori) AS total, kategori_berita.id, kategori_berita.kategori as namakat FROM berita left join kategori_berita on berita.kategori=kategori_berita.id GROUP BY berita.kategori");
						while($kat=mysql_fetch_array($kat1))
							{
							echo"<li><a href='index.php?load=BERITA&kat=$kat[id]'>$kat[namakat]<span>($kat[total])</span></a></li>";
							}
						echo"
                        </ul>                           
                    </div>
                    <div class='tag-list'>
                        <div class='text-title'>
                            <h6>Tags</h6>
                        </div>
						<a href='index.php?load=BERITA&tag=kelulusan'>kelulusan</a>
						<a href='index.php?load=BERITA&tag=kegiatan'>kegiatan</a>
						<a href='index.php?load=BERITA&tag=himbauan'>himbauan</a>
						<a href='index.php?load=BERITA&tag=doa'>doa</a>
						<a href='index.php?load=BERITA&tag=ipsum'>ipsum</a>
						<a href='index.php?load=BERITA&tag=siswa'>siswa</a>
						<a href='index.php?load=BERITA&tag=kunjungan'>kunjungan</a>
                    </div>
                </div>
            </div>
        </div>                
		
		";

		$jmlresult=mysql_query("SELECT COUNT(*) as jmlresult from berita where $cari1 and $cari2 and $cari3");
		while($jmresult=mysql_fetch_array($jmlresult))
			{
			$total_results=$jmresult['jmlresult'];
			}
		$total_pages = ceil($total_results / $max_results);

		echo"
        <div class='styled-pagination'>
            <ul>
			";
			/*
                <li><a class='prev' href='#'><span class='fa fa-angle-left' aria-hidden='true'></span></a></li>
                <li><a href='#' class='active'>1</a></li>
                <li><a href='#'>2</a></li>
                <li><a href='#'>3</a></li>
                <li><a class='next' href='#'><span class='fa fa-angle-right' aria-hidden='true'></span></a></li>
            */

			if($page > 1)
				{
				$prev = ($page - 1);
				$prevn="
				<li><a class='prev' href='".$_SERVER['PHP_SELF']."?load=BERITA&page=$prev$mypage1$mypage2$mypage3'><span class='fa fa-angle-left' aria-hidden='true'></span></a></li>
				";
				}
			else
				{
				$prev = ($page - 1);
				$prevn="
				<li><a class='disabling' onclick='return false;'><span class='fa fa-angle-left' aria-hidden='false'></span></a></li>
				";
				}
			//echo "<li class='page-item $prevn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$prev\"><span class='ion-ios-arrow-back'></span> </li>";
			echo"
			$prevn
			";

			for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				//echo "<li class='page-item active'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$i\">$i</a> </li>";
				echo"<li><a href='".$_SERVER['PHP_SELF']."?load=BERITA&page=$i$mypage1$mypage2$mypage3' class='active'>$i</a></li>";
				} 
			else 
				{
				//echo "<li class='page-item'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$i\">$i</a> </li>";
				echo"<li><a href='".$_SERVER['PHP_SELF']."?load=BERITA&page=$i$mypage1$mypage2$mypage3'>$i</a></li>";
				}
			}
					
			if($page < $total_pages)
				{
				$next = ($page + 1);
				$nextn="
				<li><a class='next' href='".$_SERVER['PHP_SELF']."?load=BERITA&page=$next$mypage1$mypage2$mypage3'><span class='fa fa-angle-right' aria-hidden='true'></span></a></li>
				";
				}
			else
				{
				$next = ($page + 1);
				$nextn="
				<li><a class='disabling' href='".$_SERVER['PHP_SELF']."?load=BERITA&page=$next'><span class='fa fa-angle-right' aria-hidden='true'></span></a></li>
				";
				}
		//echo "<li class='page-item $nextn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$next\"><span class='ion-ios-arrow-forward'></span></a></li>";
		echo"$nextn";
		echo"
		
		";
		
			echo"	
			</ul>
        </div>                  
    </div>
	</section>
	
	";
	
	
	
	/*
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
	*/
	}

function sberita()
	{
	$search=$_POST['search'];
	header('location: index.php?load=BERITA&search='.$search.'');
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
	
	<section class='blog-section section style-four style-five'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12 col-sm-12 col-xs-12'>
                <div class='left-side'>
                    <div class='item-holder'>
                        <h2>$judul</h2><br>
                        <div class='image-box mt-4'>
                            <figure>
                                <img src='$img'>
                            </figure>
                        </div>
                        <div class='content-text'>
                            <p>
                                $text
                            </p>
                        </div>
                    </div>
                </div>
			</div>
        </div>                
    </div>
	</section>
	";
	/*
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
	*/
	}


function informasi()
	{
	include('inc/inc.php');
	include('title.php');
	
	echo"
	
	<section class='blog-section style-four section'>
    <div class='container'>
        <div class='row'>
		
            <div class='col-md-9 col-sm-12 col-xs-12'>
                <div class='left-side'>
				
                ";
				
				if(isset($_GET['search']))
					{
					$searchs=$_GET['search'];
					$cari1=" (judul like '%$searchs%') ";
					$mypage1="&search=$searchs";
					}
				else
					{
					$searchs=' ';
					$cari1=" judul !='' ";
					$mypage1="";
					}
				
				if(isset($_GET['kat']))
					{
					$kats=$_GET['kat'];
					$cari2=" (kat='$kats') ";
					$mypage2="&kat=$kats";
					}
				else
					{
					$kats=' ';
					$cari2=" kat !='' ";
					$mypage2="";
					}

				if(isset($_GET['tag']))
					{
					$tags=$_GET['tag'];
					$cari3=" (text like '%$tags%') ";
					$mypage3="&tag=$tags";
					}
				else
					{
					$tags=' ';
					$cari3=" text !='' ";
					$mypage3="";
					}
				
				$caris=mysql_result(mysql_query("select count(id) from informasi2 where $cari1 and $cari2 and $cari3 "),0);
				//$search
				//$kat
				//$tags
				//MAAF, DATA TIDAK DITEMUKAN
				if($caris==0)
					{
					echo"<h2>MAAF, DATA TIDAK DITEMUKAN !!! </h2>";
					}
				else
					{
					
					}

				if(!isset($_GET['page']))
					{
					$page = 1;
					} 
				else 
					{
					$page = $_GET['page'];
					}
						
				$max_results =2;
				$from=(($page*$max_results)-$max_results);

				$a1=mysql_query("select * from informasi2 where $cari1 and $cari2 and $cari3 order by id desc limit $from, $max_results");
				while($a=mysql_fetch_array($a1))
					{
					echo"
					<div class='item-holder'>
                        <div class='image-box'>
                            <figure>
                                <a href='index.php?load=DETAILINFORMASI&id=$a[id]'><img src='$a[img]' alt='$a[judul]'></a>
                            </figure>
                        </div>
                        <div class='content-text'>
                            <a href='index.php?load=DETAILINFORMASI&id=$a[id]'>
							<h6>$a[judul]</h6></a>
                            <span>By $a[penulis] / ".date('d F Y', strtotime($a['tgl']))."</span>
                            <p>";
							$text=explode(' ',$a['text']);
							for($i=0;$i<=10;$i++)
								{
								echo"$text[$i] ";
								}
							echo"</p>
                            <div class='link-btn'>
                                <a href='index.php?load=DETAILINFORMASI&id=$a[id]' class='btn-style-one'>Baca Selengkapnya</a>
                            </div>
                        </div>
					</div>
					";
					}


				echo"
                </div>
            </div>

            <div class='col-md-3 col-sm-12 col-xs-12'>
                <div class='right-side'>
                    <div class='text-title'>
                        <h6>Search</h6>
                    </div>
                    <div class='search-box'>
                        <form method='post' action='index.php?load=sinformasi'>
                            <input type='search' name='search' placeholder='Cari Informasi...' required=''>
							
                        </form>
                    </div>
                    <div class='categorise-menu'>
                        <div class='text-title'>
                            <h6>Kategori</h6>
                        </div>
                        <ul class='categorise-list'>";
						$kat1=mysql_query("SELECT informasi2.kat,COUNT(informasi2.kat) AS total, kategori_informasi.id, kategori_informasi.kategori as namakat FROM informasi2 left join kategori_informasi on informasi2.kat=kategori_informasi.id GROUP BY informasi2.kat");
						while($kat=mysql_fetch_array($kat1))
							{
							echo"<li><a href='index.php?load=INFORMASI&kat=$kat[id]'>$kat[namakat]<span>($kat[total])</span></a></li>";
							}
						echo"
                        </ul>                           
                    </div>
                    <div class='tag-list'>
                        <div class='text-title'>
                            <h6>Tags</h6>
                        </div>
						<a href='index.php?load=INFORMASI&tag=kelulusan'>kelulusan</a>
						<a href='index.php?load=INFORMASI&tag=kegiatan'>kegiatan</a>
						<a href='index.php?load=INFORMASI&tag=himbauan'>himbauan</a>
						<a href='index.php?load=INFORMASI&tag=doa'>doa</a>
						<a href='index.php?load=INFORMASI&tag=ipsum'>ipsum</a>
						<a href='index.php?load=INFORMASI&tag=siswa'>siswa</a>
						<a href='index.php?load=INFORMASI&tag=kunjungan'>kunjungan</a>
                    </div>
                </div>
            </div>
        </div>                
		
		";

		$jmlresult=mysql_query("SELECT COUNT(*) as jmlresult from informasi2 where $cari1 and $cari2 and $cari3");
		while($jmresult=mysql_fetch_array($jmlresult))
			{
			$total_results=$jmresult['jmlresult'];
			}
		$total_pages = ceil($total_results / $max_results);

		echo"
        <div class='styled-pagination'>
            <ul>
			";
			/*
                <li><a class='prev' href='#'><span class='fa fa-angle-left' aria-hidden='true'></span></a></li>
                <li><a href='#' class='active'>1</a></li>
                <li><a href='#'>2</a></li>
                <li><a href='#'>3</a></li>
                <li><a class='next' href='#'><span class='fa fa-angle-right' aria-hidden='true'></span></a></li>
            */

			if($page > 1)
				{
				$prev = ($page - 1);
				$prevn="
				<li><a class='prev' href='".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$prev$mypage1$mypage2$mypage3'><span class='fa fa-angle-left' aria-hidden='true'></span></a></li>
				";
				}
			else
				{
				$prev = ($page - 1);
				$prevn="
				<li><a class='disabling' onclick='return false;'><span class='fa fa-angle-left' aria-hidden='false'></span></a></li>
				";
				}
			//echo "<li class='page-item $prevn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$prev\"><span class='ion-ios-arrow-back'></span> </li>";
			echo"
			$prevn
			";

			for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				//echo "<li class='page-item active'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$i\">$i</a> </li>";
				echo"<li><a href='".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$i$mypage1$mypage2$mypage3' class='active'>$i</a></li>";
				} 
			else 
				{
				//echo "<li class='page-item'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$i\">$i</a> </li>";
				echo"<li><a href='".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$i$mypage1$mypage2$mypage3'>$i</a></li>";
				}
			}
					
			if($page < $total_pages)
				{
				$next = ($page + 1);
				$nextn="
				<li><a class='next' href='".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$next$mypage1$mypage2$mypage3'><span class='fa fa-angle-right' aria-hidden='true'></span></a></li>
				";
				}
			else
				{
				$next = ($page + 1);
				$nextn="
				<li><a class='disabling' href='".$_SERVER['PHP_SELF']."?load=INFORMASI&page=$next'><span class='fa fa-angle-right' aria-hidden='true'></span></a></li>
				";
				}
		//echo "<li class='page-item $nextn'><a class='page-link' href=\"".$_SERVER['PHP_SELF']."?load=BERITA&page=$next\"><span class='ion-ios-arrow-forward'></span></a></li>";
		echo"$nextn";
		echo"
		
		";
		
			echo"	
			</ul>
        </div>                  
    </div>
	</section>
	
	";
	
	
	
	/*
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
	*/
	}

function sinformasi()
	{
	$search=$_POST['search'];
	header('location: index.php?load=INFORMASI&search='.$search.'');
	}

function detailinformasi()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');

	$a1=mysql_query("select * from informasi2 where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		$penulis=$a['penulis'];
		$tgl=$a['tgl'];
		}
	echo"
	
	<section class='blog-section section style-four style-five'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12 col-sm-12 col-xs-12'>
                <div class='left-side'>
                    <div class='item-holder'>
                        <h2>$judul</h2><br>
                        <div class='image-box mt-4'>
                            <figure>
                                <img src='$img'>
                            </figure>
                        </div>
                        <div class='content-text'>
                            <p>
                                $text
                            </p>
                        </div>
                    </div>
                </div>
			</div>
        </div>                
    </div>
	</section>
	";
	/*
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
	*/
	}


/*
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
*/
function galery()
	{
	$id=$_GET['id'];
	include('inc/inc.php');
	include('title.php');
	echo"
	<section class='gallery bg-gray'>
    <div class='container'>
        <div class='row'>
		";
		$a1=mysql_query("select *from galeri where kat != 0 order by id desc");	
		while($a=mysql_fetch_array($a1))
			{
			echo"
			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='$a[img]' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='$a[img]'>
						<h3>$a[judul]</h3>
						<p></p>
					</a>
                </div>
			</div>
			";
			}
			

			/*
			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='images/galeri/galeri_3.jpg' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='images/galeri/galeri_3.jpg'>
						<h3>Gambar_01</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
					</a>
                </div>
			</div>
			";

			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='images/galeri/galeri_4.jpg' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='images/galeri/galeri_4.jpg'>
						<h3>Gambar_02</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
					</a>
                </div>
			</div>
			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='images/galeri/galeri_5.jpg' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='images/galeri/galeri_5.jpg'>
						<h3>Gambar_03</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
					</a>
                </div>
			</div>
			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='images/galeri/galeri_6.jpg' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='images/galeri/galeri_6.jpg'>
						<h3>Gambar_04</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
					</a>
                </div>
			</div>
			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='images/galeri/galeri_7.jpg' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='images/galeri/galeri_7.jpg'>
						<h3>Gambar_05</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
					</a>
                </div>
			</div>
			<div class='col-md-4 col-sm-6'>
                <div class='gallery-item'>
					<img src='images/galeri/galeri_8.jpg' class='img-responsive' alt='gallery-image'>
					<a data-fancybox='images' href='images/galeri/galeri_8.jpg'>
						<h3>Gambar_06</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
					</a>
                </div>
				*/
	

			echo"
            </div>
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
	<section class='blog-section section style-four style-five'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'></div>
            <div class='col-md-8 col-sm-12 col-xs-12'>
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
                        <button class='btn btn-info btn-lg'>Selanjutnya</button>
                    </div>
                </form>
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
	include('title.php');
	echo"
	
	<section class='blog-section section style-four style-five'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12 col-sm-12 col-xs-12'>
                <form action='index.php?load=BUKUTAMUC' id='formTamu' method='post'>
                    <h2>Ingin bertemu dengan?</h2>
                    <hr />
                    
                    <div class='col-md-12 text-center'>
                    "; 
					$a1=mysql_query("select * from jajaran where jabatan like '%waka%' order by nama");
					while($a=mysql_fetch_array($a1))
						{
						echo"
						<div class='col-md-3 jajaran-item text-center tamu' onclick='pilih(this)' dipilih='tidak' data-jajaran='$a[id]*$a[nama]'>
                            <div class='foto' style='background: url($a[img])'>
							</div>
                        <h4>$a[nama]</h4>
						<p class='text-muted'>$a[jabatan]</p>
                        </div>
						";
						}
						

						echo"
                        <br /><br />
                        <div class='mt-4'>
							<input type='hidden' name='toSend' id='toSend'>
							<input type='hidden' name='nama' value='$nama'>
							<input type='hidden' name='alamat' value='$alamat'>
							<input type='hidden' name='telp' value='$telp'>
							<input type='hidden' name='keperluan' value='$keperluan'>
                            <button class='btn btn-info btn-lg'>Submit</button>
                        </div>
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
	<section class='blog-section section style-four style-five'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'></div>
            <div class='col-md-8 col-sm-12 col-xs-12'>
                <h2>Pesan Disampaikan!</h2>
                <br />
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
	echo"
	<section class='blog-section section style-four style-five'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12 col-sm-12 col-xs-12'>
                <div class='left-side'>
                    <div class='item-holder'>
                        <h2>$jurusan</h2>
                        <div class='content-text'>
							<div class='text-center'>
								<img src='$img' class='fotoProfil'>
								<br><br>
								<h4 class='mt-4 text-muted'>$nama - Kaprog $jurusan</h4>
							</div>
                            <p>
                            $keterangan
                            </p>
                        </div>
                    </div>
                </div>
			</div>
        </div>                
    </div>
	</section>
	";
	}



}

?>
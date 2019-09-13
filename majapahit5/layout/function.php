<?php
ob_start();

class on
{

function index()
	{
	include('inc/inc.php');
	include ('layout/sekolah.php');
		?>
		<section class="carousel slide cid-rs0XWDKLqr" data-interval="false" id="slider1-1">

			<div class="full-screen">
				<div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
				<ol class="carousel-indicators">
				<li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0"></li>
				<li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1"></li>
				<li data-app-prevent-settings="" data-target="#slider1-1"  data-slide-to="2"></li>
				<li data-app-prevent-settings="" data-target="#slider1-1"  data-slide-to="3"></li>
				</ol>
					<div class="carousel-inner" role="listbox">
					<?php
					$slides=mysql_query("select * from banner order by id desc");
					while($slide=mysql_fetch_array($slides))
						{
						echo"
						<div class='carousel-item slider-fullscreen-image' style='background-image: url($slide[img])'>
							<div class='container container-slide'>
							
								<div class='image_wrapper'>
									
									<div class='mbr-overlay'>
									
									</div>
									
									<div class='carousel-caption justify-content-center'>
										<div class='col-10 align-center'>
										<h2 class='mbr-fonts-style display-1'><strong>$slide[title]</strong></h2>
										<p class='lead mbr-text mbr-fonts-style display-5'> $slide[text]</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						";
						}

					$slidesb=mysql_query("select * from banner order by id desc limit 1");
					while($slideb=mysql_fetch_array($slidesb))
						{
						echo"
						<div class='carousel-item slider-fullscreen-image active' style='background-image: url($slideb[img])'>
							<div class='container container-slide'>
							
								<div class='image_wrapper'>
									
									<div class='mbr-overlay'>
									
									</div>
									
									<div class='carousel-caption justify-content-center'>
										<div class='col-10 align-center'>
										<h2 class='mbr-fonts-style display-1'><strong>$slideb[title]</strong></h2>
										<p class='lead mbr-text mbr-fonts-style display-5'> $slideb[text]</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						";
						}

					?>

					</div>
					<a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-1">
					<span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
					<span class="sr-only">Previous</span></a>
					<a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-1"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</section>

		<section class="features1 cid-rs13klJ2dg" id="features1-2">
			<div class="container">
				<div class="media-container-row">

					<div class="card p-3 col-12 col-md-6 col-lg-3">
						<div class="card-img pb-3">
						<span class="mbr-iconfont mbri-bookmark"></span>
						</div>
							
						<div class="card-box">
						<h4 class="card-title py-3 mbr-fonts-style display-5">
						Sekolah Negeri</h4>		
						</div>
					</div>

					<div class="card p-3 col-12 col-md-6 col-lg-3">
						<div class="card-img pb-3">
						<span class="mbr-iconfont mbri-idea"></span>
						</div>
						
						<div class="card-box">
						<h4 class="card-title py-3 mbr-fonts-style display-5">
						Akreditasi - A</h4>		
						</div>
					</div>

					<div class="card p-3 col-12 col-md-6 col-lg-3">
						<div class="card-img pb-3">
						<span class="mbr-iconfont mbri-star"></span>
						</div>
						
						<div class="card-box">
						<h4 class="card-title py-3 mbr-fonts-style display-5">
						Prestasi</h4>		
						</div>
					</div>

					<div class="card p-3 col-12 col-md-6 col-lg-3">
						<div class="card-img pb-3">
						<span class="mbr-iconfont mbri-user2"></span>
						</div>
						
						<div class="card-box">
						<h4 class="card-title py-3 mbr-fonts-style display-5">
						Pengajar</h4>		
						</div>
					</div>

				</div>
			</div>

		</section>

		<section class="header7 cid-rs15acSsAP" id="header7-3">
			<div class="container">
				<div class="media-container-row">
					<div class="media-content align-right">
					<h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
					Profile Sekolah</h1>
						<div class="mbr-section-text mbr-white pb-3">
						<?php
						$d1=mysql_query("select * from profile order by id asc limit 1");
						while($d=mysql_fetch_array($d1))
							{
							$profile_singkat=$d['profile_singkat'];
							$bg=$d['bg'];
							}
						?>
						<p class="mbr-text mbr-fonts-style display-5">
						<?php echo $profile_singkat; ?>
						</p>
						</div>
							
					</div>

					<div class="mbr-figure" style="width: 100%;">
					<img src="<?php echo $bg; ?>">
					<!--<iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/U0B1kNnxTs4?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe>-->
					</div>
				</div>
			</div>
		</section>

		<section class="mbr-gallery mbr-slider-carousel cid-rs16LmQYTh" id="gallery2-4">
		<div>
			<div><!-- Filter -->
				<div class="mbr-gallery-filter container gallery-filter-active">
				<ul buttons="0">
				<li class="mbr-gallery-filter-all">
				<a class="btn btn-md btn-primary-outline active display-7" href="">All</a>
				</li>
				</ul>
				</div>
				
				<div class="mbr-gallery-row">
				<div class="mbr-gallery-layout-default">
					<div>
						<div>
							<?php 
							$gal1=mysql_query("select kategori_galeri.*, galeri.* from kategori_galeri left join galeri on kategori_galeri.id=galeri.kat limit 4");
							$no=0;
							while($gal=mysql_fetch_array($gal1))
								{
								/*
								<div href="#lb-gallery2-y" data-slide-to="<?php echo"$no"; ?>" data-toggle="modal">
									<img src="<?php echo"$a[img]"; ?>" alt="<?php echo"$a[judul]"; ?>" title="<?php echo"$a[judul]"; ?>">
									<span class='icon-focus'></span>
									</div>
								*/	
								echo"
								<div class='mbr-gallery-item mbr-gallery-item--p2' data-video-url='false' data-tags='$gal[kategori]'>
									<div href='#lb-gallery2-y' data-slide-to='$no' data-toggle='modal'>
									<img src='$gal[img]' alt='$gal[judul]' title='$gal[judul]'><span class='icon-focus'></span>
									</div>
								</div>
								";
								$no++;
								}
							?>
							
						</div>
					</div>
						
					<div class="clearfix">
					</div>
				</div>
			</div><!-- Lightbox -->
			
			<div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-y">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="carousel-inner">	
								
								<?php
								//$gil1=mysql_query("select * from galeri where kat !=0 order by kat,id ASC");
								$gil1=mysql_query("select kategori_galeri.*, galeri.* from kategori_galeri left join galeri on kategori_galeri.id=galeri.kat limit 4");
								
								while($gil=mysql_fetch_array($gil1))
									{
									echo"
									<div class='carousel-item'>
									<img src='$gil[img]' alt='$gil[judul]' title='$gil[judul]'>
									</div>
									";
									}
								
								$bb1=mysql_query("select kategori_galeri.*, galeri.* from kategori_galeri left join galeri on kategori_galeri.id=galeri.kat order by galeri.id asc limit 1");
								while($bb=mysql_fetch_array($bb1))
									{
									echo"
									<div class='carousel-item active'>
									<img src='$bb[img]' alt='$bb[judul]' title='$bb[judul]'>
									</div>
									";
									}

								?>
								

							</div>
							
							<a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-y">
							<span class="mbri-left mbr-iconfont" aria-hidden="true">
							</span>
							<span class="sr-only">Previous</span>
							</a>
							
							<a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-y">
							<span class="mbri-right mbr-iconfont" aria-hidden="true">
							</span>
							<span class="sr-only">Next</span></a>
							<a class="close" href="#" role="button" data-dismiss="modal">
							<span class="sr-only">Close</span>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>

				
			</div>
			</section>

			<section class="mbr-section info2 cid-rs17CnFvUg" id="info2-8">
				<div class="container">
					<div class="row main justify-content-center">
						<div class="media-container-column col-12 col-lg-3 col-md-4">
							<div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="index.html"><span class="mbrib-edit mbr-iconfont mbr-iconfont-btn"></span>
								DAFTAR SEKARANG</a></div>
						</div>
						<div class="media-container-column title col-12 col-lg-7 col-md-6">
							<h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Jadilah Bagian Dari Masa Depan Terbaik</h2>
							
						</div>
					</div>
				</div>
			</section>

			<section class="mbr-section content4 cid-rs16XziUI1" id="content4-5">
				<div class="container">
					<div class="media-container-row">
						<div class="title col-12 col-md-8">
							<h2 class="align-center pb-3 mbr-fonts-style display-2">
								Berita Sekolah</h2>
						</div>
					</div>
				</div>
			</section>

			<section class="features3 cid-rs172xXCrl" id="features3-7">
				<div class="container">
					<div class="media-container-row">
						<?php
						$b1=mysql_query("select * from berita order by id desc limit 3");
						while($b=mysql_fetch_array($b1))
							{
							//$text=explode(' ', $b['text']);
							//for($i=0;$i<=100;$i++)
							echo"
							<div class='card p-3 col-12 col-md-6 col-lg-4'>
							<div class='card-wrapper'>
								<div class='card-img'>
									<img src='$b[img]' alt='Mobirise' title=''>
								</div>
								<div class='card-box'>
									<h4 class='card-title mbr-fonts-style display-7'>
									$b[judul]
									</h4>
									<p class='mbr-text mbr-fonts-style display-7'>
									";
									//.substr($b['text'],0,100).
									$text=explode(' ',$b['text']);
									for($i=0;$i<=30;$i++)
									{
									echo"$text[$i] ";
									}
									echo"
									</p>
								</div>
								<div class='mbr-section-btn text-center'><a href='index.php?load=detberita&id=$b[id]' class='btn btn-primary display-4'>
								Selengkapnya</a></div>
							</div>
						</div>
							";
							}
						?>
					</div>
				</div>
			</section>

			<section class="testimonials5 cid-rs17IpJwff" id="testimonials5-9">
				<div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(193, 193, 193);">
				</div>
				<div class="container">
					<div class="media-container-row">
						<div class="title col-12 align-center">
							<h2 class="pb-3 mbr-fonts-style display-2">Kepala <?php echo $namaskol; ?></h2>
							
						</div>
					</div>
				</div>

				<div class="container">
					<div class="media-container-column">
						<?php
						$a1=mysql_query("select * from kepsek order by id DESC limit 1");
						while($a=mysql_fetch_array($a1))
							{
							//$namakepsek=$a['nama'];
							//$imgkepsek=$a['img'];
							$sambutan=$a['sambutan'];
							}
						$ab1=mysql_query("select * from jajaran where jabatan like '%kepala sekolah%' order by id DESC limit 1");
						while($ab=mysql_fetch_array($ab1))
							{
							$namakepsek=$ab['nama'];
							$imgkepsek=$ab['img'];
							//$sambutan=$a['sambutan'];
							}
						?>
						<div class="mbr-testimonial align-center col-12 col-md-10">
							<div class="panel-item">
								<div class="card-block">
									<div class="testimonial-photo">
										<img src="<?php echo $imgkepsek; ?>" alt="" title="">
									</div>
									<p class="mbr-text mbr-fonts-style mbr-white display-7">
									<?php
									echo $sambutan;
									?>   
									</p>
								</div>
								<div class="card-footer">
									<div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-7">
										 <?php echo $namakepsek; ?></div>
									<small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">Kepala <?php echo $namaskol; ?></small>
								</div>
							</div>
						</div>

					</div>
				</div>   
			</section>
		<?php
	}


function profil()
	{
	include 'inc/inc.php';
	?>
	
	<section class="mbr-section content5 cid-rs1kDWtH51 mbr-parallax-background" id="content5-k">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Profil Sekolah</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Profile Sekolah SMAN 1 Majapahit</h3>
            </div>
        </div>
    </div>
	</section>

	<section class="mbr-section article content1 cid-rs1kFwn6X3" id="content1-l">

    <div class="container">
        <div class="media-container-row">
            
			<?php
			$a1=mysql_query("select * from profile order by id desc limit 1");
				while($a=mysql_fetch_array($a1))
				{
				$profile_pjg=$a['profile_panjang'];
				$bg=$a['bg'];
				}
			echo"
			

			<div class='mbr-text col-12 mbr-fonts-style display-7 col-md-10'>
			<div class='mbr-figure' style='width: 100%;'>
			<img src='$bg'>
			</div>
			<br>
			$profile_pjg";
			?>
			
            </div>
        </div>
    </div>
	</section>
	<?php
	}

function sejarah()
	{
	include 'inc/inc.php';
	?>
	<section class="mbr-section content5 cid-rs1kDWtH51 mbr-parallax-background" id="content5-k">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Sejarah Sekolah</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                Sejarah Sekolah SMAN 1 Majapahit</h3>
            </div>
        </div>
    </div>
	</section>

	<section class="mbr-section content7 cid-rs1GAr6qBk" id="content7-o">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="media-content">
                        <div class="mbr-section-text">
						<?php
						$a1=mysql_query("select * from sejarah order by id desc limit 1");
							while($a=mysql_fetch_array($a1))
							{
							$text=$a['text'];
							$bg=$a['bg'];
							}
						echo"$text";
						?>
							
                        </div>
                    </div>

                    <div class="mbr-figure" style="width: 105%;">
                     <!--<img src="assets/images/cropped-dsc-2055-1012x559.jpg" alt="Mobirise" title=""> -->
					 <?php echo"<img src='$bg'>"; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
	</section>
	<?php
	}


function visi()
	{
	include 'inc/inc.php';
	?>
	<section class="mbr-section content5 cid-rs5SVL0d7A mbr-parallax-background" id="content5-17">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    VISI MISI</h2>
            </div>
        </div>
    </div>
	</section>

	<section class="mbr-section article content9 cid-rs5T14fBsX" id="content9-18">
    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
			<?php
			$a1=mysql_query("select * from visimisi order by id desc limit 1");
			while($a=mysql_fetch_array($a1))
				{
				$text=$a['text'];
				}
			echo"$text";
			?>

            <hr class="line" style="width: 25%;">
			</div>
		</div>
	</div>
	</section>
	<?php
	}

function sambutan()
	{
	include 'inc/inc.php';
	?>
	<section class="mbr-section content5 cid-rs5Rxz0kuH mbr-parallax-background" id="content5-13">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Sambutan</h2>
            </div>
        </div>
    </div>
	</section>

	<section class="testimonials3 cid-rs5S0berDd" id="testimonials3-16">
    <div class="container">
        <div class="media-container-row">
            <div class="media-content px-3 align-self-center mbr-white py-2">
            <?php
			$a1=mysql_query("select * from jajaran where jabatan like '%kepala sekolah%'  order by id desc limit 1");
			while($a=mysql_fetch_array($a1))
				{
				$img=$a['img'];
				$nama=$a['nama'];
				}
			$b1=mysql_query("select * from kepsek order by id desc limit 1");
			while($b=mysql_fetch_array($b1))
				{
				$sambutan=$b['sambutan'];
				//$bg=$a['bg'];
				}
				
				?>

				 <p class="mbr-text testimonial-text mbr-fonts-style display-7"><br><?php echo $sambutan; ?>
				<br>
				<br></p>
                <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                   <?php echo $nama; ?></p>
                <p class="mbr-author-desc mbr-fonts-style display-7">
                   Kepala Sekolah&nbsp;</p>
            </div>

            <div class="mbr-figure pl-lg-5" style="width: 120%;">
              <img src="<?php echo"$img"; ?>" alt="" title="">
            </div>
        </div>
    </div>
	</section>
	<?php
	}


function jajaran()
	{
	include 'inc/inc.php';
	?>
	<section class="mbr-section content5 cid-rs5VuK7paA mbr-parallax-background" id="content5-1b">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Jajaran&nbsp;</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Terdiri dari Kepala Sekolah, Guru, Humas, Wakil Kepala Sekolah dan Petugas</h3>
            </div>
        </div>
    </div>
	</section>

	<section class="team1 cid-rs5VC437fg" id="team1-1c">
    
    <div class="container align-center">
        <div class="row media-row">   
			<div class="team-item col-lg-3 col-md-6">
                
				<?php
				$a1=mysql_query("select * from kepsek order by id desc limit 1");
				while($a=mysql_fetch_array($a1))
					{
					$namakepsek=$a['nama'];
					//$jabatankepsek=$a['jabatan'];
					$imgkepsek=$a['img'];
					}
				?>
				<div class="item-image">
                    <img src="<?php echo $imgkepsek; ?>" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5"><?php echo $namakepsek; ?></p>
                    </div>
                    <div class="item-role px-2">
                        <p>KEPALA SEKOLAH</p>
                    </div>
                    
                </div>
            </div>
		</div>    
    </div>
	</section>

	<section class="team1 cid-rs5WapjZ7G" id="team1-1d">
    <div class="container align-center">
        <div class="row media-row">
			<?php
			$b1=mysql_query("select * from jajaran where jabatan like '%WAKA%'");
			while($b=mysql_fetch_array($b1))
				{
				echo"
				<div class='team-item col-lg-3 col-md-6'>
					<div class='item-image'>
                    <img src='$b[img]' alt='' title=''>
					</div>
                <div class='item-caption py-3'>
                    <div class='item-name px-2'>
                    <p class='mbr-fonts-style display-5'>$b[nama]</p>
                    </div>
                    <div class='item-role px-2'>
                        <p>$b[jabatan]</p>
                    </div>        
                </div>
            </div>
				";
				}

			
			$c1=mysql_query("select * from jajaran where jabatan not like '%WAKA%' and jabatan !='KEPALA SEKOLAH' ");
			while($c=mysql_fetch_array($c1))
				{
				echo"
				<div class='team-item col-lg-3 col-md-6'>
					<div class='item-image'>
                    <img src='$c[img]' alt='' title=''>
					</div>
                <div class='item-caption py-3'>
                    <div class='item-name px-2'>
                    <p class='mbr-fonts-style display-5'>$c[nama]</p>
                    </div>
                    <div class='item-role px-2'>
                        <p>$c[jabatan]</p>
                    </div>        
                </div>
            </div>
				";
				}
			?>
			
			
		</div>    
    </div>
	</section>

	<?php
	}

function berita()
	{
	include 'inc/inc.php';
	?>
	
	<section class="mbr-section content5 cid-rs5O2AOW5U mbr-parallax-background" id="content5-z">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Berita</h2>
            </div>
        </div>
    </div>
	</section>
	
	<?php
	$sectiona="<section class='features17 cid-rs5ObOn4di' id='features17-11'>
			<div class='container-fluid'>
				<div class='media-container-row'>";
	$sectionb="</div>
			</div>
			</section>";
	$max=mysql_query("select count(id) as num from berita");
	$a1=mysql_query("select * from berita where status='1' order by id DESC");
	$no=1;
	while($a=mysql_fetch_array($a1))
		{
		$nox=$no+2;
		if($nox%3==0)
			{
			echo"$sectiona";
			}
		else
			{echo"";}
		
		echo"
		<div class='card p-3 col-12 col-md-6 col-lg-4'>
			<div class='card-wrapper'>
				<div class='card-img'>
				<img src='$a[img]' alt='Mobirise' title=''>
                    </div>
                    <div class='card-box'>
                        <h4 class='card-title pb-3 mbr-fonts-style display-7'><a href='index.php?load=detberita&id=$a[id]'>$a[judul]</a></h4>
                        <p class='mbr-text mbr-fonts-style display-7'>
						".substr($a['text'],0,100)." ...
                        </p>
                    </div>
                </div>
            </div>
		";

		if($no%3==0 or $no==$count)
			{
			echo"$sectionb";
			}
		else
			{echo"";}
		$no++;
		}
	}


function detberita()
	{
	include 'inc/inc.php';
	$id=$_GET['id'];
	$a1=mysql_query("select * from berita where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		}
	?>
	<section class="mbr-section content5 cid-rs5O2AOW5U mbr-parallax-background" id="content5-z">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Detail Berita</h2>
            </div>
        </div>
    </div>
	</section>
	
	<section class="mbr-section content4 cid-rs6d6Tp2ok" id="content4-1o">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5">
                <?php echo $judul; ?>
				</h2>
            </div>
        </div>
    </div>
	</section>

	<section class="cid-rs6bLMBfae" id="image1-1l">
    <figure class="mbr-figure container">
        <div class="image-block" style="width: 66%;">
            <img src="<?php echo $img; ?>" width="1400" alt="Mobirise" title="">
        </div>
    </figure>
	</section>

	<section class="mbr-section article content1 cid-rs6bWPs5WB" id="content1-1m">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p><span style="font-size: 1rem;">
			<?php echo $text; ?>
			</span></p>

			<a href="index.php?load=berita"><i class='fa fa-arrow-circle-left'></i>[ Kembali ]</a>
			</div>
        </div>
    </div>
	</section>
	<?php
	}

function jurusan()
	{
	include('inc/inc.php');
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
	
	<section class="team1 cid-rs6655Ptlg" id="team1-1g">
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2"><?php echo $jurusan; ?></h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-7">
            Jurusan <?php echo $jurusan; ?> </h3>
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="<?php echo"$img"; ?>" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5"><?php echo $nama; ?></p>
                    </div>
                    <div class="item-role px-2">
                        <p>Kepala Program Studi</p>
                    </div>
                    
                </div>
            
			</div>
		</div>
    </div>
	
	<div class="container col-md-8">
	<div class="col-md-12">
		<p><?php echo $keterangan; ?></p>
		 </div>
	</div>
	</section>
	
	
	<?php
	}

function jurtatabusana()
	{
	?>
	<section class="engine"><a href="https://mobirise.info/h">how to create a web page for free</a></section><section class="team1 cid-rs6655Ptlg" id="team1-1g">
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">Program Studi Tata Busana</h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-7">
            Program Tata Busana merupakan program favorit di Sekolah ini</h3>
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/irongirls-376x405.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">Jamilah S.Pd</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Kepala Program Studi</p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
	</section>

	<section class="tabs4 cid-rs67pknG1J" id="tabs4-1i">
    <div class="container">
        <div class="media-container-row mt-5 pt-3">
            <div class="mbr-figure" style="width: 52%;">
                <img src="assets/images/tik-1-600x400.jpg" alt="Mobirise" title="">
            </div>
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs4-1i_tab0" aria-selected="true">
                            PROGRAM</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs4-1i_tab1" aria-selected="true">
                            MATA PELAJARAN</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Program dari Program Studi Multimedia di tujukan khusus industri yang nanti nya siap kerja dan memiliki karakter khusus serta mendalami dunia desain, visual, art dll.<br><br>Program Multimedia sangat cocok untuk era saat ini dimana sangat di butuhkan di hampir semua industri . dalam revolusi industri 4.0 salah satu Profesi yang tetap di butuhkan selama 10 tahun yang akan datang adalah Desain Grafis, Visual Art dll.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Berikut Mata pelajaran yang akan di pelajari oleh siswa Siswi :<br>1. Multimedia Dasar<br>2. Graphic Desain<br>3. Visual Audio<br>4. Desain komunikasi Visual<br>5. Video Editing<br>6. Film Production</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Sites made with Mobirise are 100% mobile-friendly according the latest Google Test and Google loves those websites (officially)!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Mobirise themes are based on Bootstrap 3 and Bootstrap 4 - most powerful mobile first framework. Now, even if you're not code-savvy, you can be a part of an exciting growing bootstrap community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
	<?php
	}

function jurperhotelan()
	{
	?>
	<section class="engine"><a href="https://mobirise.info/h">how to create a web page for free</a></section><section class="team1 cid-rs6655Ptlg" id="team1-1g">
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">Program Studi Perhotelan</h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-7">
            Program Perhotelan merupakan program favorit di Sekolah ini</h3>
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/irongirls-376x405.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">Jamilah S.Pd</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Kepala Program Studi</p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
	</section>

	<section class="tabs4 cid-rs67pknG1J" id="tabs4-1i">
    <div class="container">
        <div class="media-container-row mt-5 pt-3">
            <div class="mbr-figure" style="width: 52%;">
                <img src="assets/images/tik-1-600x400.jpg" alt="Mobirise" title="">
            </div>
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs4-1i_tab0" aria-selected="true">
                            PROGRAM</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs4-1i_tab1" aria-selected="true">
                            MATA PELAJARAN</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Program dari Program Studi Multimedia di tujukan khusus industri yang nanti nya siap kerja dan memiliki karakter khusus serta mendalami dunia desain, visual, art dll.<br><br>Program Multimedia sangat cocok untuk era saat ini dimana sangat di butuhkan di hampir semua industri . dalam revolusi industri 4.0 salah satu Profesi yang tetap di butuhkan selama 10 tahun yang akan datang adalah Desain Grafis, Visual Art dll.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Berikut Mata pelajaran yang akan di pelajari oleh siswa Siswi :<br>1. Multimedia Dasar<br>2. Graphic Desain<br>3. Visual Audio<br>4. Desain komunikasi Visual<br>5. Video Editing<br>6. Film Production</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Sites made with Mobirise are 100% mobile-friendly according the latest Google Test and Google loves those websites (officially)!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Mobirise themes are based on Bootstrap 3 and Bootstrap 4 - most powerful mobile first framework. Now, even if you're not code-savvy, you can be a part of an exciting growing bootstrap community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
	<?php
	}

function jurkecantikan()
	{
	?>
	<section class="engine"><a href="https://mobirise.info/h">how to create a web page for free</a></section><section class="team1 cid-rs6655Ptlg" id="team1-1g">
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">Program Studi Kecantikan</h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-7">
            Program Studi Kecantikan merupakan program favorit di Sekolah ini</h3>
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/irongirls-376x405.jpg" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">Jamilah S.Pd</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Kepala Program Studi</p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
	</section>

	<section class="tabs4 cid-rs67pknG1J" id="tabs4-1i">
    <div class="container">
        <div class="media-container-row mt-5 pt-3">
            <div class="mbr-figure" style="width: 52%;">
                <img src="assets/images/tik-1-600x400.jpg" alt="Mobirise" title="">
            </div>
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs4-1i_tab0" aria-selected="true">
                            PROGRAM</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs4-1i_tab1" aria-selected="true">
                            MATA PELAJARAN</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Program dari Program Studi Multimedia di tujukan khusus industri yang nanti nya siap kerja dan memiliki karakter khusus serta mendalami dunia desain, visual, art dll.<br><br>Program Multimedia sangat cocok untuk era saat ini dimana sangat di butuhkan di hampir semua industri . dalam revolusi industri 4.0 salah satu Profesi yang tetap di butuhkan selama 10 tahun yang akan datang adalah Desain Grafis, Visual Art dll.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Berikut Mata pelajaran yang akan di pelajari oleh siswa Siswi :<br>1. Multimedia Dasar<br>2. Graphic Desain<br>3. Visual Audio<br>4. Desain komunikasi Visual<br>5. Video Editing<br>6. Film Production</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Sites made with Mobirise are 100% mobile-friendly according the latest Google Test and Google loves those websites (officially)!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Mobirise themes are based on Bootstrap 3 and Bootstrap 4 - most powerful mobile first framework. Now, even if you're not code-savvy, you can be a part of an exciting growing bootstrap community.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
	<?php
	}


function pengumuman()
	{
	include 'inc/inc.php';
	?>
	
	<section class="mbr-section content5 cid-rs5InHdEzr mbr-parallax-background" id="content5-r">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Pengumuman</h2>  
            </div>
        </div>
    </div>
	</section>
	<?php
	$sectiona="<section class='features13 cid-rs5IwW2hUU' id='features13-s'>
    <div class='container'>
        <div class='media-container-row'>";
	$sectionb="</div>
    </div>
	</section>";
	$max=mysql_query("select count(id) as num from informasi2");
	while($maxi=mysql_fetch_array($max))
		{$count=$maxi['num'];}
	$a1=mysql_query("select * from informasi2 order by id DESC");
	$no=1;
	while($a=mysql_fetch_array($a1))
		{
		$nox=$no+2;
		if($nox%3==0)
			{
			echo"$sectiona";
			}
		else
			{echo"";}

		echo"
		<div class='card col-12 col-md-6 align-center col-lg-4'>
                <a href='index.php?load=detpengumuman&id=$a[id]'>
				<div class='card-wrap'>
                    <div class='card-img'>
                        <img src='$a[img]' alt='Mobirise' title=''>
                    </div>
                    <div class='card-box p-5'>
                        <h4 class='card-title py-2 mbr-fonts-style align-center mbr-white display-5'>
                            $count $a[judul]</h4>
                        <p class='mbr-text mbr-fonts-style mbr-white display-7'>".substr($a['text'],0,100).	
						" ...</p>
                    </div>
                </div>
				</a>
            </div>
		";

		if($no%3==0 or $no==$count)
			{
			echo"$sectionb";
			}
		else
			{echo"";}
		$no++;
		}
	?>
	
	<?php
	}

function detpengumuman()
	{
	include 'inc/inc.php';
	$id=$_GET['id'];
	$a1=mysql_query("select * from informasi2 where id='$id'");
	while($a=mysql_fetch_array($a1))
		{
		$judul=$a['judul'];
		$text=$a['text'];
		$img=$a['img'];
		}
	?>
	<section class="mbr-section content5 cid-rs5InHdEzr mbr-parallax-background" id="content5-r">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Detail Pengumuman</h2>  
            </div>
        </div>
    </div>
	</section>
	
	<section class="mbr-section content4 cid-rs6d6Tp2ok" id="content4-1o">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5">
                <?php echo $judul; ?>
				</h2>
            </div>
        </div>
    </div>
	</section>

	<section class="cid-rs6bLMBfae" id="image1-1l">
    <figure class="mbr-figure container">
        <div class="image-block" style="width: 66%;">
            <img src="<?php echo $img; ?>" width="1400" alt="Mobirise" title="">
        </div>
    </figure>
	</section>

	<section class="mbr-section article content1 cid-rs6bWPs5WB" id="content1-1m">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p><span style="font-size: 1rem;">
			<?php echo $text; ?>
			</span></p>

			<a href="index.php?load=pengumuman"><i class='fa fa-arrow-circle-left'></i>[ Kembali ]</a>
			</div>
        </div>
    </div>
	</section>
	<?php
	}



function galery()
	{
	include 'inc/inc.php';
	@ini_set('display_errors', 'off');
	?>
	
	
	<section class="mbr-section content5 cid-rs5Mii8c0B mbr-parallax-background" id="content5-x">
	
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                Galeri</h2>
            </div>
        </div>
    </div>
	</section>

	<section class="mbr-gallery mbr-slider-carousel cid-rs5Mqkflzv" id="gallery2-y">
    <div>
        <div><!-- Filter -->
			<div class="mbr-gallery-filter container gallery-filter-active">
			<ul buttons="0">
			<li class="mbr-gallery-filter-all">
			<a class="btn btn-md btn-primary-outline active display-7" href="">All
			</a>
			</li>
			</ul>
			</div><!-- Gallery -->
			
			<div class="mbr-gallery-row">
				<div class="mbr-gallery-layout-default">
					<div>
						<div>
							<?php 
							$a1=mysql_query("select kategori_galeri.*, galeri.* from kategori_galeri left join galeri on kategori_galeri.id=galeri.kat order by galeri.id desc");
							$no=0;
							while($a=mysql_fetch_array($a1))
								{?>
								<div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="<?php echo $a['kategori'];?>">
									<div href="#lb-gallery2-y" data-slide-to="<?php echo"$no"; ?>" data-toggle="modal">
									<img src="<?php echo"$a[img]"; ?>" alt="<?php echo"$a[judul]"; ?>" title="<?php echo"$a[judul]"; ?>">
									<span class='icon-focus'></span>
									</div>
								</div>
								<?php
								$no++;
								}

							?>
							
						</div>
					</div>
						
					<div class="clearfix">
					</div>
				</div>
			</div><!-- Lightbox -->
			
			<div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-y">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="carousel-inner">	
								
								<?php
								//$b1=mysqli_query($conn,"select * from galeri where kat !=0 order by kat,id ASC");
								$b1=mysql_query("select kategori_galeri.*, galeri.* from kategori_galeri left join galeri on kategori_galeri.id=galeri.kat order by galeri.id desc");
								while($b=mysql_fetch_array($b1))
									{
									echo"
									<div class='carousel-item'>
									<img src='$b[img]' alt='$b[judul]' title='$b[judul]'>
									</div>
									";
									}
								
								$bb1=mysql_query("select kategori_galeri.*, galeri.* from kategori_galeri left join galeri on kategori_galeri.id=galeri.kat order by galeri.id asc limit 1");
								while($bb=mysql_fetch_array($bb1))
									{
									echo"
									<div class='carousel-item active'>
									<img src='$bb[img]' alt='$bb[judul]' title='$bb[judul]'>
									</div>
									";
									}

								?>
								

							</div>
							
							<a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-y">
							<span class="mbri-left mbr-iconfont" aria-hidden="true">
							</span>
							<span class="sr-only">Previous</span>
							</a>
							
							<a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-y">
							<span class="mbri-right mbr-iconfont" aria-hidden="true">
							</span>
							<span class="sr-only">Next</span></a>
							<a class="close" href="#" role="button" data-dismiss="modal">
							<span class="sr-only">Close</span>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

	</section>
	
	<?php
	}

function kontak()
	{
	include ('layout/sekolah.php');
	if(isset($_GET['hit'])==1)
		{$hidden='';}
	else
		{$hidden="hidden='hidden'";}

	

	?>
	<section class="engine"><a href="https://mobirise.info/o">free portfolio website templates</a></section>
	<section class="mbr-section content5 cid-rs5HOeDyzi mbr-parallax-background" id="content5-q">
	
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Kontak</h2>
            </div>
        </div>
    </div>
	</section>

	<section class="mbr-section form4 cid-rs5HAWbd4T" id="form4-p">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&amp;q=place_id:ChIJyyr7R9_71y0RDWobJIPfIJI" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2"><?php echo $namaskol; ?> </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7"><?php echo" $alamatskol, $kabupatenskol ";?></h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">Phone: <?php echo $telpskol; ?>
						<br>Email: <?php echo $emailskol; ?></p>
                    </div>
                </div>
                <div>
                    <!---Formbuilder Form--->
                    <form action="index.php?load=skontak" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                        <div class="row">
                            <div <?php echo"$hidden"; ?> data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden='hidden' data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-p">
                            </div>
                            <div class="col-md-6  form-group" data-for="phone">
                                <input type="text" name="phone" placeholder="Phone" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-p">
                            </div>
                            <div data-for="email" class="col-md-12  form-group">
                                <input type="text" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="" id="email-form4-p">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-form4-p"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
	</section>

	<?php
	}

function skontak()
	{
	include 'inc/inc.php';
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	$email=$_POST['email'];
	$a=mysql_query("insert into kontak values ('', '$name', '$phone', '$email', '$message')");
	if($a)
		{
		header('location: index.php?load=kontak&hit=1');
		}
	else
		{
		header('location: index.php?load=kontak');
		}
	}

}

?>
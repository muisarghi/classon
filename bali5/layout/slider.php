<!-- hero area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
		<?php
		include 'inc/inc.php';
		$slides=mysql_query("select * from banner order by tgl desc");
		$slideno=1;
		while($slide=mysql_fetch_array($slides))
			{
			echo"
			<img src='$slide[img]' alt='' title='#slider-direction-$slide[id]' />
			";
			$slideno++;
			}
		//<img src="images/galeri/skola_2.jpg" alt="" title="#slider-direction-1" />
        //<img src="images/galeri/galeri_10.jpg" alt="" title="#slider-direction-2" />
		?>
        
      </div>
	<?php
	$slidesb=mysql_query("select * from banner order by tgl desc");
	while($slideb=mysql_fetch_array($slidesb))
		{
		echo"
		<div id='slider-direction-$slideb[id]' class='slider-direction slider-one'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						<div class='slider-content'>
							<div class='layer-1-1 hidden-xs wow slideInDown' data-wow-duration='2s' data-wow-delay='.2s'>
							<h2 class='title1'>$slideb[title]</h2>
							</div>
					
							<div class='layer-1-2 wow slideInUp' data-wow-duration='2s' data-wow-delay='.1s'>
							<h1 class='title2'>$slideb[text]</h1>
							</div>
                
							<div class='layer-1-3 hidden-xs wow slideInUp' data-wow-duration='2s' data-wow-delay='.2s'>
							<a class='ready-btn page-scroll' href='#info'>Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		";
		}

		/*
      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">SMA Paling Negeri </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">di Indonesia</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  */?>



    </div>
  </div>
 </div>
 <section class="text-center mt-4">
	  <a href="index.php?load=BUKUTAMU" class="btn btn-primary btn-lg">Buku Tamu</a>
	</section>
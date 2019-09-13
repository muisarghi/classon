<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix slider-area">
    <div class="bend niceties preview-2">

      <!-- <div class="intro-img text-center">
        <img src="img/galeri/tutwuri.png" class="img-fluid rounded-circle">
      </div> -->
      <div id="ensign-nivoslider" class="slides">
	  <?php 
	  include('inc/inc.php');
		$slids=mysql_query("select * from banner order by id desc");
		$no=1;
		while($slid=mysql_fetch_array($slids))
		{
		echo"
		<img src='$slid[img]' alt='' title='#slider-direction-$no' />
		";
		$no++;
		}
		/*
		<img src="img/galeri/galeri_3.jpg" alt="" title="#slider-direction-1" />
        <img src="img/galeri/galeri_10.jpg" alt="" title="#slider-direction-1" />
		*/
		?>
        
      </div>
		
		<?php
		$slidsb=mysql_query("select * from banner order by id desc");
		$no=1;
		while($slidb=mysql_fetch_array($slidsb))
		{
			echo"
	  <div id='slider-direction-$no' class='slider-direction slider-one'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-12 col-sm-12 col-xs-12'>
              <div class='slider-content text-center'>
               
                <div class='layer-1-1 hidden-xs wow slideInUp' data-wow-duration='2s' data-wow-delay='.2s'>
                  <h2 class='title1'>$slidb[title]</h2>
                </div>
                
                <div class='layer-1-2 wow slideInUp' data-wow-duration='2s' data-wow-delay='.1s'>
                  <h1 class='title2'>$slidb[text]</h1>
                </div>
                
                <div class='layer-1-3 hidden-xs wow slideInUp' data-wow-duration='2s' data-wow-delay='.2s'>
                  
				  <a href='#about' class='ready-btn right-btn page-scroll'>Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		";
		$no++;
		//<a class='ready-btn right-btn page-scroll' href='#services'>See Services</a>
		}
	  ?>

	

	<!--

	<div id="slider-direction-2" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">XXXXXXXXXx </h2>
                </div>
               
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">di Indonesia</h1>
                </div>
                
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	<div id='slider-direction-4' class='intro-info '>
        <h2>SMA Negeri Indonesia</h2>
        <h4 class="text-white mb-5">SMA Paling Negeri di Indonesia</h4>
        <div>
          <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>


	  <div id='slider-direction-2' class='slider-direction slider-one'>
        <h2>AAAAAAA</h2>
        <h4 class="text-white mb-5">SMA Paling AAAAAAA</h4>
        <div>
          <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>

	  <div id='slider-direction-3' class='slider-direction slider-one'>
        <h2>XXXXX</h2>
        <h4 class="text-white mb-5">SMA Paling XXXXXXXXX</h4>
        <div>
          <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>
		
		<!--
		<div id="slider-direction-2" class="intro-info" >
        <h2>SMA Negeri XXX</h2>
        <h4 class="text-white mb-5">SMA XXX</h4>
        <div>
          <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>

	  <div id="slider-direction-3" class="intro-info" >
        <h2>ZZZZZZZZZZZ</h2>
        <h4 class="text-white mb-5">ZZZZZZ</h4>
        <div>
          <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
      </div>
	-->

    </div>
  </section><!-- #intro -->
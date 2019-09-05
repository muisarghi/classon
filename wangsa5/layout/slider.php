<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    
	<?php
	include ('inc/inc.php');
	$slides=mysql_query("select * from banner order by id asc");
	//$no=1;
	while($slide=mysql_fetch_array($slides))
		{
		echo"
		<div class='slider-item slide1' style='background-image:url($slide[img])'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <div class='content style text-center'>
                        <h2 class='text-white text-bold mb-4'>$slide[title]</h2>
                        <p>$slide[text]</p>
                        <div class='mt-4'>
                            <a href='#tentang' class='btn btn-main btn-white mt-4'>explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		";	
		}
	/*
	<div class="slider-item slide1" style="background-image:url(images/slider/highschool.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-4">SMA Negeri Indonesia</h2>
                        <p></p>
                        <div class="mt-4">
                            <a href="#tentang" class="btn btn-main btn-white mt-4">explore</a>
                        </div>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item slide1" style="background-image:url(images/galeri/galeri_3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-4">SMA Paling Negeri</h2>
                        <p>di Indonesia</p>
                        <p></p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-main btn-white mt-4">explore</a>
                        </div>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
	*/
	?>

</div>

<!--====  End of Page Slider  ====-->
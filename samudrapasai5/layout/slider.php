<!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      
	<?php
	include('inc/inc.php');
	
	$slids=mysql_query("select * from banner order by id desc");
	while($slid=mysql_fetch_array($slids))
		{
		echo"
		<div class='carousel-item-a intro-item bg-image' style='background-image: url($slid[img])'>
			<div class='overlay overlay-a'>
			</div>
			
			<div class='intro-content display-table'>
				<div class='table-cell'>
					<div class='container'>
						<div class='row'>
							<div class='col-lg-8'>
								<div class='intro-body'>
								<p class='intro-title-top'>$slid[title]</p>
								<h1 class='intro-title mb-4'> $slid[text]</h1>
								<p class='intro-subtitle intro-price'>
								<a href='index.php?load=PROFILE'><span class='price-a'>Selengkapnya</span></a>
								</p>
								</div>
							</div>
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
  <!--/ Carousel end /-->
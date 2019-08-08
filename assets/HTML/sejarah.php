<?php
include 'inc/inc.php';
include 'layout/header.php';
?>

<section class="engine"><a href="https://mobirise.info/l">free website templates</a></section><section class="mbr-section content5 cid-rs1kDWtH51 mbr-parallax-background" id="content5-k">

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
						$a1=mysqli_query($conn,"select * from sejarah where id='1'");
							while($a=mysqli_fetch_array($a1))
							{
							$text=$a['text'];
							}
						echo"$text";
						?>
							
                        </div>
                    </div>

                    <div class="mbr-figure" style="width: 105%;">
                     <img src="assets/images/cropped-dsc-2055-1012x559.jpg" alt="Mobirise" title="">  
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'layout/footer.php';
?>
<?php
include 'inc/inc.php';
include 'layout/header.php';
?>

<section class="engine"><a href="https://mobirise.info/l">free website templates</a></section><section class="mbr-section content5 cid-rs1kDWtH51 mbr-parallax-background" id="content5-k">

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
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-10">
			
			
			<?php
			$a1=mysqli_query($conn,"select * from profile order by id desc limit 1");
				while($a=mysqli_fetch_array($a1))
				{
				$profile_pjg=$a['profile_panjang'];
				}
			echo"$profile_pjg";
			?>
			
            </div>
        </div>
    </div>
</section>



<?php
include 'layout/footer.php';
?>
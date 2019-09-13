
  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <img src="img/tutwuri.png" class="tutwuri rounded-circle mb-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand"><?php echo $namaskol; ?></h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                <?php echo"$alamatskol, $kabupatenskol"; ?><br />
                (<?php echo $kodeposskol;?>)
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Info Kontak</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <div class="w-footer-a">
                  <ul class="list-unstyled">
                    <li class="color-a"><span class="color-text-a"><i class="fas fa-envelope"></i> &nbsp; Email :</span> <?php echo $emailskol; ?></li>
                    <li class="color-a"><span class="color-text-a"><i class="fas fa-phone"></i> &nbsp; Phone :</span> <?php echo $telpskol; ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="index.php?load=PROFILE">Profile</a>
              </li>
              <li class="list-inline-item">
                <a href="index.php?load=BERITA">Berita</a>
              </li>
              <li class="list-inline-item">
                <a href="index.php?load=INFORMASI">Informasi</a>
              </li>
              <li class="list-inline-item">
                <a href="index.php?load=BUKUTAMU">Kontak</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="<?php echo $fb_pathskol; ?>">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo $instagram_pathskol; ?>">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
			  <!--
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
			  -->
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a"><?php echo $footerskol; ?></span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
			  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            -->
            
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <script src="lib/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
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
	
	<!--
	<script>
	$(".carousel-item").owlCarousel({
    items: 8,
    dots: true,
    responsive:{
        0:{
            items:1,
            mouseDrag: true,
            touchDrag: true
        },
        480:{
            items:1,
            mouseDrag: true,
            touchDrag: true
        },
        750:{
            items:1,
            mouseDrag: true,
            touchDrag: true
        },
        1000:{
            items:1,
            dots: false,
            nav: false,
            mouseDrag: false,
            touchDrag: false
        }
    }
});
	</script>-->
	
</body>
</html>
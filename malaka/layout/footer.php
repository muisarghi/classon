 <!--==========================
  Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
			<h2><?php echo $namaskol; ?></h2>
			<img src="<?php echo $logoskol; ?>" class="rounded-circle tutwuri">
            <p>
			<?php
			echo"$alamatskol, $kabupatenskol <br>$provinsiskol ($kodeposskol)";		
			?>
			</p>
          </div>

          <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Info Kontak</h4>
            <p>
              <strong>Phone:</strong> <?php echo $telpskol; ?><br>
              <strong>Email:</strong> <?php echo $emailskol; ?><br>
            </p>

            <div class="social-links">
              <a href="<?php echo ""; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="<?php echo "$fb_pathskol"; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="<?php echo "$instagram_pathskol"; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
              <!--
			  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
			  -->
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><?php echo $namaskol; ?></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
		  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

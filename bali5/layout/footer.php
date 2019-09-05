<!-- footer -->
<section class="section bg-dark" id="footer">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="container text-light">
            <div class="row">
              <div class="col-md-3">
                <img src="<?php echo $logoskol;?>" style="width: 100%" class="rounded-circle">
              </div>
              <div class="col md-9">
                <span class="text-white"><?php echo $namaskol; ?></span>
                <p class="text-light">
                  <?php
				  echo"$alamatskol, $kecamatanskol
				  <br>
				  $kabupatenskol, $provinsiskol ($kodeposskol)
				  ";
				  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="container text-light">
            <span class="text-white">INFO KONTAK</span>
            <p class="text-light">
              Telp : <?php echo"$telpskol";?><br />
              Email : <?php echo"$emailskol"; ?>
            </p>
            <span class="text-white">IKUTI KAMI</span>
            <p class="text-light">
              <div class="social">
                <a href="<?php echo"$fb_pathskol"; ?>" target="_blank">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
              </div>
              <div class="social">
                <a href="<?php echo"$instagram_pathskol"; ?>" target="_blank">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
              </div>
              <div class="social">
                <a href="#">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">&copy; Copyright   <script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> <?php echo $footerskol; ?> by <a href="http://webtema.id">webtema.id</a></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/nivo-slider/js/jquery.nivo.slider.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
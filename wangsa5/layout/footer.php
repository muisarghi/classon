<?php //include 'inc/inc.php';
//include 'layout/sekolah.php';
?>
<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
                <img src="<?php echo $logoskol;?>" class="tutwuri">
                <figure>
                    <a href="index.php">
                    <h1 style="color: #fff;"><?php echo $namaskol; ?></h1>
                    </a>
                </figure>
            </div>
			<?php echo"<p>$alamatskol, $kabupatenskol, $provinsiskol</p>
			<p>($kodeposskol)</p>
			"; ?>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h6>Info Kontak</h6>
          <ul class="location-link">
            <li class="item">
                <i class="fas fa-envelope"></i>
                <p><?php echo $emailskol; ?></p>
            </li>
            <li class="item">
                <i class="fas fa-phone" aria-hidden="true"></i>
                <p><?php echo $telpskol; ?></p>
                </li>
            </ul>
            <ul class="list-inline social-icons">
                <li><a href="<?php echo $fb_pathskol;?>"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="<?php echo $instagram_pathskol;?>"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright <?php echo $footerskol; ?> 2018. All Rights Reserved by
          <a href="http://webtema.id">Webtema.ID</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fas fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>

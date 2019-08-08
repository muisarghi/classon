<!-- page title -->
<?php 
$load=ucfirst(strtolower($_GET['load'])); 
if($load=="Visi")
	{$loadb="Visi & Misi";}
elseif($load=="Sambutan")
	{$loadb="Sambutan Kepala Sekolah";}
elseif($load=="Jurrpl")
	{$loadb="RPL";}
elseif($load=="Detailberita")
	{$loadb="Detail Berita";}
elseif($load=="Detailinformasi")
	{$loadb="Detail Informasi";}
elseif($load=="Bukutamu")
	{$loadb="Buku Tamu";}
elseif($load=="Bukutamu2")
	{$loadb="Buku Tamu";}
	elseif($load=="Bukutamu3")
	{$loadb="Buku Tamu";}
else
	{$loadb=$load;}
?>
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary"><?php echo "$loadb"; ?></h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->
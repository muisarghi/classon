<!-- page title -->
<?php 
$load=ucfirst(strtolower($_GET['load'])); 
if($load=="Visi")
	{$loadb="Visi & Misi";}
elseif($load=="Profile")
	{$loadb="Profil Sekolah";}
elseif($load=="Sejarah")
	{$loadb="Sejarah Sekolah";}
elseif($load=="Tujuan")
	{$loadb="Tujuan Sekolah";}
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

<section class="page-title text-center" style="background-image:url(img/galeri/skola.jpg);">
    <div class="container">
        <div class="title-text">
            <h1><?php echo $loadb; ?></h1>
        </div>
    </div>
</section>
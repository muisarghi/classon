<?php
ob_start();
//include 'inc/inc.php';
include('function.php');

$load=$_GET['load'];

	switch($load)
	{
	case 'index':
	on::index($option);
	break;
	case 'profil':
	on::profil($option);
	break;
	case 'sejarah':
	on::sejarah($option);
	break;
	case 'visi':
	on::visi($option);
	break;
	case 'sambutan':
	on::sambutan($option);
	break;
	case 'jajaran':
	on::jajaran($option);
	break;
	case 'berita':
	on::berita($option);
	break;
	case 'detberita':
	on::detberita($option);
	break;
	case 'jurmultimedia':
	on::jurmultimedia($option);
	break;
	case 'jurtatabusana':
	on::jurtatabusana($option);
	break;
	case 'jurperhotelan':
	on::jurperhotelan($option);
	break;
	case 'jurkecantikan':
	on::jurkecantikan($option);
	break;
	case 'pengumuman':
	on::pengumuman($option);
	break;
	case 'detpengumuman':
	on::detpengumuman($option);
	break;
	case 'galery':
	on::galery($option);
	break;




	case 'kontak':
	on::kontak($option);
	break;
	case 'skontak':
	on::skontak($option);
	break;

	default:
	on::index($option);
	break;
	}	

?>
<?php
ob_start();
//include 'inc/inc.php';
include('function.php');

$load=$_GET['load'];
$loading=strtolower($load);
	switch($loading)
	{
	case 'index':
	on::index($option);
	break;
	case 'profile':
	on::profile($option);
	break;
	case 'sejarah':
	on::sejarah($option);
	break;
	case 'visi':
	on::visi($option);
	break;
	case 'tujuan':
	on::tujuan($option);
	break;
	case 'sambutan':
	on::sambutan($option);
	break;
	case 'jajaran':
	on::jajaran($option);
	break;
	case 'program':
	on::program($option);
	break;
	case 'berita':
	on::berita($option);
	break;
	case 'detailberita':
	on::detailberita($option);
	break;
	case 'informasi':
	on::informasi($option);
	break;
	case 'detailinformasi':
	on::detailinformasi($option);
	break;
	case 'galery':
	on::galery($option);
	break;
	case 'bukutamu':
	on::bukutamu($option);
	break;
	case 'bukutamu2':
	on::bukutamu2($option);
	break;
	case 'bukutamuc':
	on::bukutamuc($option);
	break;
	case 'bukutamu3':
	on::bukutamu3($option);
	break;
	

	case 'jurrpl':
	on::jurRPL($option);
	break;

	default:
	on::index($option);
	break;
	}	

?>
<?php
@ini_set('display_errors', 'off');

if(isset($_GET['load']))
	{
	include ('layout/header2.php');
	}
else
	{
	include ('layout/header.php');
	}
include 'layout/class.php';

include ('layout/footer.php');
?>
<?
	include 'settings.php';
	
	$_PATH_ = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$_PAGE_ = $_GET['page'];

	include 'functions/functions.php';
	include 'functions/autorize.php';

	$logged = autorizeCheck();
	if ($_GET['emergence']) { emergence(); }

	include 'modules/main.php';
?>
<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	echo $_SERVER['SERVER_NAME'];
	// if ($_SERVER['SERVER_NAME']=='localhost' . dirname($_SERVER['PHP_SELF']);) {
	// 	header('Location: '.$uri.'/02prove/home.php');
	// }
	// elseif ($_SERVER['SERVER_NAME']=='infinite-river-43265.herokuapp.com') {
	// 	header('Location: '.$uri.'/cs313_php/web/02prove/home.php');
	// }
	// exit;
?>
	Something is wrong with the XAMPP installation :-(
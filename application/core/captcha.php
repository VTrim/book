<?php
session_start();

    $symbols = 'qwertyuiopasdfghjklzxcvbnm1234567890';
	$length = strlen($symbols)-1;
	$string = null;
	for ($i = 0; $i < 5; $i++)
		$string .= $symbols[mt_rand(0, $length)];

	$_SESSION['rand_code'] = $string;

	$image = imagecreatetruecolor(170, 60);
	$black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, 200, 100, 90);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext ($image, 30, 0, 10, 40, $color, "verdana.ttf", $_SESSION['rand_code']);

header("Content-type: image/png");
imagepng($image);
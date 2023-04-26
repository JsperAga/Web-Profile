<?php
session_start();

// Generate a random code
$length = 6; // The length of the code
$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$code = $_GET['code'];
// for ($i = 0; $i < $length; $i++) {
//     $code .= $characters[rand(0, strlen($characters) - 1)];
// }

// Save the code to the session
$_SESSION['captcha_code'] = $code;

// Generate the image
$image = imagecreatetruecolor(100, 30);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 0, 0, 100, 30, $bg_color);
imagestring($image, 5, 20, 8, $code, $text_color);
header('Content-type: image/png');
echo imagepng($image);
imagedestroy($image);
?>
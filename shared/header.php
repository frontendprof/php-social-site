<?php
	if(!isset($title)){
		$title="Instagram";
		$keywords="Instagram, capture worlds moments, and share with your friends and people around. ";
	}
	
	$desc= "Instagram lets you capture, follow, like and share moments in a better way and tell your story with photos to the world";
	$author="Abdumalik Sharipov";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="public/assets/images/favicon/instagram.ico" type="image/x-icon">
	<link rel="stylesheet" href="public/css/register.css">
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $keywords; ?>">
	<meta name="description" content="<?= $desc; ?>">
	<meta name="author" content="<?= $author; ?>">



</head>
<body>
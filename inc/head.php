<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<? include('inc/geral.php'); ?>
	<? include('inc/jquery.php'); ?>
	<script src="<?=$url?>js/vendor/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" type='text/css' href="css/normalize.css">
	<link rel="stylesheet" type='text/css' href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> -->
	<!-- MENU  MOBILE -->
	<script  src="<?=$url?>js/jquery.slicknav.js"></script>
	<!-- /MENU  MOBILE -->
	<title>RecordTV</title>
	<base href="<?=$url?>">
	<meta name="description" content="<?=ucfirst($desc)?>">
	<meta name="keywords" content="<?=str_replace($prepos,', ', $h1).', '.$nomeSite?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="geo.position" content="<?=$latitude.";".$longitude?>">
	<meta name="geo.placename" content="<?=$cidade."-".$UF?>">
	<meta name="geo.region" content="<?=$UF?>-BR">
	<meta name="ICBM" content="<?=$latitude.";".$longitude?>">
	<meta name="robots" content="index,follow">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<link rel="canonical" href="<?=$url.$urlPagina?>">
	<?php
	if ( $author == '')
	{
	echo '<meta name="author" content="'.$nomeSite.'">';
	}
	else
	{
	echo '<link rel="author" href="'.$author.'">';
	}
	?>
	
	<link rel="shortcut icon" href="<?=$url?>imagens/favicon.png">
	
	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?=$title." - ".$nomeSite?>">
	<meta property="og:type" content="article">
	<?php
	if (file_exists($url.$pasta.$urlPagina."-01.jpg")) {
	?>
	<meta property="og:image" content="<?=$url.$pasta.$urlPagina?>-01.jpg">
	<?php
	}
	?>
	<meta property="og:url" content="<?=$url.$urlPagina?>">
	<meta property="og:description" content="<?=$desc?>">
	<meta property="og:site_name" content="<?=$nomeSite?>">
	<?php
	if ($idFacebook <> '')
	{
	echo '<meta property="fb:admins" content="'.$idFacebook.'">';
	}
	?>
	<!-- Desenvolvido por <?=$creditos." - ".$siteCreditos?> -->
		<script>
	$(document).ready(function(){
	var altura = document.getElementById('scrollheader');
	if (altura === null) {
	}
	else {
	// altura = altura.offsetHeight;
	window.onscroll = function() {Scroll()};
	function Scroll() {
	if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
	document.getElementById("scrollheader").className = "topofixo";
	document.getElementById("header-block").style.display = "block";
	document.getElementById("header-block").style.height = altura+"px";
	} else {
	document.getElementById("scrollheader").className = "";
	document.getElementById("header-block").style.display = "none";
	}
	}
	}
	});
	</script>
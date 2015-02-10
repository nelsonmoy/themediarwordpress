<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>DIAR - Renta y Venta de inmuebles</title>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css" />
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script type="text/javascript">
		$(function(){
	      $("#slideshow").slidesjs({
	      	width: 900,
	        height: 400,
	        navigation: false,
	        pagination: false,
	        play: {
		      active: false,
		        // [boolean] Generate the play and stop buttons.
		        // You cannot use your own buttons. Sorry.
		      effect: "slide",
		        // [string] Can be either "slide" or "fade".
		      interval: 5000,
		        // [number] Time spent on each slide in milliseconds.
		      auto: true,
		        // [boolean] Start playing the slideshow on load.
		      swap: true,
		        // [boolean] show/hide stop and play buttons
		      pauseOnHover: true,
		        // [boolean] pause a playing slideshow on hover
		      restartDelay: 2500
		        // [number] restart delay on inactive slideshow
		    }
	      });
	    });
	</script>
	<?php wp_head(); ?>
</head>
<body>
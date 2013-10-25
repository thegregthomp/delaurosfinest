<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

 <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/base.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
  <!--<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-responsive.min.css">-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css"/>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico"/>
  <!-- end CSS-->

  <script src="<?php bloginfo('template_url'); ?>/assets/js/libs/modernizr-2.0.6.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
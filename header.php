<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <meta name="copyright" content="&copy; 2014 Boston University">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" title="Main style" type="text/css" media="screen" charset="utf-8">
    <link rel="alternate" type="application/rss+xml" title="MET Health Informatics Research Lab RSS Feed" href="<?php echo get_template_directory_uri(); ?>/feed/"><!--css-->

    <script type="text/javascript">
    document.documentElement.className += 'has-js';
    </script>
    <script type='text/javascript' src='http://sites.bu.edu/met-hilab/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
    <script type='text/javascript' src='http://sites.bu.edu/met-hilab/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
    <script type='text/javascript' src='http://sites.bu.edu/met-hilab/wp-content/mu-plugins/bu-cms/interface/bu-ga.js?ver=3.6.1'></script>
    <link rel='canonical' href='http://sites.bu.edu/met-hilab/'>
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    
    <?php //wp_head(); ?>
</head>

<body class="med_2col_right med default home">


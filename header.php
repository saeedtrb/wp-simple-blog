<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?php echo ST_ASSETS_URL ?>/images/favicon.png" type="image/x-icon">
	<title><?php
	if (is_home()) {
	    echo bloginfo('name');
	    echo ' &raquo; ' . get_bloginfo ( 'description' );
	} elseif (is_404()) {
	    echo bloginfo('name');
	    echo ' &raquo; صفحه مورد نظر پيدا نشد';
	} elseif (is_category()) {
	    echo bloginfo('name');
	    echo ' &raquo; ' . 'دسته بندي '; wp_title('&raquo;', true, 'left');
	} elseif (is_search()) {
	    echo bloginfo('name');
	    echo ' &raquo; ' . 'نتايج جستجو براي  &raquo; "'; the_search_query(); echo '"';
	} elseif ( is_day() || is_month() || is_year() ) {
	  echo bloginfo('name');
	    echo ' &raquo; ' . 'آرشيو مطالب براي '; wp_title('', true, 'right');
	} else {
	    echo bloginfo('name');
	    echo wp_title('&raquo;', true, 'left');
	}
	?></title>
	<meta name="description" content="<?php echo get_bloginfo ( 'description' ) ?>">
	<meta name="author" content="">

	<meta property="og:site_name" content="<?php echo bloginfo('url') ?>">
	<meta property="og:locale" content="<?php language_attributes(); ?>">
	<meta property="og:type" content="profileir_prod:page">
	<meta property="og:url" content="<?php echo bloginfo('url') ?>">
	<meta property="og:title" content="<?php echo bloginfo('name') ?>">
	<meta property="og:description" content="<?php echo get_bloginfo ( 'description' ) ?>">
	<meta property="og:image:width" content="240">
	<meta property="og:image:height" content="240">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="<?php echo bloginfo('name') ?>">
	<meta name="twitter:url" content="<?php echo bloginfo('url') ?>">
	<meta name="twitter:title" content="<?php echo bloginfo('name') ?>">
	<meta name="twitter:description" content="<?php echo get_bloginfo ( 'description' ) ?>">
	<meta name="twitter:image:width" content="240">
	<meta name="twitter:image:height" content="240">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php echo ST_ASSETS_URL ?>/styles/style.css?ver=1.0.1">
</head>
<body <?php body_class(); ?>>
	<header class="text-center">
		<h1><?php echo bloginfo('name') ?> <small class="block padding-20"><?php echo bloginfo('description') ?></small></h1>
	</header>
	<!-- / End main header -->

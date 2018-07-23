<!DOCTYPE html>
<html>
<head>
	<title><?php if (is_front_page()): bloginfo('title'); else: wp_title(); endif; ?></title>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="http://www.oneheart-bg.org/wp-content/uploads/2016/02/favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="header">
            <div class="col-sm-5 col-md-4 col-lg-3 col-xl-2">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo1-159x25.png" alt="One Heart Logo" />
                </a>
            </div>
        </div>
        <div class="row" id="main">
            <div class="col-sm-12">

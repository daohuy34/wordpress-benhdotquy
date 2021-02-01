<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Toggle the visibility of content across your project with a few classes and our JavaScript plugins.">
    <meta name="generator" content="Jekyll v4.1.1">
    
    <meta name="docsearch:language" content="en">
    <meta name="docsearch:version" content="4.5">
    
    <meta name="author" content="Bệnh đột quỵ">
    <meta http-equiv="content-language" content="vi" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta name='COPYRIGHT' content='&copy; http://www.benhdotquy.net/' />
    <meta name="keywords" content="" />
    <meta property="og:title" content="website title" /> 
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:url" content="website link" /> 
    <meta property="og:image" content="image description" />
    <meta property="og:description" content="website description" /> 
    <meta property="og:site_name" content="website name" />
    <meta property="fb:admins" content="Facebook Admin ID page" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <title>Benhdotquy.net</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/components/collapse/">
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/benhdotquy.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mmenu.all.css" rel="stylesheet"/>
    
    <!-- Documentation extras -->
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-grid.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-reboot.css" rel="stylesheet"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/getting-started/download/">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@getbootstrap">
    <meta name="twitter:creator" content="@getbootstrap">
    <meta name="twitter:title" content="Collapse">
    <meta name="twitter:description" content="Toggle the visibility of content across your project with a few classes and our JavaScript plugins.">
    <meta name="twitter:image" content="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-social-logo.png">
    
    <!-- Facebook -->
    <meta property="og:url" content="https://getbootstrap.com/docs/4.5/components/collapse/">
    <meta property="og:title" content="Collapse">
    <meta property="og:description" content="Toggle the visibility of content across your project with a few classes and our JavaScript plugins.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/style.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mmenu.min.all.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.matchHeight.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-146052-10', 'getbootstrap.com');
      ga('set', 'anonymizeIp', true);
      ga('send', 'pageview');
    </script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
</head>

<body <?php body_class(); ?>>
<header>
    <nav class="navbar nav-hdr">
    	<div class="container-fluid">
        	<div class="d-flex flex-nowrap w-100">
            	<div class="icon-menu dropdown">
                	<a href="#menu"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1-menu.png"></a> 
                </div>
                <div class="logo-header"><h1><a href="#"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-benhdotquy.net.png"/></a></h1></div>
                <ul class="menu-hdr  d-flex flex-nowrap">
                	<li class="nav-item col-md-auto active"><a href="#">Trang chủ</a></li>
                    <li class="nav-item col-md-auto"><a href="#">Tin tức</a></li>
                    <li class="nav-item col-md-auto"><a href="#">CLB Đột quỵ</a></li>
                    <li class="nav-item col-md-auto"><a href="#">Video</a></li>
                    <li class="nav-item col-md-auto"><a href="#">Podcast</a></li>
                    <li class="nav-item col-md-auto"><a href="#">Tư vấn</a></li>
                </ul>
                <div class="search-hdr ml-auto"><input type="text" autocomplete="off" name="s" ><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3-search.png"/></div>
            </div>
        </div>	
    </nav>
</header>

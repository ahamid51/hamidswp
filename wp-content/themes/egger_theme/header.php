<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
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
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/color-default.css" type="text/css" media="screen" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="http://code.jquery.com/ui/1.8.2/jquery-ui.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.onebyone.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<!-- H E A D E R -->
	<header class="">
        <div class="header_wrapper container">
            <a href="http://design.webgigs.in/demo/yellow/html/index.html" class="logo"><img src="YellowProject%20-%20HTML5&amp;CSS3%20business%20theme_files/logo.png" alt="" class="logo_def" height="43" width="222"><img src="YellowProject%20-%20HTML5&amp;CSS3%20business%20theme_files/logo_002.png" alt="" class="logo_retina" height="43" width="222"></a>
            <div class="slogan"><span><img src="YellowProject%20-%20HTML5&amp;CSS3%20business%20theme_files/seit.png" alt="SEIT | 1926"></span></div>
						<div class="top-phone">
							<div class="phn-ico pull-left"><img src="YellowProject%20-%20HTML5&amp;CSS3%20business%20theme_files/phn.jpg" alt="08031 7420"></div>
							<div class="phn-numb pull-right"><a href="tel:08031%207420">08031 7420</a></div>
						</div>
            <nav>
                <ul class="menu sf-js-enabled sf-shadow">
                    <li class="current-menu-parent has-menu level1"><a href="javascript:void(0)">Home</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li class="current-menu-item"><a href="http://design.webgigs.in/demo/yellow/html/index.html">Layout1</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/home2.html">Layout2</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/home3.html">Layout3</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li><a href="http://design.webgigs.in/demo/yellow/html/about.html">Elektroinstallationen</a><span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Features</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/typography.html">Typography</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/shortcodes.html">Shortcodes</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Automatisierung</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio1.html">1 Column</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio2.html">2 Columns</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio3.html">3 Columns</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio4.html">4 Columns</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio_post.html">Portfolio post</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a class="line-height" href="javascript:void(0)">Regenerative<br>Energiesysteme</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/blog_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/blogpost_full.html">Blog post</a></li>
                            <li class="has-menu level2"><a href="javascript:void(0)">With sidebar</a>
                                <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                                    <li><a href="http://design.webgigs.in/demo/yellow/html/blog_left.html">Left sidebar</a></li>
                                    <li><a href="http://design.webgigs.in/demo/yellow/html/blog_right.html">Right sidebar</a></li>
                                    <li><a href="http://design.webgigs.in/demo/yellow/html/blogpost_sidebar.html">Blog post</a></li>
                                </ul>
                          </li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Kundendienst</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_sidebar.html">With sidebar</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
										<li class="has-menu level1"><a href="javascript:void(0)">Über uns</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_sidebar.html">With sidebar</a></li>
                        </ul>
                    <span class="menu_marker"></span></li> 
										<li class="has-menu level1 last"><a href="javascript:void(0)">Kontakt</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_sidebar.html">With sidebar</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>                
                </ul><!-- .menu -->
            </nav>
            <nav class="mobile_header">
                <select id="mobile_select"></select>
            </nav>
        <a href="javascript:void(0)" class="menu_toggler"></a></div><!-- .header_wrapper -->
      <div class="clear"></div>
	<div class="mobile_menu_wrapper"><ul class="mobile_menu container">
                    <li class="current-menu-parent has-menu level1"><a href="javascript:void(0)">Home</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li class="current-menu-item"><a href="http://design.webgigs.in/demo/yellow/html/index.html">Layout1</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/home2.html">Layout2</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/home3.html">Layout3</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li><a href="http://design.webgigs.in/demo/yellow/html/about.html">Elektroinstallationen</a><span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Features</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/typography.html">Typography</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/shortcodes.html">Shortcodes</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Automatisierung</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio1.html">1 Column</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio2.html">2 Columns</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio3.html">3 Columns</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio4.html">4 Columns</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/portfolio_post.html">Portfolio post</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a class="line-height" href="javascript:void(0)">Regenerative<br>Energiesysteme</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/blog_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/blogpost_full.html">Blog post</a></li>
                            <li class="has-menu level2"><a href="javascript:void(0)">With sidebar</a>
                                <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                                    <li><a href="http://design.webgigs.in/demo/yellow/html/blog_left.html">Left sidebar</a></li>
                                    <li><a href="http://design.webgigs.in/demo/yellow/html/blog_right.html">Right sidebar</a></li>
                                    <li><a href="http://design.webgigs.in/demo/yellow/html/blogpost_sidebar.html">Blog post</a></li>
                                </ul>
                          </li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Kundendienst</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_sidebar.html">With sidebar</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
										<li class="has-menu level1"><a href="javascript:void(0)">Über uns</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_sidebar.html">With sidebar</a></li>
                        </ul>
                    <span class="menu_marker"></span></li> 
										<li class="has-menu level1 last"><a href="javascript:void(0)">Kontakt</a>
                        <ul style="display: none; visibility: hidden;" class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_full.html">Full width</a></li>
                            <li><a href="http://design.webgigs.in/demo/yellow/html/contact_sidebar.html">With sidebar</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>                
                </ul></div></header>


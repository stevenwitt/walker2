<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11" /> -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,900&display=swap" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nice-select.css">							
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <?php /*?><?php 

    $defaults = array(

 'theme_location'  => '',

 'menu'            => 'Main-Menu',

 'container'       => 'ul',

 'menu_class' => '',

 'menu_id' => 'nav'

); ?><?php */?>

<header class="menu">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <!-- Login Form -->
        <div id="loginBox" style="display:none"> 
            <div id="closeButton"><img src="<?php echo get_template_directory_uri(); ?>/img/close_icon.svg"></div>               
            <form id="loginForm">
                <!--FORM STUFF-->
                <h3>Account Log In</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumy nibh euismod tinci ut laoreet dolore. Sed et pharetra dolor, et nibh euismod vehicula sem. </p>
                <div class="row">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Username"></div>
                    <div class="col-md-6"><input type="password" class="form-control"  placeholder="Password"></div>
                    <div class="col-md-6"><input type="submit" class="btn_submit" value="Submit"></div>
                </div>
            </form>
        </div>
        <div class="ml-auto header-top-right no-padding">
          <ul>
            <li><a href="#" id="loginButton">Account Log In</a>|</li>
            <li><a href="#">View / Sign Loan Docs</a>|</li>
            <li><a href="#">PartnerPortal</a>|</li>
            <li> <a href="#">Payment Estimator</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- main menun start -->
  <div class="container main-menu">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/enerbank-logo.svg" alt="" title="" /></a> </div>
      
      	<?php 
            $defaults = array(          
            'theme_location'  => '',          
            'menu'            => 'Main-Menu',          
            'container'       => 'ul',          
            'menu_class' => 'nav-menu',          
            'menu_id' => 'nav-menu-container'          
          ); 
        ?>
        
        <?php echo strip_tags(wp_nav_menu( $defaults ), '<a>');	?>       
     
      <!-- #nav-menu-container --> 
    </div>
  </div>
</header>

<!-- sticky menu -->
<header id="header" class="sticky-menu menu"><div class="header-top">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-4"></div> -->
        <div class="ml-auto header-top-right no-padding">
          <ul>
            <li><a href="#" id="loginButtonmob">Account Log In</a>|</li>
            <li><a href="#">View / Sign Loan Docs</a>|</li>
            <li><a href="#">PartnerPortal</a>|</li>
            <li> <a href="#">Payment Estimator</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- main menun start -->
  <div class="container main-menu">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/enerbank-logo.svg" alt="" title="" /></a> </div>
      
      	<?php 
            $defaults = array(          
            'theme_location'  => '',          
            'menu'            => 'Main-Menu',          
            'container'       => 'ul',          
            'menu_class' => 'nav-menu',          
            'menu_id' => 'nav-menu-container'          
          ); 
        ?>
        
        <?php echo strip_tags(wp_nav_menu( $defaults ), '<a>');	?>       
     
      <!-- #nav-menu-container --> 
    </div>
  </div>
</header>
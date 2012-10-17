<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--> 
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

<div id="wrapper">

	<header>
	
		<div class="container">
		
			<div id="primary-log" class="widget-area" role="complementary">
				<ul class="xoxo">
				<?php if ( is_user_logged_in() ) { ?>
						<li id="logout" class="widget-container">
							Welcome <?php echo S2MEMBER_CURRENT_USER_DISPLAY_NAME; ?> &nbsp; | &nbsp;
							<a href="<?php echo S2MEMBER_LOGIN_WELCOME_PAGE_URL; ?>" title="My account">My account</a> &nbsp; | &nbsp;
							<a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>" title="Log out">Log Out</a>
						</li>
				<?php } else{ ?>
						<li id="login" class="widget-container">
							<a href="<?php echo S2MEMBER_LOGIN_PAGE_URL; //wp_loginout('/welcome-page'); ?>">Member Log in</a>
						</li>
				<?php } ?>
				</ul>
			</div>

			<!-- Logo -->
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->

			<!-- Nav -->
			<nav>
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /Nav -->
			
			<br class="clear">
			
		</div>
		<!-- /container -->
	
	</header>
	<!-- /Header -->
	
	<!-- Wrapper -->
	<div id="" class="container">

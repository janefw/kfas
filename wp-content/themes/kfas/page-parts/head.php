<!-- start of header section-->
<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	</head>

	<body <?php body_class(); ?>>

				<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
				
<!-- mobile menu link -->
<div class="mobile-menu">
<a class="mobile-nav btn" href="#footer-nav"><i class="icon-align-justify icon-large"></i> Menu</a>
</div>
<!-- end mobile link --> 

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<!--<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>-->
					
					<a href="<?php echo home_url(); ?>" rel="nofollow">
					
					<img id="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/kfas-logo-tran.gif" width="300" height="87">
					</a>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
										
					<nav id="main-nav" class= "navbar" role="navigation">
						<ul>
    					<li><a class="link" href="<?php echo home_url(); ?>/#home-a"><i class="icon-home icon-large"></i> Home</a></li>
						<li><a class="link" href="<?php echo home_url(); ?>/#services-a"><i class="icon-book icon-large"></i> Our Services</a></li>
						 <li><a class="link" href="<?php echo home_url(); ?>/#about-a"><i class="fa-coffee icon-large"></i> Approach</a></li>
    					<li><a class="link" href="<?php echo home_url(); ?>/#who-a"><i class="fa-user icon-large"></i> Who</a></li>
    					<li><a class="link" href="<?php echo home_url(); ?>/blog"><i class="fa-pencil-square-o icon-large"></i> Blog</a></li>
    					<li><a class="link" href= "<?php echo home_url(); ?>/#contact-a"><i class="icon-phone icon-large"></i> Contact Us</a></li>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

			<div id="container">

<!--end of header section-->
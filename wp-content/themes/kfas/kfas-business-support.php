<?php
/*
Template Name: KFAS business support
*/
?>

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
						 <li><a class="link" href="<?php echo home_url(); ?>/#about-a"><i class="icon-pencil icon-large"></i> About</a></li>
    					<li><a class="link" href="<?php echo home_url(); ?>/#who-a"><i class="fa-user icon-large"></i> Who</a></li>
    					<li><a class="link" href= "<?php echo home_url(); ?>/#contact-a"><i class="icon-phone icon-large"></i> Contact Us</a></li>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

			<div id="container">

<!--end of header section-->
			
<div id="content">
			
	<div id="inner-content" class="wrap clearfix">			
		
		<div id="main" class= "twelvecol first clearfix page" role="main">
		<p style="text-align:right; margin-bottom:0px; text-decoration: none;"><a href="<?php echo home_url(); ?>/#services-a">Back</a></p>
		<header class="article-header">
							
							    <h1>Business Support</h1>
                  

						
						    </header> <!-- end article header -->
		

		<section class ="entry-content clearfix">

		<P>Start by picking your package, then we'll give you a fixed quote based on your particular business needs.</p>

			<section id="comparison">

			<!--Accounting Lite-->

					    <div class="threecol first comp">
					    	<p class="comp-title"> Accounting Lite </p>
					    	<div class ="description">
					    	<p>The absolute bare bones accounting service. Suitable for very simple accounts such as landlords accounts or sole traders and companies with few transactions.</p> 
							<p>Business accounts must already be in an accounting package or summarised for the year.</p> 
							</div>
							
							<div class = "includes">
							<p><strong>Includes:</strong>
								<ul>
								<li><i class="fa fa-check"></i>One set of year end accounts</li>
								<li><i class="fa fa-check"></i>One personal or corporation tax return</li>
								<li><i class="fa fa-check"></i>Review by email</li>
								<li><i class="fa fa-check"></i>Filing of return</li>
								<li><i class="fa fa-check"></i>Tax investigation fee protection</li>
								</ul></p>
							</div>
								
								
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>From £200 per year</strong></p>
								<p><strong>&nbsp;</strong></p>
								<p><strong>&nbsp;</strong></p>

								<p><strong>Optional extras:</strong>
								<ul>
								<li><i class="fa fa-star"></i>Annual return for Ltd Co</li>
								<li><i class="fa fa-star"></i>Payroll</li>
								<li><i class="fa fa-star"></i>Additional personal tax return</li>
								<li><i class="fa fa-star"></i>Year round advice and guidance</li>
								</ul>
							</p>
					    </div>

			<!--Accounting Basics-->

					    <div class="threecol comp">
					    	<p class="comp-title">Accounting Basics</p>
					    	<div class ="description">
					    	<p>This is ideal for small sole traders / limited companies and new starters. The business is small but growing.
					    	</p>
					    	</div>
							
							<div class = "includes">
							<p><strong>Includes:</strong>
								<ul>
								<li><i class="fa fa-check"></i>One set of year end accounts</li>
								<li><i class="fa fa-check"></i>One personal or corporation tax return</li>
								<li><i class="fa fa-check"></i>Review by email</li>
								<li><i class="fa fa-check"></i>Filing of return</li>
								<li><i class="fa fa-check"></i>Tax investigation fee protection</li>
								<li><i class="fa fa-check"></i>Director's personal return (Ltd Co)</li>
								<li><i class="fa fa-check"></i>VAT check or flat rate prep</li>
								<li><i class="fa fa-check"></i>Year round advice and guidance</li>
								<li><i class="fa fa-check"></i>Cloud accounting package</li>
								</ul></p>
							</div>
							
							<p><strong>&nbsp;</strong></p>
							<p><strong>&nbsp;</strong></p>
							<p><strong>From £360 per year</strong></p>
							<p><strong>  or £30 per month</strong></p>
							<p><strong>&nbsp;</strong></p>
							
							<p><strong>Optional extras:</strong>
								<ul>
								<li><i class="fa fa-star"></i>Annual return for Ltd Co</li>
								<li><i class="fa fa-star"></i>Payroll</li>
								<li><i class="fa fa-star"></i>Additional personal tax return</li>
								<li><i class="fa fa-star"></i>Year round advice and guidance</li>
								</ul></p>
					    </div>

					    <!--Accounting Extra -->

					    <div class="threecol comp">
					    	<p class="comp-title">Accounting Extra</p>
					    	<div class ="description">
					    	<p>As your business grows and gets more complicated, you need more support; your year end accounts are more complex, you might be VAT registered, you need advice and guidance during the year. 
					    	</p>
							</div>
							
							<div class = "includes">
							<p><strong>Includes:</strong>
								<ul>
								<li><i class="fa fa-check"></i>One set of year end accounts</li>
								<li><i class="fa fa-check"></i>One personal or corporation tax return</li>
								<li><i class="fa fa-check"></i>Review by email</li>
								<li><i class="fa fa-check"></i>Filing of return</li>
								<li><i class="fa fa-check"></i>Tax investigation fee protection</li>
								<li><i class="fa fa-check"></i>Director's personal return (Ltd Co)</li>
								<li><i class="fa fa-check"></i>Quarterly VAT returns</li>
								<li><i class="fa fa-check"></i>Year round advice and guidance</li>
								<li><i class="fa fa-check"></i>Cloud accounting package</li>
								<li><i class="fa fa-check"></i>Progress & review meetings</li>
								</ul>
							</p>
							</div>
							
							<p><strong>&nbsp;</strong></p>
							<p><strong>&nbsp;</strong></p>
							<p><strong>From £600 per year</strong></p>
							<p><strong>  or £50 per month</strong></p>
							<p><strong>&nbsp;</strong></p>

							<p><strong>Optional extras:</strong>
								<ul>
								<li><i class="fa fa-star"></i>Annual return for Ltd Co</li>
								<li><i class="fa fa-star"></i>Payroll</li>
								</ul>
							</p>
					    </div>

					    <!--Accounting Max -->

					    <div class="threecol comp last">
					    <p class="comp-title">Accounting Max</p>
					    <div class ="description">
					    <p>It's not just about the statutory returns; you need regular information and support to keep on top of cash flow, customers and suppliers, to inform decisions and help you manage your business effectively.
						</p>
						</div>
						<div class = "includes">
						<p><strong>Includes:</strong>
							<ul>
								<li><i class="fa fa-check"></i>One set of year end accounts</li>
								<li><i class="fa fa-check"></i>One personal or corporation tax return</li>
								<li><i class="fa fa-check"></i>Review by email</li>
								<li><i class="fa fa-check"></i>Filing of return</li>
								<li><i class="fa fa-check"></i>Tax investigation fee protection</li>
								<li><i class="fa fa-check"></i>Director's personal return (Ltd Co)</li>
								<li><i class="fa fa-check"></i>Quarterly VAT returns</li>
								<li><i class="fa fa-check"></i>Year round advice and guidance</li>
								<li><i class="fa fa-check"></i>Cloud accounting package</li>
								<li><i class="fa fa-check"></i>Progress & review meetings</li>
								<li><i class="fa fa-check"></i>Monthly / quarterly accounts and reports</li>
							</ul>
						</p>
						</div>
						
						<p><strong>&nbsp;</strong></p>
						<p><strong>From £2,500 per year</strong></p>
						<p><strong>or £208 per month</strong></p>
						<p><strong>&nbsp;</strong></p>
					    
						<p><strong>Optional extras:</strong>
							<ul>
								<li><i class="fa fa-star"></i>Annual return for Ltd Co</li>
								<li><i class="fa fa-star"></i>Payroll</li>
							</ul>
						</p>


					    </div>
						</section>

						</section>	
						</div> <!-- end #main -->
					  		    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<!--footer section-->
<footer class="footer" role="contentinfo" id="footer-nav">

				<div id="inner-footer" class="wrap clearfix">
					
	<div class="fourcol first footer-section">
	
		<h5>Navigation</h5>
		
		<nav role="navigation" class="nav" id="nav">
		    <ul class="nav">
	    	<li><a class="link" href="<?php echo home_url(); ?>"><i class="icon-home"></i> Home</a></li>
	    	<li><a class="link" href="<?php echo home_url(); ?>/#services-a"><i class="icon-book"></i> Our Services</a></li>
	        <li><a class="link" href="<?php echo home_url(); ?>/#about-a"><i class="icon-pencil"></i> About</a></li>
	    	<li><a class="link" href="<?php echo home_url(); ?>/#who-a"><i class="icon-user"></i> Who</a></li>
	        <li><a class="link" href= "<?php echo home_url(); ?>/#contact-a"><i class="icon-phone"></i> Contact Us</a></li>
	    	<li><a class="link" href= "<?php echo home_url(); ?>/jobs"><i class="icon-envelope"></i> Jobs</a></li>
	    	</ul>
	    </nav>
	 
	 </div>
					
								
	<div class="fourcol footer-section">
		<p>
		<a href="http://www.cimaglobal.com/">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/PCH_pink.jpg" alt="CIMA" width="150" height="83">
		</a>
		</p>
	</div>
					
	<div class="fourcol last footer-section">		
	<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
	<p>
	81 Dale Road,</br>
	Matlock,</br>
	DE4 3DN</br>
	01629 55255
	</p>
					
	<nav role="navigation" class="nav service">
	<ul class="nav">
		<li><a href="http://www.facebook.com/KFAccountingServices/"><i class="icon-facebook-sign icon-2x"></i> Facebook</a></li>
		<li><a href="http://www.twitter.com/kfaccounting/"><i class="icon-twitter-sign icon-2x"></i> Twitter</a></li>
	</ul>
	</nav>
	
	</div>
				
	</div> <!-- end #inner-footer -->
				
	</footer> <!-- end footer -->
		
	</div> <!-- end #container -->
		
	<!-- all js scripts are loaded in library/bones.php -->
	<?php wp_footer(); ?>

</body>

</html> <!-- end page. what a ride! -->


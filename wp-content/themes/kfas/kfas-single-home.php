<?php
/*
Template Name: KFAS Single Home Page
*/
?>

<?php get_header(); ?>
<a class="anchor" id="home-a"></a>			
<div id="content">
			
	<div id="inner-content" class="clearfix">			
	
<section id="introduction">		

<!--<div id="main" class="twelvecol first clearfix" role="main">-->

<!--start of intro section, two columns-->
<div class="intro-container clearfix page">	
<a class="anchor" id="intro-a"></a>
<!--<h2>What we do</h2>-->
	
	<div class="section-container wrap">
	
	<div id="large-home"><!--The full screen version with picture-->
		<div class="sixcol first intro">
		<img class="home-image" src="<?php echo get_template_directory_uri(); ?>/images/home-turret.jpg" / alt="Our office turret" height="413" width="550">
	</div>

	<div class="sixcol last intro">
		<h2>Local accountants for small businesses and individuals.</h2>
		<p>We are a Matlock based chartered accountancy practice offering simple, straightforward, easy accounting services. </p>
		<p>Get in touch with us today to arrange your <span style="color:#cc3399; font-weight: bold;">FREE </span> consultation and meet us in person.</p>
		
		<div id="call-to-action">
			<div class= "sixcol first buttons clearfix">
			<a class="call-button talk" href="#contact-a">Contact us</a>
			</div>
			<div class="sixcol last buttons clearfix">
			<a class="call-button more" href="#services-a">Find out more</a>
			</div>

			<div class= "sixcol first buttons-mobile clearfix">
			<a class="call-button talk" href="#contact-a">Contact us</a>
			</div>
			<div class="sixcol last buttons-mobile clearfix">
			<a class="call-button more" href="#services-a">More info</a>
			</div>

		</div>
	
	</div>	
	</div>

	<div id="mobile-home"><!--The small screen version without picture-->
	
		<div class="twelvecol first intro">
		<h2>Local accountants for small businesses and individuals.</h2>
		<p>We are a Matlock based chartered accountancy practice offering simple, straightforward, easy accounting services. </p>
		<p>Get in touch with us today to arrange your <span style="color:#cc3399; font-weight: bold;">FREE </span> consultation and meet us in person.</p>
		
		<div id="call-to-action">
			<div class= "sixcol first buttons clearfix">
			<a class="call-button talk" href="#contact-a">Contact us</a>
			</div>
			<div class="sixcol last buttons clearfix">
			<a class="call-button more" href="#services-a">Find out more</a>
			</div>

			<div class= "sixcol first buttons-mobile clearfix">
			<a class="call-button talk" href="#contact-a">Contact us</a>
			</div>
			<div class="sixcol last buttons-mobile clearfix">
			<a class="call-button more" href="#services-a">More info</a>
			</div>

	</div>
	
	</div>	
	</div>
	
	</div>

</div>

</section>
<!--end of intro section-->

<!--start of SERVICES section, three columns-->
<section id="services">

<div class="services-container clearfix page">
<a class="anchor" id="services-a"></a>

<div class="section-container wrap">

<h2>How we can help</h2>
<h3 class="services-description">We can help with both Business and Personal accounts</h3>
<h3 style="margin-bottom: 0px; color:#cc3399;" class="services-description">Personal accounts - <a href="<?php echo home_url(); ?>/personal-accounts/">find out more</a></h3>
<h3 style="margin-bottom: 0px; color:#cc3399;"class="services-description">Business Services</h3>
						<div class="fourcol first services">
						<h5><i class="icon-lightbulb icon-4x pull-left icon-muted" style="color:#cc3399;"></i>New Business Kick-Starter<br></h5>
						<!--<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>There is so much to understand and get organised. I’m getting stressed. <i class="icon-quote-right" style="color:#cc3399;"></i></p>-->
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I want to focus on my new business; I don’t want to waste time. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p>When you are just starting out there are a lot of things to take care of. We help with everything from the business plan, incorporations, payroll setup to selecting an accounts package.</p>
						
						<p>
							<a class="startup-button" href="<?php echo home_url(); ?>/business-kick-starter/">I'm starting out</a>
						</p>

						<p>
							<a class="startup-button-768" href="<?php echo home_url(); ?>/business-kick-starter/">More info</a>
						</p>
						
						<p>Come and talk about our start-up services and new business package.</p>
						</div>
						
						<div class="fourcol services">
						<h5><i class="icon-ambulance icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Finance First Aid<br></h5>
						<!--<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I’m behind on my returns and worried about getting fined. <i class="icon-quote-right" style="color:#cc3399;"></i></p>-->
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I just don’t know how to get on top of my accounts. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p>Business has been busy and you’ve not done your books for a while. Before you know it you’ve got missing tax returns and fines. We can help you to get back on track with your accounts and avoid the stress and worry.</p>
						
						<p>
							<a class="startup-button" href="<?php echo home_url(); ?>/finance-first-aid/">I need urgent help</a>
						</p>

						<p>
							<a class="startup-button-768" href="<?php echo home_url(); ?>/finance-first-aid/">More info</a>
						</p>


						<p>Get in touch about our finance first aid package.</p>
						</div>

						<div class="fourcol services last clearfix">
						<h5><i class="icon-bar-chart icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Business Support</h5>
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I need some regular support with my finances and returns. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p>Whether you need work out your VAT, CIS, submit your annual returns or keep on top of your accounts more regularly we can help. We can provide advice, support and services as your business grows.</p>
						
						<p>
							<a class="startup-button" href="<?php echo home_url(); ?>/business-support/">I need ongoing support</a>
						</p>

						<p>
							<a class="startup-button-768" href="<?php echo home_url(); ?>/business-support/">More info</a>
						</p>
						<p>Chat about our business accounting and taxation services.</p>
						</div>				

</div>
	</div>
</section>
<!--end of SERVICES section, three columns -->

<!--start of PHILOSPOPHY section, one column -->

<section id="philosophy">
<div class="about-container clearfix page">
	
	<div class="twelvecol first about">
	<a class="anchor" id="about-a"></a>
	
	<div class="section-container wrap">

	<h2>Our approach</h2>
	<h3>Money matters made simple, tailored to your needs.</h3>
	<!--<h3>We think you've probably got enough to worry about, so we'll fit in with you</h3>-->
	
		<div class="fourcol first about">
		<h5>Meetings to suit you</h5>
		<i class="fa-smile-o icon-4x"></i>
		</div>
	
		<div class="fourcol about">
		<h5>Flexible approach</h5>
		<i class="fa-rotate-right icon-4x"></i>
		</div>
	
		<div class="fourcol last about">
		<h5>Straightforward pricing</h5>
		<i class="icon-money icon-4x"></i>
		</div>

	<p>If you need a late or weekend appointment to fit in with work, we can do that. If you’ve got a certain way that you like to do your books then we can work with that. We won’t make you fit in with one way of working or a favourite software package, but can always provide any guidance and recommendations.
	</p>

	<p>We'll give you a fixed, upfront price quote and the opportunity to spread payments monthly.</p>
	</p>
	</div>	

</div>

</div> 
</section>
<!--end of WHY section, one columns -->

<section id="who">
<div class="who-container clearfix page">
	
	<div class="section-container wrap">

	<div class="twelvecol first about">
	<a class="anchor" id="who-a"></a>
	<h2>Who we are</h2>
	<p>We’re a chartered accountancy firm based in Matlock. Come and meet us in person.</p>
	<div class="sixcol first about">
		<h5>Keith Falconer<br>Director</h5>
		<img src="<?php echo get_template_directory_uri(); ?>/images/keith-icon.png" / alt="Keith Falconer" height="250" width="300">
		<p>Keith is a CIMA chartered management accountant with more years financial experience than he would care to admit. If you are lucky you might catch his band playing.</p>
		</div>
	
		<div class="sixcol last about">
		<h5>Jane Falconer-White<br>Practice Accountant</h5>
		<img src="<?php echo get_template_directory_uri(); ?>/images/jane-icon.png" / alt="Jane Falconer-White" height="250" width="263">
		<p>Jane has a background in management consultancy and is currently working through the CIMA exams. She can often be found rounding up her small children in Matlock park.</p>
		</div>

		<div class="sixcol first about">
		<h5>Elliott Spence<br>Assistant Practice Accountant</h5>
		<img src="<?php echo get_template_directory_uri(); ?>/images/elliott-icon.png" / alt="Elliott Spence" height="250" width="291">
		<p>Elloitt is our newest recruit. He works with Jane on the accounts and is also studying for his AAT exams.</p>
		</div>
	
		<div class="sixcol last about">
		<h5>Doreen Watt<br>Book keeping and Admin</h5>
		<img src="<?php echo get_template_directory_uri(); ?>/images/doreen-icon.png" / alt="Doreen Watt" height="250" width="308">
		<p>Doreen looks after book keeping and admin. She is also fantastic at making cakes.</p>
		</div>

	</div>	

</div>

</div> 
</section>
<!--end of WHY section, one columns -->

<!--start of CONTACT section, two column -->
<section id="Contactus">

<div class ="contact-container clearfix page">
	
	<a class="anchor" id="contact-a"></a>

	<div class="section-container wrap">

	<h2>Get in touch</h2>
	<p>Give us a call to arrange your <span style="color:#cc3399; font-weight: bold;">FREE</span> consultation.</p>
	<div class="sixcol first contact-info">
	<p><iframe src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=81+dale+road,+matlock&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=6.491397,21.247559&amp;ie=UTF8&amp;hq=&amp;hnear=81+Dale+Rd,+Matlock+DE4+3LU,+United+Kingdom&amp;t=m&amp;ll=53.135701,-1.55551&amp;spn=0.018022,0.034418&amp;z=14&amp;output=embed" height="350" width="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe><br />
	<p><small><a style="color: #0000ff; text-align: left;" href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=81+dale+road,+matlock&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=6.491397,21.247559&amp;ie=UTF8&amp;hq=&amp;hnear=81+Dale+Rd,+Matlock+DE4+3LU,+United+Kingdom&amp;t=m&amp;ll=53.135701,-1.55551&amp;spn=0.018022,0.034418&amp;z=14">View Larger Map</a></small></p>
	</div>
 	
	<div class="sixcol last contact">
	<p><span style="color: #cc3399; font-weight: bold;">Call us:</span> on 01629 55255</p>
	<p><span style="color: #cc3399; font-weight: bold;">Email us:</span> at <a href="mailto:enquiries@kfaccounting.co.uk">enquiries@kfaccounting.co.uk </a></p>
	<p><span style="color: #cc3399; font-weight: bold;">Visit us:</span> at 81 Dale Road, Matlock, DE4 3LU</p>
	<p>You can find our offices in Dale Road in the centre of Matlock.</p>
	<p>If coming from Derby and Matlock Bath on the A6, the office entrance is just before Old Derwent Avenue on the right, between Monks Bar and the Chinese.</p>
	<p>Coming from Bakewell on the A6 the office office enterance is on the left.</p>
	<p>Car parking is available in the parking area to the front of the shops adjacent to the office, or in the public car park on Old Derwent Avenue.</p>			
	</div>				
  
	</div>

</div>
</section>

<!--end of CONTACT section-->

   				</div> <!-- end #main -->
    
				    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

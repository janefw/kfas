<?php
/*
Template Name: KFAS Single Home Page
*/
?>

<?php get_header(); ?>
			
<div id="content">
			
	<div id="inner-content" class="wrap clearfix">			
		
<!--start of home image-->
		<div id="home-intro" class="page-intro clearfix">
		<div class="home-image-text-mobile">
		<h5>We're a Matlock based accountancy firm providing reliable and professional services to local businesses<h5>
		</div>
		<div class="home-image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/kfas-home.jpg" / alt="KF Accounting Services - We're a Matlock based accountancy firm providing reliable and professional services to local businesses">
		</div>
		</div>
<!--end of home image-->
		
<!--start of highlight bar-->
		<!--<div class="home wrap highlight-bar clearfix">						
			<a class="btn-large pull-right purple" href="#"><i class="icon-phone icon-3x pull-left"></i> Give us <br />a call</a>
		</div>-->
<!--end of highlight bar-->
				
		<div id="main" class="twelvecol first clearfix" role="main">
			
<!--start of editable text-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
					<section class="entry-content clearfix" itemprop="articleBody">
					<?php the_content(); ?>
					</section> <!-- end article section -->
						
				</article> <!-- end article -->
					
					<?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
<!--end of editable text-->	
						
<!--start of WHAT section, three columns-->
						<div class="fourcol first" id="what-section">
						<h5 style="color:#cc3399;"><i class="icon-cog icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Starting Out</h5><br />
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I'm getting stressed, there is so much to organise and understand. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I want to focus on my new business, I don't want to waste time. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p><ul>
							<li>Advice!</li>
							<li>HMRC Registration - Corporation tax, VAT</li>
							<li>Incorporation</li>
							<li>Payroll set-up</li>
							<li>Business plan support</li>
							<li>Book keeping</li>
							<li>Accounts package selection</li>
							<li>Support on record keeping system</li>
						</ul>
						</p>
						</div>
						
						<div class="fourcol" id="what-section">
						<h5 style="color:#cc3399;"><i class="icon-cogs icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Growing and Established</h5><br />
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I've outgrown the way I used to do things, I need to make some changes. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>I need a better grasp on my finances, once a year isn't enough. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p>We can be flexible to meet your business requirements and fit in with your work patterns offering everything from meetings at your home or business, evening consultations to fully on-line accounting.</p>
						</div>
						
												
						<div class="fourcol last" id="what-section">
						<h5 style="color:#cc3399;"><i class="icon-home icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Individuals and Landlords</h5><br />
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>Self assessment seems really complicated, I don't understand it. <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p style="color:#336699;"><i class="icon-quote-left pull-left" style="color:#cc3399;"></i>Am I doing my property returns correctly? <i class="icon-quote-right" style="color:#cc3399;"></i></p>
						<p>We can give you access to financial resources to support you including accounting tools, news and updates about changes that may affect your businesses.</p> 
						</div>
<!--end of WHAT section, three columns -->
			
    				</div> <!-- end #main -->
    
				    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

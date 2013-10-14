<?php
/*
Template Name: KFAS Home Page
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
			
			<!--start of text-->
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
		<!--end of text-->	
						
						<!--start of three columns-->
						<div class="fourcol first">
						<h5 style="color:#cc3399;"><i class="icon-bar-chart icon-4x pull-left icon-muted" style="color:#cc3399;"></i>What can we do for you?</h5><br />
						<p>We offer a full range of services including bookkeeping, annual accounts and tax returns for individuals and companies, VAT, management accounts, payroll and HR & contract advice. Let us know what you need.</p>
						</div>
						
						<div class="fourcol">
						<h5 style="color:#cc3399;"><i class="icon-cogs icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Fitting in with you</h5><br />
						<p>We can be flexible to meet your business requirements and fit in with your work patterns offering everything from meetings at your home or business, evening consultations to fully on-line accounting.</p>
						</div>
						
												
						<div class="fourcol last">
						<h5 style="color:#cc3399;"><i class="icon-book icon-4x pull-left icon-muted" style="color:#cc3399;"></i>Supporting your business</h5><br />
						<p>We can give you access to financial resources to support you including accounting tools, news and updates about changes that may affect your businesses.</p> 
						</div><!--end three column section-->
			
    				</div> <!-- end #main -->
    
				    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

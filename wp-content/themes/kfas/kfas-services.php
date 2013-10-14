<?php
/*
Template Name: KFAS services page
*/
?>

<?php get_header(); ?>
			
<div id="content">
			
	<div id="inner-content" class="wrap clearfix">			
		
		<div id="main" class= "twelvecol first clearfix" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
				 <header class="article-header">
							
							    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                  

						
						    </header> <!-- end article header -->
						
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
						<div class = "servicelist">
						<div class = "threecol first">
						<h5><i class="icon-bar-chart icon-4x pull-left icon-muted"></i> Accounts</br>Preparation</h5>
						<ul>
						<li>Bookeeping</li>
						<li>Management Accounts</li>
						<li>Annual Accounts</li>
						<li>Cash Flow Forecasting</li>
						</ul>
						</div>
						
						<div class ="threecol">
						<h5><i class="icon-briefcase icon-4x pull-left icon-muted"></i>Taxation</br>
						Services</a></h5>
						<ul>
						<li>Self Assessment Tax Return/li>
						<li>Partnership Tax Return</li>
						<li>Corporation Tax</li>
						<li>VAT</li>
						</ul>
						</div>
						
						<div class = "threecol">
						<h5><a href="#"><i class="icon-laptop icon-4x pull-left icon-muted"></i>Limited</br>Company</a></h5>
						<ul>
						<li>Company Formation</li>
						<li>Annual Returns</li>
						<li>Corporation Tax</li>
						<li>Company Tax</li>
						</ul>
						</div>
						
						<div class = "threecol last">
						<h5><a href="#"><i class="icon-building icon-4x pull-left icon-muted"></i>Business</br>
						Services</a></h5>
						<ul>
						<li>Payroll</li>
						<li>CIS Returns</li>
						<li>Human Resources and employment contract advice</li>
						</ul> 
						</div>
						
						</div><!--end of four columns and servicelist --->
																
							
    				</div> <!-- end #main -->
					  		    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

<?php
/*
Template Name: KFAS custom page
*/
?>

<?php get_header(); ?>
			
<div id="content">
			
	<div id="inner-content" class="wrap clearfix">			
		
		<div id="main" class= "twelvecol first clearfix" role="main">
		
		<div class="primarycontent">
			
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
						</div><!-- end primary content -->
						
						<div class="secondarycontent">
						
						<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>
					
						</div><!-- end secondary content -->
						
    				</div> <!-- end #main -->
					  		    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

<?php
/*
Template Name: KFAS products page
*/
?>
<!--header section-->

<?php get_template_part( 'page-parts/head' ); ?>

<!-- end header-->
			
<div id="content">
			
	<div id="inner-content" class="wrap clearfix">			
		
		<div id="main" class= "twelvecol first clearfix page" role="main">
		<p style="text-align:right; margin-bottom:0px; text-decoration:none;"><a href="<?php echo home_url(); ?>/#services-a">Back</a></p>
		
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
														
						</div> <!-- end #main -->
					  		    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<!--footer section-->

<?php get_template_part( 'page-parts/foot' ); ?>

<!--end footer-->

	</div> <!-- end #container -->
		
	<!-- all js scripts are loaded in library/bones.php -->
	<?php wp_footer(); ?>

</body>

</html> <!-- end page. what a ride! -->


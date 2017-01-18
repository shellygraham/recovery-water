<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section id="about">

	<div id="inner-content">
					
		<div id="main" class="row large-9 medium-9 center text-center" role="main">
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
								
			    <section class="entry-content" itemprop="articleBody">
				    <?php the_content(); ?>
				    <?php wp_link_pages(); ?>
				</section> <!-- end article section -->
									
				<footer class="article-footer">
					
				</footer> <!-- end article footer -->
									    
				<?// php comments_template(); ?>
								
			</article> <!-- end article -->

		</div> <!-- end #main -->
						    
	</div> <!-- end #inner-content -->

</section>
	
<?php endwhile; endif; ?>
<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
			<div id="content">

				<?php get_template_part( 'parts/content', 'banner' ); ?>
				
<!-- 				<?php get_template_part( 'parts/content', 'about' ); ?> -->

				<?php get_template_part( 'parts/content', 'technology' ); ?>
						
				<?php get_template_part( 'parts/content', 'image-flavors' ); ?>

				<?php get_template_part( 'parts/content', 'benefits' ); ?>

				<?php get_template_part( 'parts/content', 'image-center' ); ?>

				<?php get_template_part( 'parts/content', 'flavors' ); ?>

				<?php get_template_part( 'parts/content', 'image-sunset' ); ?>

<!-- 				<?php get_template_part( 'parts/content', 'image-bottom' ); ?> -->

				<?php get_template_part( 'parts/content', 'offer' ); ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

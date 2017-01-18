<section id="banner" style="background: url(<?php the_field('banner_bg'); ?>) no-repeat center top; background-size: cover;">

	<div class="row inner-content">	
		<div class="large-3 medium-3 large-offset-9 medium-offset-9 columns banner-bottles">
			<?php $image = get_field('banner_image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="wow fadeInDown" data-wow-delay="0.5s" />
		</div>
	</div> <!-- end #inner-content -->

</section>
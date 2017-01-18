<section id="technology" class="section">
	<a class="anchor-technology" id="tech"></a>
	<div class="row inner-content">	
<!-- 		<img class="bubble think" src="<?php echo get_template_directory_uri(); ?>/assets/images/think-bubble.png" alt="Think bubble icon" /> -->

		<div class="small-6 columns small-push-3 text-center show-for-small-only">
			<img src="<?php the_field('technology_image'); ?>" alt="Reliant Recovery Water Technology" class="wow fadeInDown" data-wow-duration="1s" data-wow-offset="100">
		</div>

		<div class="large-6 medium-6 columns medium-push-6 large-text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="100">
			<div class="tech-content">
				<?php the_field('technology'); ?>
			</div>
			<div class="row buy-options">
				<div class="small-6 medium-5 medium-push-1 columns">
					<?php the_field('technology_buy_block1'); ?>
				</div>
				<div class="small-6 medium-5 medium-pull-1 columns">
					<?php the_field('technology_buy_block2'); ?>
				</div>
			</div>
		</div>	
		<div class="large-6 medium-6 columns medium-pull-6 text-center show-for-medium-up">
			<img src="<?php the_field('technology_image'); ?>" alt="Reliant Recovery Water Technology" class="wow fadeInDown" data-wow-duration="1s" data-wow-offset="100">
		</div>
	</div> <!-- end #inner-content -->

</section>
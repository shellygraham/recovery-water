<section id="about" class="section">

	<div class="row">
					
		<div id="main" class="large-12 medium-12 small-centered columns">
			<a class="anchor-about" id="about-recovery"></a>
			<h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-offset="100"><?php the_field('about_headline'); ?></h1>
			
			<div class="content-blocks">
				<div class="medium-3 columns wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
					<div class="block">
						<div class="img-container">
							<?php $image1 = get_field('content_block_1_image'); ?>
							<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
						<div class="text-container">
							<h3><?php the_field('content_block_1_title'); ?></h3>
							<p><?php the_field('content_block_1_text'); ?></p>
						</div>
					</div>
				</div>
				<div class="medium-3 columns wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
					<div class="block">
						<div class="img-container">
							<?php $image2 = get_field('content_block_2_image'); ?>
							<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
						</div>
						<div class="text-container">
							<h3><?php the_field('content_block_2_title'); ?></h3>
							<p><?php the_field('content_block_2_text'); ?></p>
						</div>
					</div>
				</div>
				<div class="medium-3 columns wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
					<div class="block">
						<div class="img-container">
							<?php $image3 = get_field('content_block_3_image'); ?>
							<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
						</div>
						<div class="text-container">
							<h3><?php the_field('content_block_3_title'); ?></h3>
							<p><?php the_field('content_block_3_text'); ?></p>
						</div>
					</div>
				</div>
				<div class="medium-3 columns wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
					<div class="block">
						<div class="img-container">
							<?php $image4 = get_field('content_block_4_image'); ?>
							<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
						</div>
						<div class="text-container">
							<h3><?php the_field('content_block_4_title'); ?></h3>
							<p><?php the_field('content_block_4_text'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
</section>
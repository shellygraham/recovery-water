<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
		 <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
		<link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
		<script>
			var wow = new WOW(
			  {
			    mobile:       false,       // trigger animations on mobile devices (default is true)
			  }
			);
			wow.init();
		</script>
		<!--  Quantcast Tag -->
		<script>
		 var ezt = ezt ||[];
		
		 (function(){
		   var elem = document.createElement('script');
		   elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://pixel") + ".quantserve.com/aquant.js?a=p-c9WjjqCqEJgcQ";
		   elem.async = true;
		   elem.type = "text/javascript";
		   var scpt = document.getElementsByTagName('script')[0];
		   scpt.parentNode.insertBefore(elem,scpt);
		 }());
		
		
		 ezt.push({qacct: 'p-c9WjjqCqEJgcQ',
		           orderid: '',
		           revenue: '' 
		           });
		</script>
		<noscript>
		  <img src="//pixel.quantserve.com/pixel/p-c9WjjqCqEJgcQ.gif?labels=_fp.event.Default" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
		</noscript>
		<!-- End Quantcast Tag -->
		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
				<div id="container">
					<header class="header" role="banner">
						 <?php get_template_part( 'parts/nav', 'top-topbar' ); ?>
								 
						<div id="inner-header" class="row">
							<div class="large-12 medium-12 columns">
								<!-- <h1>
									<a href="<? // php echo home_url(); ?>" rel="nofollow">
										<? // php bloginfo('name'); ?>
									</a>
								</h1> -->
							</div>
	
						</div> <!-- end #inner-header -->
					</header> <!-- end .header -->

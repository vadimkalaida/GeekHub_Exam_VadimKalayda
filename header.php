<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<?php wp_head(); ?>
</head>

	<?php if(is_home()) { ?>
		<header class="header-home">
			<div class="header-home__container">
	<?php } ?>

	<?php if(is_page('talent-expanded')) { ?>
		<header class="header-talent">
			<div class="header-talent__container">
	<?php } ?>

	<?php if(is_page('about')) { ?>
		<header class="header-about">
			<div class="header-about__container">
	<?php } ?>

	<?php if(is_page('single-blog')) { ?>
		<header class="header-singleblog">
			<div class="header-singleblog__container">
	<?php } ?>
		<div class="header__top">
			<div class="header__top__left">
				<div class="nav-toggle-btn" id="nav-toggle-btn" onclick="openMenu(); openMenuClickFunc()">
		            <i class="fa fa-bars nav-toggle-btn-open" id="nav-toggle-btn-open" aria-hidden="true"></i>
		        </div>
				<?php if(has_nav_menu('primary')): ?>
		            <?php
		            wp_nav_menu(array(
		              'menu_class'    => 'header__nav',
		              'menu_id'       => 'nav',
		              'theme_location'=> 'primary',
		            ));
		            ?>
	          	<?php endif; ?>
			</div>
			<div class="header__top__center">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" alt="Site logo" class="header-logo"></a>
			</div>
			<div class="header__top__right">
				<form action="<?php echo home_url( '/' ) ?>" method="get" role="search" class="header__search">
					<input type="text" name="s" value="<?php echo get_search_query() ?>" class="header__search-input" placeholder="SEARCH POSTS" required>
					<button type="submit" class="header__search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
		<?php if(is_home()) { ?>
			<div class="header-home__bottom">
				<div class="header-home__bottom__left">
					<div class="header-home__bottom__soc">
						<a class="header-home__bottom__soc-link" href="<?php echo get_theme_mod('header_link1'); ?>"><i class="<?php echo get_theme_mod('header_link1_icon'); ?>" aria-hidden="true"></i></a>
						<a class="header-home__bottom__soc-link" href="<?php echo get_theme_mod('header_link2'); ?>"><i class="<?php echo get_theme_mod('header_link2_icon'); ?>" aria-hidden="true"></i></a>
						<a class="header-home__bottom__soc-link" href="<?php echo get_theme_mod('header_link3'); ?>"><i class="<?php echo get_theme_mod('header_link3_icon'); ?>" aria-hidden="true"></i></a>
						<a class="header-home__bottom__soc-link" href="<?php echo get_theme_mod('header_link4'); ?>"><i class="<?php echo get_theme_mod('header_link4_icon'); ?>" aria-hidden="true"></i></a>
					</div>
					<div class="header-home__bottom__left-line"></div>
					<p class="header-home__bottom__left-num"><?php echo get_theme_mod('header_bottom_left_number'); ?></p>
				</div>
				<div class="header-home__bottom__center">
					<div class="header-home__bottom__center__content" style="background: url('<?php echo get_theme_mod('header_content_center_image'); ?>');">
						<h2 class="header-home__bottom__center-headline"><?php echo get_theme_mod('header_content_center_headline'); ?></h2>
						<p class="header-home__bottom__center-text"><?php echo get_theme_mod('header_content_center_text'); ?></p>
						<button class="header-home__bottom__center-btn1">view profile</button>
						<button class="header-home__bottom__center-btn2"><i class="fa fa-play" aria-hidden="true"></i></button>
					</div>
				</div>
				<div class="header-home__bottom__right">
					<div class="header-home__bottom__right-item">
						<p class="header-home__bottom__right-item-text">01</p>
						<div class="header-home__bottom__right-item-line"></div>
					</div>
					<div class="header-home__bottom__right-item">
						<p class="header-home__bottom__right-item-text">02</p>
						<div class="header-home__bottom__right-item-line"></div>
					</div>
					<div class="header-home__bottom__right-item">
						<p class="header-home__bottom__right-item-text">03</p>
						<div class="header-home__bottom__right-item-line"></div>
					</div>
					<div class="header-home__bottom__right-item">
						<p class="header-home__bottom__right-item-text">04</p>
						<div class="header-home__bottom__right-item-line"></div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if(is_page('single-blog')) { ?>
			<div class="header-single-blog__bottom">
				
			</div>
		<?php } ?>
		<?php if(is_page('talent-expanded')) { ?>
			<div class="header-talent">
				<div class="header-talent__container">
					<p class="header-talent-headline"><?php the_title(); ?></p>
				</div>
			</div>
		<?php } ?>
	</div>
</header>

<body <?php body_class(); ?>>

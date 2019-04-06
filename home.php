<?php get_header(); ?>

<main>
	<div class="talent">
		<div class="talent__container">
			<div class="talent__top">
				<a href="#" class="talent__top-item"><?php echo get_theme_mod('talent_item1'); ?></a>
				<a href="#" class="talent__top-item"><?php echo get_theme_mod('talent_item2'); ?></a>
				<a href="#" class="talent__top-item"><?php echo get_theme_mod('talent_item3'); ?></a>
				<a href="#" class="talent__top-item"><?php echo get_theme_mod('talent_item4'); ?></a>
			</div>
			<div class="talent__posts">
				<?php
		        $args = array(
		          'post_type'      => 'mt_talents',
		          'posts_per_page' => '8',
		        );

		        $query = new WP_Query($args);
		        if($query->have_posts()) {
		          while($query->have_posts()) {
		            $query->the_post();
	            ?>	
				<div class="talent__post">
					<?php if(has_post_thumbnail()) {
		                echo get_the_post_thumbnail(get_the_ID());
	              	}else {
	              	  echo '<img src="'.MT_IMG_DIR.'/	dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
	              	}; ?>
	              	<img src="<?php echo MT_IMG_DIR; ?>/overlay.png" alt="Overlay" class="talent__post-overlay">
	              	<h4 class="talent__post-title"><?php the_title(); ?></h4>
	              	<div class="talent__post-text"><?php the_excerpt(); ?></div>
				</div>
				<?php
		          }

		        } else {}

		        wp_reset_postdata();

		        ?>
			</div>
			<a href="<?php echo home_url('/talent-expanded'); ?>" class="talent-explore-btn">Explore More</a>
		</div>
	</div>

	<div class="latest-news">
		<div class="latest-news__container">
			<h2 class="latest-news-headline"><?php echo get_theme_mod('latest_news_headline'); ?></h2>
			<hr class="latest-news-line">
			<div class="latest-news__small">
				<?php
		        $args = array(
		          'post_type'      => 'small_latest_news',
		          'posts_per_page' => '3',
		        );

		        $query = new WP_Query($args);
		        if($query->have_posts()) {
		          while($query->have_posts()) {
		            $query->the_post();
	            ?>
				<div class="latest-news__small__post">
					<?php if(has_post_thumbnail()) {
		                echo get_the_post_thumbnail(get_the_ID());
	              	}else {
	              	  echo '<img src="'.MT_IMG_DIR.'/	dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
	              	}; ?>
	              	<div class="latest-news__small__post__text">
	              		<a href="<?php the_permalink(); ?>" class="latest-news__small__post-title"><?php the_title(); ?></a>
	              		<p class="latest-news__small__post-date"><?php the_time('j F, Y'); ?></p>
	              	</div>
				</div>
				<?php
		          }

		        } else {}

		        wp_reset_postdata();

		        ?>
			</div>
			<div class="latest-news__big">
				
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
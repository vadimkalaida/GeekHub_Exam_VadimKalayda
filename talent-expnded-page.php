<?php 
	
// Template Name: Talent Expanded Page

?>
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
		          'posts_per_page' => '100',
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
		</div>
	</div>
</main>

<?php get_footer(); ?>
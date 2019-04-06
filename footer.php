<footer class="footer">
	<div class="footer__container">
		<div class="footer__top">
			<div class="footer__top__left">
				<img src="<?php echo get_theme_mod('site_logo'); ?>" alt="Site Logo" class="footer-site-logo">
			</div>
			<div class="footer__top__right">
				<form action="">
					<input type="email" name="email" placeholder="sign up our newsletter" class="footer-letter-input" required>
					<button type="submit" class="footer-letter-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i>
</button>
				</form>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__bottom__left">
				<p class="footer__bottom-copyright"><?php echo get_theme_mod('footer_bottom_left_text'); ?></p>
			</div>
			<div class="footer__bottom__right">
				<a href="<?php echo get_theme_mod('footer_link1'); ?>" class="footer__bottom__right-link"><i class="<?php echo get_theme_mod('footer_link1_icon'); ?>" aria-hidden="true"></i></a>
				<a href="<?php echo get_theme_mod('footer_link2'); ?>" class="footer__bottom__right-link"><i class="<?php echo get_theme_mod('footer_link2_icon'); ?>" aria-hidden="true"></i></a>
				<a href="<?php echo get_theme_mod('footer_link3'); ?>" class="footer__bottom__right-link"><i class="<?php echo get_theme_mod('footer_link3_icon'); ?>" aria-hidden="true"></i></a>
				<a href="<?php echo get_theme_mod('footer_link4'); ?>" class="footer__bottom__right-link"><i class="<?php echo get_theme_mod('footer_link4_icon'); ?>" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

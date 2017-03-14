<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kurama
 */
?>

		</div><!-- #content -->
	
	</div><!--.mega-container-->
	
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'bottom' ) ); ?>
		</div>
	</nav><!-- #site-navigation -->

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">			
			<?php echo ( get_theme_mod('kurama_footer_text') == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','kurama')) : esc_html( get_theme_mod('kurama_footer_text') ); ?>
			<span class="sep"></span>
			<?php printf( __('%1$s'),'<a href="'.esc_url("http://www.sctscomputing.com/credits").'" rel="designer">Credits</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>

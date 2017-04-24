<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package i-one
 * @since i-one 1.0
 */
?>

		</div><!-- #main -->
        <div class="tx-footer-filler"></div>
		<footer id="colophon" class="site-footer" role="contentinfo">
        	<div class="footer-bg clearfix">
                <div class="widget-wrap">
                    <?php get_sidebar( 'main' ); ?>
                </div>
			</div>
			<div class="site-info">
                <div class="copyright">
                	<?php esc_attr_e( 'Copyright &copy;', 'i-one' ); ?>  <?php bloginfo( 'name' ); ?>
                </div>            
            	<div class="credit-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'i-one' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'i-one' ); ?>">
						<?php printf( __( 'Powered by %s', 'i-one' ), 'WordPress' ); ?>
                    </a>
                    <?php printf( __( ', Designed and Developed by', 'i-one' )); ?> 
                    <a href="<?php echo esc_url( __( 'http://www.templatesnext.org/', 'i-one' ) ); ?>">
                   		<?php printf( __( 'templatesnext', 'i-one' ) ); ?>
                    </a>
                </div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
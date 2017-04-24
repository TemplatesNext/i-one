<?php
/**
 * Template Name: TemplatesNext OnePager
 * The template for displaying TemplatesNext OnePager Home Pahe
 *
 *
 * @package i-one
 * @since i-one 1.0
 */


if (function_exists('txo_sections_show')) {  
	tx_add_menu();
}

get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php
			txo_sections_show();
		 ?>
		</div><!-- #content -->
        <?php //get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_footer(); ?>
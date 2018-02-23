<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage i-one
 * @since i-one 1.0
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php esc_attr_e( 'Nothing Found', 'i-one' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'i-one' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<p><?php esc_attr_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'i-one' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php esc_attr_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'i-one' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->

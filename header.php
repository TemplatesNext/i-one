<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package i-one
 * @since i-one 1.0
 */
?>
<?php


$bg_style = '';
$top_phone = '';
$top_email = '';

$top_phone = esc_attr(get_theme_mod('top_phone', ''));
$top_email = esc_attr(get_theme_mod('top_email', ''));
$ione_logo = get_theme_mod( 'logo', '' );
$ione_logo_trans = get_theme_mod( 'logo-trans', '' );
$top_search = get_theme_mod( 'top_serach', 0 );

global $post; 

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style=" <?php echo $bg_style; ?> ">
	<div id="page" class="hfeed site">

    	<div class="pacer-cover"></div>

        <?php if ( $top_email || $top_phone || ione_social_icons() ) : ?>
    	<div id="utilitybar" class="utilitybar">
        	<div class="ubarinnerwrap">
                <div class="socialicons">
                    <?php echo ione_social_icons(); ?>
                </div>
                <?php if ( !empty($top_phone) ) : ?>
                <div class="topphone">
                    <i class="topbarico genericon genericon-phone"></i>
                    <?php _e('Call us : ','i-one'); ?> <?php echo esc_attr($top_phone); ?>
                </div>
                <?php endif; ?>
                
                <?php if ( !empty($top_email) ) : ?>
                <div class="topphone">
                    <i class="topbarico genericon genericon-mail"></i>
                    <?php _e('Mail us : ','i-one'); ?> <?php echo sanitize_email($top_email); ?>
                </div>
                <?php endif; ?>                
            </div> 
        </div>
        <?php endif; ?>
        
        <div class="headerwrap">
            <header id="masthead" class="site-header" role="banner">
         		<div class="headerinnerwrap">
					<?php if ( $ione_logo ) : ?>
                        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <span>
                            	<?php if ( $ione_logo ) : ?><img src="<?php echo esc_url($ione_logo); ?>" alt="<?php bloginfo( 'name' ); ?>" class="normal-logo" /> <?php endif; ?>
                                <?php if ( $ione_logo_trans ) : ?><img src="<?php echo esc_url($ione_logo_trans); ?>" alt="<?php bloginfo( 'name' ); ?>" class="trans-logo" /><?php endif; ?>
                            </span>
                        </a>
                    <?php else : ?>
                        <span id="site-titlendesc">
                            <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>   
                            </a>
                        </span>
                    <?php endif; ?>	
        
                    <div id="navbar" class="navbar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                            <h3 class="menu-toggle"><?php _e( 'Menu', 'i-one' ); ?></h3>
                            <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'i-one' ); ?>"><?php _e( 'Skip to content', 'i-one' ); ?></a>
                            <?php 
								if ( has_nav_menu(  'primary' ) ) {
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_class' => 'nav-container', 'container' => 'div' ) );
									}
									else
									{
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-container' ) ); 
									}
								?>
							
                        </nav><!-- #site-navigation -->
                        <?php if( $top_search == 1 ) : ?>
                        <div class="topsearch">
                            <?php get_search_form(); ?>
                        </div>
                        <?php endif; ?>	
                    </div><!-- #navbar -->
                    <div class="clear"></div>
                </div>
            </header><!-- #masthead -->
        </div>
        
        <!-- #Banner -->
        <?php
		
		$hide_title = $show_slider = $other_slider = $custom_title = $hide_breadcrumb = "";
		
		if ( function_exists( 'rwmb_meta' ) ) {
			$hide_title = rwmb_meta('ione_hidetitle');
			$show_slider = rwmb_meta('ione_show_slider');
			$other_slider = rwmb_meta('ione_other_slider');
			$custom_title = rwmb_meta('ione_customtitle');
			$hide_breadcrumb = rwmb_meta('ione_hide_breadcrumb');
		}
		
		$hide_front_slider = get_theme_mod('slider_stat', 0);
		$other_front_slider = get_theme_mod('blogslide_scode', '');
		$itrans_slogan = esc_attr(get_theme_mod('banner_text', get_bloginfo( 'description' )));
		$blog_header_heigh = esc_attr(get_theme_mod('blog_header_height', 64));
		
		$video_url = esc_url(get_theme_mod('video_url', ''));		
		$video_id = ione_get_video_id( $video_url );
		
		$other_slider = esc_html($other_slider);
		$other_front_slider = esc_html($other_front_slider);
		
		if($other_slider) :
		?>
		
        <div class="other-slider" id="ibanner">
	       	<?php echo do_shortcode( htmlspecialchars_decode($other_slider) ) ?>
        </div>
		
		<?php	
		elseif ( is_home() && !is_paged() || $show_slider ) : 
		?>
            <?php if (!empty($other_front_slider)) : ?>
            <div id="ibanner">
            	<?php echo do_shortcode( htmlspecialchars_decode($other_front_slider) ) ?>
            </div>
        	<?php elseif ( $hide_front_slider != 0 || $show_slider ) : ?>
            <div id="ibanner">
            	<?php ione_ibanner_slider(); ?>
            </div>
        	<?php else : ?>

            <div class="iheader" id="ibanner" data-header-height="<?php echo $blog_header_heigh; ?>" data-video-id="<?php echo $video_id; ?>">
            	<div class="imagebg"></div>
                                
				<?php if($video_id) : ?>         
                <div class="video-background">
                    <div class="video-foreground">
                    </div>
                </div> 
                <?php endif; ?> 
                
                <div class="titlebar">
                    <h1 class="entry-title">
                        <?php
                            if ($itrans_slogan) {
                                //bloginfo( 'name' );
                                echo esc_attr($itrans_slogan);
                            }
                        ?>	                 
                    </h1>
                </div>
                
            </div>                                    
        	<?php endif; ?>            
            
        <?php 
		elseif(!$hide_title) : 
		?>
        
        <div class="iheader" style="" id="ibanner">
        	<div class="titlebar">
            	
                <?php
					if( is_archive() )
					{
						echo '<h1 class="entry-title">';
							echo the_archive_title();               						
						echo '</h1>';
					} elseif ( is_search() )
					{
						echo '<h1 class="entry-title">';
							printf( __( 'Search Results for: %s', 'i-one' ), get_search_query() );					
						echo '</h1>';
					} else
					{
						if ( !empty($custom_title) )
						{
							echo '<h1 class="entry-title">'.esc_attr($custom_title).'</h1>';
						}
						else
						{
							echo '<h1 class="entry-title">';
							the_title();
							echo '</h1>';
						}						
					}

            	?>
				<?php 
					
                    if(function_exists('bcn_display') && !$hide_breadcrumb )
                    {
				?>
                	<div class="nx-breadcrumb">
                <?php
                        bcn_display();
				?>
                	</div>
                <?php		
                    } 
                ?>               
            <div class="clear"></div>	
            </div>
        </div>
        
		<?php endif; ?>
		<div id="main" class="site-main">


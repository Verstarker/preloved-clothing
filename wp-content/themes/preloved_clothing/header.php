<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_demo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:400,700|Cookie|Lato:300,400,700" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores_demo' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
                if (function_exists('the_custom_logo')) {
	                the_custom_logo();
                }
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$underscores_demo_description = get_bloginfo( 'description', 'display' );
			if ( $underscores_demo_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $underscores_demo_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
            <div class="menu-right">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores_demo' ); ?></button>
	            <?php
	            wp_nav_menu( array(
		            'theme_location' => 'menu-1',
		            'menu_id'        => 'primary-menu',
	            ) );
	            ?>
            </div><!-- .menu-right -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div class="banner">
		<?php underscores_demo_post_thumbnail();
		if (!is_home() || body_class() == 'woocommerce-page' ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
		elseif (body_class() == 'woocommerce-page') :

        else : ?>
            <h1 class="page-title"><?php echo get_bloginfo('name'); ?></h1>
		<?php endif; ?>
    </div>

    <div class="holder">
        <div id="content" class="site-content">

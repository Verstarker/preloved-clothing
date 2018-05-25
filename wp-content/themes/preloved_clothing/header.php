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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
            <?php $count = WC()->cart->cart_contents_count; ?>
            <a href="<?php echo get_permalink( wc_get_page_id( 'cart' )) ?>" class="cart-link">
                <i class="fas fa-shopping-cart"></i>
	            <?php if ($count> 0 ) : ?>
                    <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                <?php endif; ?>
            </a>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div class="banner">
        <?php
		if (is_front_page() ):
			underscores_demo_post_thumbnail()?>
            <h1 class="page-title"><?php echo get_bloginfo('name'); ?></h1>

        <?php
		elseif (is_shop() || is_product_category()) : ?>

            <div id="page-header-image">
				<?php
				$target_post_id = wc_get_page_id('shop');
				$feat_image = wp_get_attachment_url(get_post_thumbnail_id($target_post_id));
				echo '<img src="' . $feat_image . '">';
				?>
            </div>

        <?php elseif (is_product()) :?>
            <div class="test"></div>
		<?php elseif (is_home()) : ?>
			<div id="page-header-image">
				<?php
				$target_post_id = wc_get_page_id('shop');
				$feat_image = wp_get_attachment_url(get_post_thumbnail_id($target_post_id));
				echo '<img src="' . $feat_image . '">';
				?>
            </div>
            <h1 class="page-title">Blog</h1>
		<?php else : ?>
			<div id="page-header-image">
				<?php
				$target_post_id = wc_get_page_id('shop');
				$feat_image = wp_get_attachment_url(get_post_thumbnail_id($target_post_id));
				echo '<img src="' . $feat_image . '">';
				?>
            </div>
			<?php the_title( '<h1 class="entry-title">', '</h1>' );
		endif; ?>
    </div>

    <div class="holder">
        <div id="content" class="site-content">

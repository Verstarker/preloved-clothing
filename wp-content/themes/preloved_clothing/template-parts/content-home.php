<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores_demo
 */
$home_main_heading = get_theme_mod('preloved_home_main_heading');
$home_main_text = get_theme_mod('preloved_home_main_text');
$home_textbox1_heading = get_theme_mod('preloved_home_textbox1_heading');
$home_textbox2_heading = get_theme_mod('preloved_home_textbox2_heading');
$home_textbox1 = get_theme_mod('preloved_home_textbox1');
$home_textbox2 = get_theme_mod('preloved_home_textbox2');
$home_textbox1_image = get_theme_mod('preloved_home_textbox1_image');
$home_textbox2_image = get_theme_mod('preloved_home_textbox2_image');


?>

<div class="home-content">
    <?php if ($home_main_heading && $home_main_text) {
    ?>
        <div class="home-main-content">
            <?php if ($home_main_heading || is_customize_preview()) :?>
                <h2><?php echo $home_main_heading; ?></h2>
            <?php endif;

            if ($home_main_text || is_customize_preview()) :
                echo wpautop($home_main_text); ?>
            <?php endif; ?>
        </div>
    <?php }

    if ($home_textbox1 && $home_textbox1_image) {
    ?>
    <div class="home-textbox-1">
		<?php if ($home_textbox1_image || is_customize_preview()) :?>
            <img id="home-textbox-img" alt="<?php the_title(); ?>" src="<?php echo get_theme_mod('preloved_home_textbox1_image'); ?> "onerror="this.style.display='none'"">
		<?php endif; ?>

        <div class="home-textbox-caption">
		<?php if ($home_textbox1_heading || is_customize_preview()) :?>
            <h2><?php echo $home_textbox1_heading; ?></h2>
        <?php endif;

		if ($home_textbox1 || is_customize_preview()) :
			echo wpautop($home_textbox1); ?>
		<?php endif; ?>
        </div><!-- .home-textbox-caption -->
    </div><!-- .home-textbox-1 -->
	<?php
    }

	if ($home_textbox2 && $home_textbox2_image) {
	?>
    <div class="home-textbox-2">
        <div class="home-textbox-caption">
		    <?php if ($home_textbox2_heading || is_customize_preview()) :?>
                <h2><?php echo $home_textbox2_heading; ?></h2>
		    <?php endif;

		    if ($home_textbox2 || is_customize_preview()) :
			    echo wpautop($home_textbox2); ?>
		    <?php endif; ?>
        </div><!-- .home-textbox-caption -->

        <?php if ($home_textbox2_image || is_customize_preview()) :?>
            <img id="home-textbox-img" alt="<?php the_title(); ?>" src="<?php echo get_theme_mod('preloved_home_textbox2_image'); ?> "onerror="this.style.display='none'"">
		<?php endif; ?>

    </div><!-- .home-textbox-2 -->
    <?php
    }
    ?>

</div><!-- .home-content -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
    <?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'underscores_demo' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores_demo' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php underscores_demo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

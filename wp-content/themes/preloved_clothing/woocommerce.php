<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores_demo
 */

get_header();
?>
<div class="row">
    <div class="column column-8">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php woocommerce_content() ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .column-->
    <div class="column column-4">
	    <?php
	    get_sidebar();
	    ?>
    </div><!-- .column -->
</div><!-- .row -->

<?php
get_footer();

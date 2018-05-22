<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_demo
 */

?>
        </div><!-- #content -->
    </div><!-- .holder -->

	<footer id="colophon" class="site-footer">
        <div class="holder">
            <div class="main-footer row">
                <div class="column column-6">
                    <p>Navigation</p>
	                <?php
	                wp_nav_menu( array(
		                'theme_location' => 'menu-1',
		                'menu_id'        => 'footer-menu',
	                ) );
	                ?>
                </div><!-- .column -->
                <div class="column column-6">
                    <p>Contact:</p>
                    <p>03-332-0289</p>
                    <br>
                    <p>Address:</p>
                    <p>3 Milton St</p>
                </div><!-- .column -->
            </div><!-- .row -->
        </div><!-- .holder -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

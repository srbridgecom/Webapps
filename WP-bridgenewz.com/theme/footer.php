<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @bridgenewz.com srbridge.com iterationlinc.com
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer">

			<?php get_sidebar( 'footer' ); ?>
			<div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                      <p class="text-muted small mb-4 mb-lg-0">© 2024, Bridge Newz Media & Technology Group. An Iterationlinc Company. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.linkedin.com/" target="_blank"><i class="bi-linkedin fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
			
			
			
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>

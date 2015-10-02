<?php
/**
* Template Name: cv
 * The template for cv
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div class="row">
		<div class="col-md-2">
		</div>

			<div class="col-md-10" id="cv">
			<?php
				if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
					// Include the featured content template.
					get_template_part( 'featured-content' );
				}
			?>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<div class="cv-content">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'content', 'page' );

					endwhile;
				?>
			 </div>
			</div>

		</div><!-- #primary -->
	</div>

</div><!-- #main-content -->

<?php
get_footer();

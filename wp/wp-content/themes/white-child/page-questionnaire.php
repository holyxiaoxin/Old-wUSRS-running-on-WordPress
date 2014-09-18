<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package White
 */

get_header(); ?>

	<div id="primary-mono" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">



		<?php /*get "title"*/get_template_part( 'content', 'page' ); ?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

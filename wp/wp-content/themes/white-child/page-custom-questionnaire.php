<?php
/*
Template Name: Custom-Questionnaires
*/
/**
 * The custom template for Custom-Questionnaires.
 *
 *
 * @package White
 */

get_header(); ?>

	<div id="primary-mono" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<!--start of Custom Questionnaires-->
				<div class="custom-wrapper">
					<button type="button" id="custom-questionnaire_createButton" onclick="goToAddQuestionnaire();">Create New Questionnaire</button>
				</div>

			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

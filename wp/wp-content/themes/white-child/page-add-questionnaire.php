<?php
/*
Template Name: Add-Questionnaire
*/
/**
 * The custom template for Add-Questionnaire.
 *
 *
 * @package White
 */

get_header(); ?>

	<div id="primary-mono" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<!--start of Add Questionnaire-->
				<div class="custom-wrapper">
					<table>
						<tr>
							<td>Number of questions</td>
						</tr>
						<tr>
							<td><form><input type="text" id="numberOfQuestions"></form></td>
							<td><button type="button" id="add-questionnaire_updateButton">Update</button></td>
						</tr>
						<!--add empty row inside a table-->
						<tr><td>&nbsp;<td></tr>
						
					</table>

					<table id="questions">
						
					</table>

					<table>
						<tr>
							<td><button type="button" id="add-questionnaire_submitButton">Submit</button></td>
						</tr>
					</table>
				</div>

			<?php endwhile; // end of the loop. ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>

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
							<td><form><input type="text" id="add-questionnaire_numberOfQuestions"></form></td>
							<td><button type="button" id="add-questionnaire_updateOptionsButton">Update</button></td>
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

				<!--						-->	
				<!--		templates		-->
				<!--						-->

				<!--radio field table-->
				<table id="add-questionnaire_radioFieldTemplate" class="hidden">
					<tr>
						<td>Question</td>
						<td>Number Of Options</td>
					</tr>
					<tr id="add-questionnaire_radioFieldOptionsRow">
						<td><form><input type="text" id="add-questionnaire_numberOfOptionsTemplate"></form></td>
						<td><button type="button" id="add-questionnaire_updateButtonTemplate">Update</button></td>
					</tr>
				</table>
				<!--radio field options-->
				<tr id="add-questionnaire_radioFieldOptionsTemplate" class="hidden">
					<td><form><input id='add-questionnaire_questionSlider' type='text'></form></td>
				</tr>

			<?php endwhile; // end of the loop. ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>

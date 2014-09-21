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

					<table id="add-questionnaire_questions" class="hidden">
						<tr>
 							<td>Question Type</td>
 							<td>Question Number</td>
 							<td>Question</td>
 						</tr>
 						<!--add a <hr> line inside table-->
 						<tr>
 							<td><hr></td><td><hr></td><td><hr></td>
 						</tr>

 						<tr>
		 					<td><select id="add-questionnaire_questionType">
		   							<option value="slider">Slider</option>
		   							<option value="radio">Radio</option>
		   							<option value="checkbox">Checkbox</option>
		 						</select></td>
		 					<td>Q</td>
		 					<td id="add-questionnaire_question"><form><input type='text'></form></td>
						</tr>
					</table>
					<!--Radio-->
					<table class="add-questionnaire_questionRadio add-questionnaire_questionType hidden">
						<tr><td>&nbsp;<td></tr>
						<tr>
							<td>Number Of Options</td>
 							<td></td>
 							<td>Option Number</td>
 							<td>Option</td>
						</tr>
						<!--add a <hr> line inside table-->
 						<tr>
 							<td><hr></td><td><hr></td><td><hr></td>
 						</tr>
						<tr>
							<td><form><input type="text" id="add-questionnaire_numberOfOptions"></form></td>
							<td><button type="button" id="add-questionnaire_updateButton">Update</button></td>
							<td>Op 1</td>
							<td><form><input type="text" id="add-questionnaire_option1"></form></td>
						</tr>

						</tr>
							<td></td>
							<td></td>
							<td class="add-questionnaire_questionRadio add-questionnaire_questionType hidden">Op 2</td>
							<td class="add-questionnaire_questionRadio add-questionnaire_questionType hidden"><form><input type="text" id="add-questionnaire_option2"></form></td>

							<!-- <tr>
								<td>Option 1</td>
								<td><form><input type="text" id="add-questionnaire_options1"></form></td>
							</tr>
							<tr>
								<td>Option 2</td>
								<td><form><input type="text" id="add-questionnaire_options2"></form></td>
							</tr>
							<tr>
								<td>Option 3</td>
								<td><form><input type="text" id="add-questionnaire_options3"></form></td>
							</tr>
							<tr>
								<td>Option 4</td>
								<td><form><input type="text" id="add-questionnaire_options4"></form></td>
							</tr>
							<tr>
								<td>Option 5</td>
								<td><form><input type="text" id="add-questionnaire_options5"></form></td>
							</tr> -->
					</table>

					<table>
						<tr>
							<td><button type="button" id="add-questionnaire_backButton">Back</button></td>
							<td><button type="button" id="add-questionnaire_nextButton">Next</button></td>
						</tr>
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

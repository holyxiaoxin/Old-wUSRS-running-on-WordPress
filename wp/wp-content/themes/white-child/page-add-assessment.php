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
							<td>Title of Assessment</td>
							<td>Number of questions</td>
						</tr>
						<tr>
							<td><form><input type="text" id="add-assessment_title"></form></td>
							<td><form><input type="text" id="add-assessment_numberOfQuestions"></form></td>
							<td><button type="button" id="add-assessment_updateNumberOfQuestionsButton">Update</button></td>
						</tr>
						<!--add empty row inside a table-->
						<tr><td>&nbsp;<td></tr>
						
					</table>

					<table id="add-assessment_questions" class="disappear">
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
		 					<td><select id="add-assessment_questionType">
		   							<option value="slider">Slider</option>
		   							<option value="radio">Radio</option>
		 						</select></td>
		 					<td><select id="add-assessment_questionNumber">
		   							<option value="1">1</option>
		 						</select></td>
		 					<td><form><input type='text' id="add-assessment_question"></form></td>
						</tr>
					</table>
					<!--Radio-->
					<table class="add-assessment_questionRadio add-assessment_questionType disappear">
						<tr><td>&nbsp;<td></tr>
						<tr>
							<td>Number Of Options</td>
 							<td>Option Number</td>
 							<td>Option</td>
						</tr>
						<!--add a <hr> line inside table-->
 						<tr>
 							<td><hr></td><td><hr></td><td><hr></td>
 						</tr>
						<tr>
							<td><select id="add-assessment_numberOfOptions">
		   							<option value="2">2</option>
		   							<option value="3">3</option>
		   							<option value="4">4</option>
		   							<option value="5">5</option>
		 						</select></td>
							<td>Op 1</td>
							<td><form><input type="text" id="add-assessment_option1"></form></td>
						</tr>
						<tr class="add-assessment_questionRadio add-assessment_questionType disappear">
							<td></td>
							<td>Op 2</td>
							<td><form><input type="text" id="add-assessment_option2"></form></td>
						</tr>

						<tr class="add-assessment_optionRow3 add-assessment_optionRow4 add-assessment_optionRow5 add-assessment_questionType disappear">
							<td></td>
							<td>Op 3</td>
							<td><form><input type="text" id="add-assessment_option3"></form></td>
						</tr>
						<tr class="add-assessment_optionRow4 add-assessment_optionRow5 add-assessment_questionType disappear">
							<td></td>
							<td>Op 4</td>
							<td><form><input type="text" id="add-assessment_option4"></form></td>
						</tr>
						<tr class="add-assessment_optionRow5 add-assessment_questionType disappear">
							<td></td>
							<td>Op 5</td>
							<td><form><input type="text" id="add-assessment_option5"></form></td>
						</tr>
					</table>

					<table>
						<tr>
							<td><button type="button" id="add-assessment_backButton" class="hidden">Back</button></td>
							<td><button type="button" id="add-assessment_nextButton">Next</button></td>
						</tr>
						<tr>
							<td><button type="button" id="add-assessment_submitButton">Submit</button></td>
						</tr>
					</table>
				</div>

			<?php endwhile; // end of the loop. ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>

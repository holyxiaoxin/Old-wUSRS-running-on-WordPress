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


				<?php get_template_part( 'content', 'page' ); ?>
				<!--start of Add Questionnaire-->

					<form role="form">
						<div id="add-assessment_title_color" class="form-group has-feedback">
							<label for="assessmentTitle">Title of Assessment</label>
							<input type="text" class="form-control" id="add-assessment_title" placeholder="Enter title">
							<span id="add-assessment_title_icon" class="glyphicon glyphicon-remove form-control-feedback"></span>
							<span id="add-assessment_title_help" class="help-block"></span>
						</div>

						<table id="add-assessment_questions" class="table table-hover">
							<thead>
								<th class="col-md-1">#</th>
	 							<th class="col-md-1">Qn. Type</th>
	 							<th class="col-md-5">Question</th>
	 							<th class="col-md-5">Option</th>
	 						</thead>
	 						<tbody></tbody>
	 					</table>

	 					<div class="form-group has-error">
	 						<span id="add-assessment_questions_help" class="help-block"></span>
	 					</div>
	 					
	 					<div class="row">
	 						<div class="col-md-2">
	 							<select class="form-control" id="add-assessment_questionType">
			   							<option value="slider">Slider</option>
			   							<option value="radio">Radio</option>
			 					</select>
							</div>
							<div class="col-md-5">
								<textarea class="form-control add-assessment_newQuestion" rows="3" id="add-assessment_question" placeholder="Enter Question"></textarea>
							</div>
							<div class="col-md-5">
								<input type='text' class="form-control add-assessment_newQuestion" id="add-assessment_option" placeholder="No need for options" disabled></input>
							</div>
						</div>

						<div class="col-xs-7">
							<table class="table">
								<thead><th>New Question</th></thead>
								<tr>
									<td id="add-assessment_newQuestion" class="add-assessment_newQuestion"></td>
								</tr>
							</table>
						</div>
						<div class="col-xs-5">
							<table class="table">
								<thead><th>New Options</th></thead>
								<tr>
									<td id="add-assessment_newOptions" class="add-assessment_newQuestion"></td>
								</tr>
							</table>
						</div>


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

						<table class="col-md-12">
							<tr>
								<!-- <td><button type="button" id="add-assessment_backButton" class="hidden">Back</button></td> -->
								<td><button class="pull-right" type="button" id="add-assessment_addButton">Add</button></td>
							</tr>
							<tr>
								<td><button type="button" id="add-assessment_submitButton">Submit</button></td>
							</tr>
						</table>
					</form>


			

	</div><!-- #primary -->



<?php get_footer(); ?>

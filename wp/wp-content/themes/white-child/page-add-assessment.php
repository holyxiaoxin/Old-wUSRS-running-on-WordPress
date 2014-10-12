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

					<div class="container">
						<form role="form">
							<div id="add-assessment_title_color" class="form-group has-feedback">
								<label for="assessmentTitle">Title of Assessment</label>
								<input type="text" class="form-control" id="add-assessment_title" placeholder="Enter title">
								<span id="add-assessment_title_icon" class="glyphicon form-control-feedback"></span>
								<span id="add-assessment_title_help" class="help-block"></span>
							</div>

							<table id="add-assessment_questions" class="table table-hover">
								<thead>
									<th class="col-md-1">#</th>
		 							<th class="col-md-1">Qn. Type</th>
		 							<th class="col-md-5">Question</th>
		 							<th class="col-md-5">Options</th>
		 						</thead>
		 						<tbody></tbody>
		 					</table>

		 					<div class="form-group has-error">
		 						<span id="add-assessment_questions_help" class="help-block"></span>
		 					</div>
		 					
		 					<div class="row">
		 						<div class="col-md-2">
			 						<div class="form-group">
			 							<label class="sr-only"></label>
			 							<select class="form-control" id="add-assessment_questionType">
					   							<option value="slider">Slider</option>
					   							<option value="radio">Radio Button</option>
					 					</select>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="sr-only"></label>
										<textarea class="form-control add-assessment_newQuestion" rows="3" id="add-assessment_question" placeholder="Enter Question"></textarea>
									</div>
								</div>
								<div class="col-md-5">
									<div id="add-assessment_optionMaxValue_color" class="form-group has-feedback">
										<label class="sr-only"></label>
										<input type="number" class="form-control add-assessment_newQuestion" id="add-assessment_optionMaxValue" placeholder="Enter Max Value"></input>
										<span id="add-assessment_title_help" class="help-block"></span>
									</div>
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

							<div class="col-md-12">
								<td><button class="pull-right" type="button" id="add-assessment_addButton">Add</button></td>
								<td><button type="button" id="add-assessment_submitButton">Submit</button></td>
							</div>
						</form>
					</div>


			

	</div><!-- #primary -->



<?php get_footer(); ?>

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
							<td><form><input type="text" id="numberOfFields" name="numberOfFields"></form></td>
							<script type='text/javascript'>
								function printNumber(){
									var value = jquery('#numberOfFields').val();
									jquery('#question').text('value');
								}
							</script>
							<td><button type="button" onclick="printNumber();">Update</button></td>
						</tr>
						<tr>
							<td>Questions</td>
							<td><span id="question"></span></td>
						</tr>
						<tr>
							<td><button type="button" onclick="location.href='/painapp/wordpress/custom-questionnaire/add-questionnaire/'">Submit</button></td>
						</tr>
					</table>
				</div>

			<?php endwhile; // end of the loop. ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>

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
					<!-- <table id="custom-assessment_table">
						<tr>
							<td>Assessment Id</td>
							<td>Assessment Title</td>
						</tr>
					</table> -->

					<?php
					//$args = array( 'posts_per_page' => 3 );
					$lastposts = get_posts();
					foreach ( $lastposts as $post ) :
					  setup_postdata( $post ); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php 
							$data = get_post_meta( get_the_ID(), 'data', true );
							if(!empty($data)) {
								if($data['numberOfQuestions']){
									echo "number of questions: ".$data['numberOfQuestions'];
								}
							}
						?>
					<?php endforeach; 
					wp_reset_postdata(); ?>


					<br>
					<br>
					<br>
					<br>
					<br>

					

					<br>
					<button type="button" id="custom-assessment_createButton">Create New Assessment</button>
				</div>

			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

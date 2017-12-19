<?php
/**
 * Template Name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */

get_header(); ?>

<div class="about py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'about' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- .about -->

	<?php
			// Grab the metadata from the database
			$leftcol = get_post_meta( get_the_ID(), '_stanleywp_left', true );
			$rightcol = get_post_meta( get_the_ID(), '_stanleywp_right', true );
		?>
	
<div class="container">
	<div class="row mt-5 justify-content-center">
		<div class="col-md-6">
		<?php
		// Echo the metadata
		echo wp_kses_post ( $leftcol );
		?>
		</div>
				<div class="col-md-6">
		<?php
		// Echo the metadata
		echo wp_kses_post ( $rightcol );
		?>
		</div>
	</div>
</div>
<?php

get_footer();
		
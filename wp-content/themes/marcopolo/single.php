<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marcopolo
 */

get_header();
?>

	<div id="primary" class="content-area project-template">
		<main id="main" class="site-main">

		<?php
		while (have_posts()):
    the_post();

    get_template_part('template-parts/content', get_post_type());

	
		endwhile; // End of the loop.
		wp_reset_postdata();
		?>

		<section class="breadcrumbs fixed left-0 top-0 container rotate-270">
		<div class="breadcrumbs-inner absolute top-0 left-0 inline-flex white ttu">
			<a href="/works.php"><h4>Works  /   <?php the_title()?></h4></a>
		</div>
		</section>

		<div class="progress fixed left-0 top-0">
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_footer();

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marcopolo
 */

 /* Template Name: New Home */

get_header();
?>


<div id="primary" class="content-area home">
  <div class="welcome">
    <h1 class="h-druk tc marcopolo-red mt6">
      TURNING BRANDS INTO ADVENTURES
    </h1>
  </div>
	
	<?php get_template_part ('template-parts/non-featured'); ?>
	
			

	</div><!-- #primary -->


<?php get_footer(); ?>

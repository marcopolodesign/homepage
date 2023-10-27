<?php
/**
 * 
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
get_header();
?>

<?php /* Template Name: Home*/?>


	
<div id="primary" class="content-area home">
  <div class="welcome pt6 main-container">
    <h1 class="neue-hass ls-2 tc marcopolo-red pt5">
      Turning brands into adventures
    </h1>
		<h3 class="tc neue-hass black pt4 fw4 landing-p measure-wide center">We produce bold, engaging online and offline experiences through branding, web development combined with strategy that connect with audiences in the most meaningful way posible.</h3>
  </div>



	<div class="flex flex-wrap mt6 main-container-w">
 		<?php	$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'orderby' => "date",
				'order' => "DESC",
		);

		$post_query = new WP_Query($args);
		if($post_query->have_posts() ) { while($post_query->have_posts() ) {
		$post_query->the_post(); ?>

		<div class="home-project pa3-ns inview-animate <?php the_field('project_width'); ?>">
				<img src='<?php the_post_thumbnail_url('full'); ?>'>
					<div class="simple-project-text neue-hass black mt4 mb3">
							<p class=""><?php the_content();?></p>
						</div>
						<div class="case-study-link">
						<?php 
						$categories = get_the_category( $post->ID );		
						foreach ( $categories as $category ) {
							$catName = $category->name;
							$catID = $category->term_id;
								if ($catName !== "WIP"): ?>
									<div class="home-project-case-study flex items-center">
										<a class="cta-has-after" href="<?php the_permalink();?>">View Case Study</a>
										<!-- <img class="m-auto"src='wp-content/uploads/2019/09/arrow.svg'> -->
									</div>
								<?php endif; }

							if (get_field('project_link')): ?>
								<a class="cta-has-after" href="<?php the_field('project_link'); ?>" target="_blank">View site</a>
							<?php endif; ?>
						</div>
		</div>    

		<?php  wp_reset_postdata();} } ?>




	</div>

	<div class="clients-home">
		<h1 class="h-druk tc marcopolo-red pt6 " >
		CLIENTS  AND FRIENDS
		</h1>
		<div class="client-logos main-container center mv5">
			<?php
			$images = get_field('client_logos');
			$size = 'full';  ?>
				<ul class="first-grid flex list-none justify-between items-center flex-wrap">
					<?php foreach( $images as $image ): ?>
						<li class="ma3">
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			
	</div>
			
	
	<div class="about-contact container">
		<div class="mv6 w-50 center inview-animate">
			<h2 class="druk black">Got to see some of our work, hopefully you’ll call us. If you’re not there yet, get to know the philosophy behind the work seen above.</h2>
		</div>

		<div class="flex  flex-column w-100 h-100vh inview-animate">
			<div class="margin-auto">
				<a href="/contact.php">
					<div class="contact-option-1 center tc">
						<h2 class="druk black mv3 ">If you're convinced</h2>
						<h1 class="contact-option-cta soft-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0 convinced druk">Contact us</h1>
					</div>
				</a>


				<a href="/about-us">
						<div class="contact-option-2 mv4 center tc inview-animate">
							<h2 class="druk black mv3 ">If you're not convinced (Aren't you?)</h2>
							<h1 class="contact-option-cta soft-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0 convinced not-convinced">About Us</h1>
						</div>
				</a>
			</div>

				<div class="footer-info flex w-100 justify-between mb4 animate-inview">
					<div class=""fotter-info-ba>
						<div class="flex">
							<p class="marcopolo-light-grey">+54 9 11 6974 2032</p>
							<p class="ml2 marcopolo-light-grey">hola@marcopolo.agency</p>
						</div>
						<p class="mt1 marcopolo-light-grey">Av. Del Libertador 7766,  CABA, Argentina</p>
					</div>

					<div class=""fotter-info-miami>
						<div class="flex">
							<p class="marcopolo-light-grey">+1 (305) 389-7885</p>
							<p class="ml2 marcopolo-light-grey">hi@marcopolo.agency</p>
						</div>
						<p class="mt1 marcopolo-light-grey">7930 NW 36, Miami, FL 33166, USA</p>
					</div>
				</div>
		</div>

	</div>

</div>




<?php get_footer(); ?>

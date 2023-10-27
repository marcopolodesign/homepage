<div class="flex flex-wrap">
  <?php	$args = array(
				'post_type' => 'post',
				'cat' => 24,
		);

		$post_query = new WP_Query($args);
		if($post_query->have_posts() ) { while($post_query->have_posts() ) {
		$post_query->the_post(); ?>

		<div class="simple-project pa3-ns inview-animate">
				<div class="simple-project-image cover no-repeat bg-center" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></div>
				
					<div class="simple-project-text">
						<h3 class="mt3"><?php the_title(); ?></h3>
						<p class="gt-pressura-mono project-link black">Coming Soon</p>
					</div>
				
		</div>    

<?php  wp_reset_postdata();} } ?>


</div>

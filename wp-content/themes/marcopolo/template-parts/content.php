<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marcopolo
 */

?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<div class="entry-content">
		<!-- if we have some flexible content, let’s loop through it -->
		<?php if (have_rows('project')): while (have_rows('project')): the_row();
        // if it’s a header, go through the data
					if (get_row_layout() == 'header'): ?>

						<?php	get_template_part('template-parts/project-header');?>
							<!-- specific to this component -->
							<div class="center project-content" id="project-waypoint">
									<!-- if it’s a text component, show us the data -->
									<?php elseif (get_row_layout() == 'text_block'): ?>

										<?php	get_template_part('template-parts/project-text');?>

									<?php elseif (get_row_layout() == 'gallery'): ?>

										<div class="flex flex-wrap center project-container">
												<?php $images = get_sub_field('gallery');?>
												<?php foreach ($images as $image): ?>

													<div class="gallery-image pa3-ns pv4-ns <?php the_field('image_width', $image['id']);?>">
														<?php echo wp_get_attachment_image($image['id'], 'full'); ?>
													</div>
												<?php endforeach;?>
										</div>



									<?php elseif (get_row_layout() == 'gallery_full'): ?>

										<div class="flex flex-wrap center ">
											<?php $images = get_sub_field('gallery_full');?>
											<?php foreach ($images as $image): ?>

											<div class="gallery-image pv4-ns <?php the_field('image_width', $image['id']);?>">
													<?php echo wp_get_attachment_image($image['id'], 'full'); ?>
											</div>
											<?php endforeach;?>
										</div>

									<?php elseif (get_row_layout() == 'video-cover'): ?>
										<div class=" relative video-container pv5-ns">
												<div class="play-video-cursor absolute translated-center top-50 left-50 z-5 pointer-none">
														<svg  viewBox="0 0 262 82" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
																<!-- Generator: Sketch 51.1 (57501) - http://www.bohemiancoding.com/sketch -->
																<desc>Created with Sketch.</desc>
																<defs>
																		<polygon id="path-1" points="0 81.8848 261.156 81.8848 261.156 -0.0002 0 -0.0002"></polygon>
																</defs>
																<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<g id="Group-16">
																				<path d="M14.3755,10.8106 L11.8455,10.8106 L11.8455,40.9426 L14.3755,40.9426 C15.7555,40.9426 16.4455,40.2516 16.4455,38.7566 L16.4455,12.8806 C16.4455,11.5006 15.7555,10.8106 14.3755,10.8106 Z M11.8455,81.1946 L0.0005,81.1946 L0.0005,0.6906 L17.2505,0.6906 C24.6105,0.6906 28.2915,4.3716 28.2915,11.6166 L28.2915,40.0226 C28.2915,47.3826 24.6105,51.0626 17.2505,51.0626 L11.8455,51.0626 L11.8455,81.1946 Z" id="Fill-1" fill="#FFFFFF"></path>
																				<polygon id="Fill-3" fill="#FFFFFF" points="43.3535 0.6905 43.3535 70.6145 51.8645 70.6145 51.8645 81.1945 31.5085 81.1945 31.5085 0.6905"></polygon>
																				<path d="M65.6621,59.2285 L71.6421,59.2285 L68.6521,20.2415 L65.6621,59.2285 Z M73.3681,81.1945 L72.4481,69.5795 L64.8571,69.5795 L64.0521,81.1945 L53.4721,81.1945 L61.1771,0.6905 L77.1631,0.6905 L84.8681,81.1945 L73.3681,81.1945 Z" id="Fill-5" fill="#FFFFFF"></path>
																				<polygon id="Fill-7" fill="#FFFFFF" points="103.3813 54.168 103.3813 81.194 91.6513 81.194 91.6513 54.513 81.6453 0.69 93.9513 0.69 97.9763 33.353 102.1163 0.69 113.3873 0.69"></polygon>
																				<polygon id="Fill-9" fill="#FFFFFF" points="131.0947 81.1944 123.2747 0.6904 135.1197 0.6904 139.3747 57.9634 143.6307 0.6904 154.5567 0.6904 146.6207 81.1944"></polygon>
																				<mask id="mask-2" fill="white">
																						<use xlink:href="#path-1"></use>
																				</mask>
																				<g id="Clip-12"></g>
																				<polygon id="Fill-11" fill="#FFFFFF" mask="url(#mask-2)" points="157.084 81.1948 168.93 81.1948 168.93 0.6908 157.084 0.6908"></polygon>
																				<path d="M185.0273,71.0743 L187.3283,71.0743 C189.6293,71.0743 190.6633,70.1533 190.6633,67.8533 L190.6633,14.0313 C190.6633,11.7313 189.6293,10.8103 187.3283,10.8103 L185.0273,10.8103 L185.0273,71.0743 Z M173.1823,0.6903 L189.7433,0.6903 C198.3693,0.6903 202.3933,4.8313 202.3933,13.3413 L202.3933,68.5443 C202.3933,77.0533 198.3693,81.1943 189.7433,81.1943 L173.1823,81.1943 L173.1823,0.6903 Z" id="Fill-13" fill="#FFFFFF" mask="url(#mask-2)"></path>
																				<polygon id="Fill-14" fill="#FFFFFF" mask="url(#mask-2)" points="228.3818 0.6905 228.3818 11.1565 218.2618 11.1565 218.2618 35.1925 227.9218 35.1925 227.9218 45.7725 218.2618 45.7725 218.2618 70.6145 228.4968 70.6145 228.4968 81.1945 206.4158 81.1945 206.4158 0.6905"></polygon>
																				<path d="M247.2402,10.1211 L245.6312,10.1211 C244.1352,10.1211 243.4452,10.8101 243.4452,12.1911 L243.4452,69.5791 C243.4452,70.9591 244.1352,71.6481 245.6312,71.6481 L247.2402,71.6481 C248.7362,71.6481 249.4262,70.9591 249.4262,69.5791 L249.4262,12.1911 C249.4262,10.8101 248.7362,10.1211 247.2402,10.1211 M250.2302,81.8851 L242.6402,81.8851 C235.3942,81.8851 231.7152,78.0891 231.7152,70.7281 L231.7152,10.9261 C231.7152,3.6811 235.3942,0.0001 242.6402,0.0001 L250.2302,0.0001 C257.5922,0.0001 261.1562,3.6811 261.1562,10.9261 L261.1562,70.7281 C261.1562,78.0891 257.5922,81.8851 250.2302,81.8851" id="Fill-15" fill="#FFFFFF" mask="url(#mask-2)"></path>
																		</g>
																</g>
														</svg>
												</div>

												<div class="mv3 video-placeholder-container overflow-hidden">
													<img src= "<?php the_sub_field('video_cover');?>">
												</div>

												<!-- ava debería ir la div con el video? -->

										</div>

									<?php elseif (get_row_layout() == 'divider'): ?>
										<div class=" w-100 h-10vw">
											<?php the_sub_field('divider');?>
										</div>

									<?php elseif (get_row_layout() == 'xd_embed'): ?>
										<div class=" w-100 w-100-s flex container-mobile container center black pv5-ns xd-embed">
											<?php the_sub_field('xd_embed'); ?>
										</div>
										
								

							</div>


					<?php endif;

			endwhile;endif;?>

		<?php if (get_field('project_tags')): ?>
			<div class="inview-animate project-micellaneous container pv6-ns pb-5-ns">

				<div class="mb3 flex align-start micellaneous-inner ma5-ns ">
						<a class="gt-pressura-mono">Disciplines</a>
						<p><?php the_tags('<ul class="inline-flex list micellaneous-tags w-40 flex-wrap"><li class=>', '</li><li>', '</li></ul>');?></p>
				</div>

				<div class="mb3 flex micellaneous-date align-start micellaneous-inner ma5-ns">
				<?php if (get_field('project_date')): ?>
					<a class="gt-pressura-mono">Adventure Date</a>
					<p><?php the_field('project_date');?></p>
				<?php endif;?>
				</div>

				<div class="mb3 flex micellaneous-date align-start micellaneous-inner ma5-ns">
				<?php if (get_field('project_location')): ?>
					<a class="gt-pressura-mono">Voyage Destination</a>
					<p><?php the_field('project_location');?></p>
				<?php endif;?>
				</div>

				<div class="mb3 micellaneous-link flex align-start micellaneous-inner ma5-ns">
				<?php if (get_field('project_date')): ?>
					<a class="gt-pressura-mono">View online</a>
					<?php the_field('project_online');?>
				<?php endif;?>
				</div>

			</div>
		<?php endif;?>

		<div class="inview-animate next-project-container mv6-ns mt3-ns">
					
							<?php $next_post = get_adjacent_post(true, '', true);
								if (!empty($next_post)) : ?>
							<div class="contact-option-1 center tc relative">
							<h1 class="next-project quick-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0">Next Project</h1>

							<?php	echo '<a class="gt-pressura-mono next-project-name quick-transition transition-05s black" href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . '</a>';?>
							<?php endif; wp_reset_postdata();?>
						</div>

		</div>



	</div><!-- .entry-content -->

	<footer class="entry-footer">
	<?php get_footer();?>
	</footer><!-- .entry-footer -->
</article><!-- #post-

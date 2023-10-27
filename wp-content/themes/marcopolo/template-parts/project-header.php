<!-- data shared from our hero -->
<div class="slideshow-project-container mb5 ">
      
  <div class="slideshow-inner minw-100vw relative h-110vh top-0 left-0 overflow-hidden">

      <div class="project-info-container w-100 h-100 top-0 left-0 overflow-hidden">
          
        <div class="slideshow-project slideshow-inside desktop scaled w-100 h-100   overflow-hidden" style= "<?php custom_background_image('hero_image');?>"></div>

        <div class="slideshow-project mobile slideshow-inside scaled w-100 h-100  relative top-0 left-0 overflow-hidden" style= "<?php custom_background_image('hero_image_mobile');?>"></div>

        <div class="project-info-inner smooth-titles">
          
          
          <!-- Project Title -->
          <div class="project-info-name project-inside-name overflow-hidden mb-40 ">
            <h1 class="info-featured-h"><?php the_title();?></h1>
          </div>
          <div class="project-info-text">
          <p class="white w-80 project-intro "><?php the_sub_field('header_intro'); ?></p>
          </div>
        </div>
        
      </div>
      
    <!--Project Scroll  -->
    <div class="project-scroll absolute bottom-0 left-40">
      <h4 class="is-project-cta">Scroll</h4>
    </div>

  </div>
</div>

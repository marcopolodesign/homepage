<?php /* Template Name: About Us */?>
<?php get_header();?>


<div class="content-area about-template">
  
      <div class="bg-marcopolo-red w-100 h-100vh bg-bottom cover flex smooth-scroll relative" id="about-us-bcgd">


        <div class="about-us-intro container tablet margin-auto ml-0 mb-0">
          <div class="about-us-text ">
                <h1>WE ARE MARCO POLO CREATIVE AGENCY,</h1>

              <div class="flex justify-between w-100 mv3">
                <span class="gt-pressura-mono">DESIGN</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">BRANDING</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">web</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">editorial</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">UX/UI</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">APPLICATIONS</span>
              </div>

              <h1>A MULTIDISIPLINARY TEAM THAT CREATES</h1>
            <div class="flex justify-between w-100 mv3">
                <span class="gt-pressura-mono">marketing</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">storytelling</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">consulting</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">crossmedia</span>
                <span class="gt-pressura-mono">•</span>
                <span class="gt-pressura-mono">strategy</span>
              </div>
              <h1>BUSINESS GROWING COMMUNICATION</h1>
          </div>
        </div>

        <div class="about-us-intro container mobile margin-auto ml-0">
            <div class="about-us-text">
              <h1>WE ARE MARCO POLO CREATIVE AGENCY,
              A MULTIDISIPLINARY TEAM THAT CREATES
              BUSINESS GROWING COMMUNICATION</h1>
            </div>
        </div>
    
      </div>

      <div class="journey-container relative w-100 flex" id="project-waypoint">
            <div class="w-50 sticky h-100vh top-0 flex the-journey cover">
              <div class="absolute translante-centered w-100">
                <h1 class="h-bigest tc">The Journey</h1>
              </div>
                <div class="absolute translante-centered journey-slug gt-pressura-mono">
                  <h4 class="h4-big black">WHAT DO WE DO</h4>
              </div>
            </div>

          <div class="w-50 pa6 mv5">
            <h2 class="tungsten black">We dream of a world where brands are managed by designers, not by your nephew who is “really good” and has a promising carrer on art.</h2>


            <div class="flex justify-between w-100 mv5 marcopolo-numbers">
              <h1 class="info-featured-h relative marcopolo-red years">6</h1>
              <h1 class="info-featured-h relative marcopolo-red projects ">53</h1>
              <h1 class="info-featured-h relative marcopolo-red clients ">34</h1>
            </div>

            <h4 class="h4-big black lh-2-5">WE PRODUCE BOLD, ENGAGING ONLINE AND OFFLINE EXPERIENCES THROUGH GRAPHICS, WEB DEVELOPMENTS COMBINED WITH STRATEGY THAT CONNECT WITH AUDIENCES IN THE MOST MEANINGFUL WAY POSIBLE.</h4>

          </div>
      </div>

      <div class="in-detail w-100 bg-black container">
        <h4 class="gt-pressura-mono mv5 ">In detail</h4>
        <div class="detail-categories flex justify-between flex-wrap w-90 pb5">
          <?php $categories = get_categories('exclude=array(1,24)&orderby=rand');foreach ($categories as $category): ?>
            <a href="<?php echo get_category_link($category->term_id)?>">
              <div class="cat-name">
                <h1 class="tungsten soft-transition relative top-0 left-0 lh-normal"><?php echo $category->name ?></h1>
                <div class="cat-description absolute top-50 left-50 translated-center tc w-100 soft-transition">
                  <h4 class="gt-pressura-mono marcopolo-red h4-big"><?php echo category_description($category->term_id) ?></h4>
                </div>

              </div>

            </a>
          <?php endforeach;
          wp_reset_postdata(); ?>
        </div>

      </div>

      <div class="advised w-100 container">
        
        <div class="advised-inner pv6 flex justify-between items-center">
          <h1 class="advised-inner-h info-featured-h marcopolo-red relative top-0 left-0">Be Advised</h1>
            <div class="w-50 flex flex-column advised-text">
                  <p class="gt-america pr6">We’re stubborn<sup class="marcopolo-red">1</sup> and will fight for the good of the proyect. We deal in Ideas according to context, we deal in what’s fit for the required action, not particular taste. You are hiring us for our design expertise, not to be your hand that knows how to draw.<br><br>

                Apart from that, we’re very fun to work with. You know your business more than we do, so we’ll prepare to work together to reach maximum potential.</p>
                
                <h4 class="marcopolo-red">Very Stubborn</h4>
            </div>
        </div>
      </div>

      <div class="about-contact container">
          <div class="mv6 w-50 center">
            <h2 class="tungsten black">Now you know who we are. We’re always looking for new adventures to work on, so at this point, it’s up to you to make it happen. But here’s two options:</h2>
          </div>

          <div class="flex  flex-column w-100 h-100vh">
            <div class="margin-auto">
              <a href="/contact">
                <div class="contact-option-1 center tc">
                  <h2 class="tungsten black mv3 ">If you're convinced</h2>
                  <h1 class="contact-option-cta soft-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0 convinced">Contact us</h1>
                </div>
              </a>


              <a href="/work">
                <div class="contact-option-2 mv4 center tc">
                  <h2 class="tungsten black mv3 ">If you're not convinced (Aren't you?)</h2>
                  <h1 class="contact-option-cta soft-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0 convinced not-convinced">View the Work</h1>
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

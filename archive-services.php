<?php
/**
 * The Services archive template file.
 *
 * This is the template used to generate all of the content
 * on the home page of the site. It pulls in content from
 * a sidebar location that is specific to the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package umctheme2-child-digital
 */
 // get_template_part( 'partials/loader' );
 get_header(); ?>
 <div class="container-fluid">


     <div id="primary" class="content-area">
         <main id="main" class="site-main clearfix" role="main">

          <div class="page-header" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/page-headers/page-header-services.jpg');">
            <div class="page-title">
              <h1>Services</h1>
              <hr>
            </div>
          </div>

 	         <div class="ten-twenty-four row clearfix">
            <div class="service-item-container uu-section">

            <?php while ( have_posts() ) : the_post(); ?>
                <!-- Work Item -->
                <div class="service-item">
                  <div class="service-item-content">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php echo get_permalink(); ?>" class="uu-btn ebony">Learn More</a>
                  </div>
                </div>
                <!-- End Work Item  -->
            <?php endwhile; // end of the loop. ?>

            </div>
 			    </div><!-- #ten twenty four -->

          <!-- Callout Section -->
          <div class="callout-section uu-section ebony">
            <div class="callout-container">
              <h4 class="callout-title" >Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</h4>
              <div class="callout-copy">
                <p>Pellentesque adipiscing eros ut libero. Ut condimentum mi vel tellus. Suspendisse laoreet. Fusce ut est sed dolor gravida convallis. Morbi vitae ante. Vivamus ultrices luctus nunc. Suspendisse et dolor. Etiam dignissim. Proin malesuada adipiscing lacus. Donec metus. Curabitur gravida</p>
                <a href="#" class="uu-btn">Need Our Help?</a>
              </div>
              <img src="https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/10/12114425/Robby-Bowles.jpg" alt="" class="callout-img img-fluid">
            </div>
          </div>
          <!-- End Callout Section -->

          <!-- Our Process Section -->
          <div class="our-process-section uu-section black">
            <div class="ten-twenty-four row text-center clearfix">
              <div class="section-title">
                <h2>Our Process</h2>
                <h4>from concept to completion</h4>
                <hr class="center">
              </div>
            </div>
            <div class="ten-twenty-four row text-center clearfix uu-section">
              <!-- Timeline Item -->
              <div class="timeline-item">
                <div class="left copy" data-aos="fade-left">
                  <h5>THIS IS STEP ONE</h5>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
                <div class="step">
                  <div class="number" data-aos="fade-up">
                    <span>1</span>
                  </div>
                </div>
                <div class="right img" data-aos="flip-down">
                  <img src="https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/10/12114425/Robby-Bowles.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <!-- End Timeline Item -->
              <!-- Timeline Item -->
              <div class="timeline-item">
                <div class="left img" data-aos="flip-down">
                  <img src="https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/10/12114425/Robby-Bowles.jpg" alt="" class="img-fluid">
                </div>
                <div class="step">
                  <div class="number" data-aos="fade-up">
                    <span>2</span>
                  </div>
                </div>
                <div class="right copy" data-aos="fade-left">
                  <h5>THIS IS STEP TWO</h5>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
              </div>
              <!-- End Timeline Item -->
              <!-- Timeline Item -->
              <div class="timeline-item">
                <div class="left copy" data-aos="fade-left">
                  <h5>THIS IS STEP THREE</h5>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
                <div class="step">
                  <div class="number" data-aos="fade-up">
                    <span>3</span>
                  </div>
                </div>
                <div class="right img" data-aos="flip-down">
                  <img src="https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/10/12114425/Robby-Bowles.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <!-- End Timeline Item -->
              <!-- Timeline Item -->
              <div class="timeline-item">
                <div class="left img" data-aos="flip-down">
                  <img src="https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/10/12114425/Robby-Bowles.jpg" alt="" class="img-fluid">
                </div>
                <div class="step">
                  <div class="number" data-aos="fade-up">
                    <span>4</span>
                  </div>
                </div>
                <div class="right copy" data-aos="fade-left">
                  <h5>THIS IS STEP FOUR</h5>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
              </div>
              <!-- End Timeline Item -->
              <!-- Timeline Item -->
              <div class="timeline-item">
                <div class="left copy" data-aos="fade-left">
                  <h5>THIS IS STEP FIVE</h5>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                </div>
                <div class="step">
                  <div class="number" data-aos="fade-up">
                    <span>5</span>
                  </div>
                </div>
                <div class="right img" data-aos="flip-down">
                  <img src="https://d26toa8f6ahusa.cloudfront.net/wp-content/uploads/2018/10/12114425/Robby-Bowles.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <!-- End Timeline Item -->
              <!-- Timeline Item -->
              <div class="timeline-item">
                <div class="timline-final">
                  <h5 data-aos="fade-up">Kapow!</h5>
                  <p data-aos="fade-up" data-aos-delay="50">Welcome to the new U</p>
                </div>
              </div>
              <!-- End Timeline Item -->
            </div>
          </div>
          <!-- End Our Process Section -->

          <?php get_template_part( 'partials/c2a' ); ?>

         </main><!-- #main -->
     </div><!-- #primary -->

 </div>
 <?php get_footer(); ?>

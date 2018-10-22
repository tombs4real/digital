<?php
/**
 * The Resources archive template file.
 *
 * This is the template used to generate all of the content
 * on the home page of the site. It pulls in content from
 * a sidebar location that is specific to the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package umctheme2-child-digital
 */

 $files = rwmb_meta( 'team_fields_resource_icon', array( 'limit' => 1 ) );
 $file = reset( $files );

 // get_template_part( 'partials/loader' );
 get_header(); ?>
 <div class="container-fluid">


     <div id="primary" class="content-area">
         <main id="main" class="site-main clearfix" role="main">

          <div class="page-header" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/page-headers/page-header-resources.jpg');">
            <div class="page-title">
              <h1>Resources</h1>
              <hr>
            </div>
          </div>
          <div class="uu-section smoke">
              <div class="resource-item-container">

                <!-- Work Item -->
                <div class="resource-item uu-card theme-download">
                  <a href="#">
                  <div class="uu-card-body">
                    <div class="item" data-aos="fade-right">
                      <img src="http://localhost/dev/digital.utah.edu/wp-content/uploads/2018/10/phone-theme.png" alt="" class="phone-theme" >
                    </div>
                    <div class="item">
                      <img src="http://localhost/dev/digital.utah.edu/wp-content/uploads/2018/10/icon-wordpress.svg" alt="" class="resource-item-icon">
                      <h5>OFFICIAL UMC DIGITAL WORDPRESS THEME</h5>
                      <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                      <button type="button" name="button" class="uu-btn ebony">Download</button>
                    </div>
                  </div>
                  </a>
                </div>
                <!-- End Work Item  -->

              <?php while ( have_posts() ) : the_post(); ?>
                  <!-- Work Item -->
                  <div class="resource-item uu-card">
                    <a href="<?php echo get_permalink(); ?>">
                    <div class="uu-card-body">
                      <img src="<?php echo $file['url']; ?>" alt="" class="resource-item-icon">
                      <h5><?php the_title(); ?></h5>
                      <p><?php the_excerpt(); ?></p>
                    </div>
                    </a>
                  </div>
                  <!-- End Work Item  -->
              <?php endwhile; // end of the loop. ?>

              </div>



          </div>

          <?php get_template_part( 'partials/c2a' ); ?>

         </main><!-- #main -->
     </div><!-- #primary -->

 </div>
 <?php get_footer(); ?>

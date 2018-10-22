<?php
/**
 * The Work archive template file.
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

          <div class="page-header" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/page-headers/page-header-work.jpg');">
            <div class="page-title">
              <h1>WORK</h1>
              <hr>
            </div>
          </div>

 	        <div class="clearfix">
            <div class="work-item-container">

            <?php while ( have_posts() ) : the_post(); ?>
                <!-- Work Item -->
                <div class="work-item" data-aos="fade-up">
                  <a href="<?php echo get_permalink(); ?>">
                  <div class="work-item-content">
                    <h5><?php the_title(); ?></h5>
                  </div>
                  <?php if (has_post_thumbnail() ): ?>
                    <div class="work-item-image" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>
                  <?php endif ?>
                  </a>
                </div>
                <!-- End Work Item  -->
            <?php endwhile; // end of the loop. ?>

            </div>


 			    </div><!-- #ten twenty four -->

          <?php get_template_part( 'partials/c2a' ); ?>

         </main><!-- #main -->
     </div><!-- #primary -->

 </div>
 <?php get_footer(); ?>

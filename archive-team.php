<?php
/**
 * The Team archive template file.
 *
 * This is the template used to generate all of the content
 * on the home page of the site. It pulls in content from
 * a sidebar location that is specific to the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package umctheme2-child-digital
 */

// Get Metabox Fields
 $mb_position = rwmb_meta( $team_fields_position );


 get_header(); ?>
 <div class="container-fluid">


     <div id="primary" class="content-area">
         <main id="main" class="site-main clearfix" role="main">

          <div class="page-header" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/page-headers/page-header-team.jpg');">
            <div class="page-title">
              <h1>TEAM</h1>
              <hr>
            </div>
          </div>

 	        <div class="ten-twenty-four row clearfix">
            <div class="team-member-container uu-section">

            <?php while ( have_posts() ) : the_post(); ?>
                <!-- Team Member -->
                <div class="team-member-item">
                  <a href="<?php echo get_permalink(); ?>">
                  <div class="team-member-content">
                    <h5><?php the_title(); ?></h5>
                    <p><?php echo get_post_meta( get_the_ID(), 'team_fields_position', true);?></p>
                  </div>
                  <?php if (has_post_thumbnail() ): ?>
                    <div class="team-member-image" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>
                  <?php endif ?>
                  </a>
                </div>
                <!-- End Team Member -->
            <?php endwhile; // end of the loop. ?>

              <!-- Org Chart -->
              <div class="team-member-item org-chart-item">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-org-chart.svg" alt="" class="org-chart-icon">
                  <button type="button" name="button" class="uu-btn ghost white">View Org Chart</button>
                </a>
              </div>
              <!-- End Org Chart -->

            </div>

            <div class="entry-content">
              <?php
                $page_id=111;
                $post = get_post($page_id);
                $content = apply_filters('the_content', $post->post_content);
                echo $content;
              ?>
          	</div><!-- .entry-content -->

 			    </div><!-- #ten twenty four -->

         </main><!-- #main -->
     </div><!-- #primary -->

 </div>
 <?php get_footer(); ?>

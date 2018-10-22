<?php
/**
 * Work Single Post template file.
 *
 * This is the template used to generate all of the content
 * on the home page of the site. It pulls in content from
 * a sidebar location that is specific to the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package University of Utah
 */

 // Get Metabox Fields
$project_overview_title = rwmb_meta( 'team_fields_overview_title' );
$project_overview_subhead = rwmb_meta( 'team_fields_overview_subhead' );
$project_overview_copy = rwmb_meta( 'team_fields_overview_copy' );
$mobile_overview_title = rwmb_meta( 'team_fields_mobile_overview_title' );
$mobile_overview_subhead = rwmb_meta( 'team_fields_mobile_overview_subhead' );
$mobile_overview_copy = rwmb_meta( 'team_fields_mobile_overview_copy' );
$video_id = rwmb_meta( 'team_fields_work_video_id' );
$mobile_images = rwmb_meta( 'team_fields_work_mobile_img', array( 'limit' => 1 ) );
$mobile_img = reset( $mobile_images );

// get_template_part( 'partials/loader' );
get_header(); ?>
<div class="container-fluid">


    <div id="primary" class="content-area">
        <main id="main" class="site-main clearfix" role="main">

            <?php if ( ! dynamic_sidebar( 'sidebar-top' ) ) : endif; ?>

	        <?php if ( ! dynamic_sidebar( 'front-page' ) ) : endif; ?>

	        <div class=" row clearfix">
				  <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <!-- header -->
              <section class="work-post-header" <?php if (has_post_thumbnail() ): ?>style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');"<?php endif ?>>
                <h1 data-aos="fade-in"><?php the_title(); ?></h1>
              </section>
              <!-- end header -->
              <?php
                if( ! empty( $project_overview_title ) ) {
              ?>
              <!-- section -->
              <section class="work-overview uu-section">
                <div class="ten-twenty-four row clearfix">
                  <h2 data-aos="fade-up"><?php echo $project_overview_title; ?></h2>
                  <h3 class="subhead" data-aos="fade-up" data-aos-delay="50"><?php echo $project_overview_subhead; ?></h3>
                  <hr data-aos="fade-up" data-aos-delay="75">
                  <div data-aos="fade-up" data-aos-delay="100">
                    <?php echo $project_overview_copy; ?>
                  </div>
                </div>
              </section>
              <!-- end section -->
              <?php
                }
              ?>
              <?php
                if( ! empty( $video_id ) ) {
              ?>
              <section class="work-single-desktop-section">
                <!-- desktop preview -->
                <div class="desktop-preview" data-aos="fade-up">
                  <div class="desktop-container">
                    <div class="window">
                      <div class="marquee-video-container">
                        <div class="video" id="desktop_preview_vid" data-video-id="<?php echo $video_id; ?>"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end desktop preview -->
              </section>
              <?php
                }
              ?>
              <?php
                if( ! empty( $mobile_overview_title ) ) {
              ?>
              <!-- section -->
              <section class="work-single-mobile-section">
                <div class="mobile-container">
                  <div class="mobile-img" data-aos="zoom-in-right" data-aos-offset="100">
                    <img src="<?php echo $mobile_img['url']; ?>" alt="" class="img-fluid">
                  </div>
                  <div class="mobile-copy">
                    <h3 data-aos="fade-left"><?php echo $mobile_overview_title; ?></h3>
                    <h4 class="subhead" data-aos="fade-left" data-aos-delay="50"><?php echo $mobile_overview_subhead; ?></h4>
                    <hr data-aos="fade-left" data-aos-delay="75">
                    <div data-aos="fade-left" data-aos-delay="100">
                      <?php echo $mobile_overview_copy; ?>
                    </div>
                  </div>
                </div>
              </section>
              <!-- end section -->
              <?php
                }
              ?>
              <div class="ten-twenty-four row clearfix">
                <?php the_content(); ?>
              </div>

            </article><!-- #post-## -->
				  <?php endwhile; // end of the loop. ?>
			    </div>

            <?php get_template_part( 'partials/c2a' ); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div>
<?php get_footer(); ?>

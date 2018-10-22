<?php
/**
 * Contact Page template file.
 * Template Name: Contact Page
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

          <div class="page-header" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/page-headers/page-header-contact.jpg');">
            <div class="page-title">
              <h1><?php the_title(); ?></h1>
              <hr>
            </div>
          </div>

	        <div class="uu-section smoke row clearfix">
				  <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

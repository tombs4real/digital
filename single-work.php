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
                <h1><?php the_title(); ?></h1>
              </section>
              <!-- end header -->
              <!-- section -->
              <section class="work-overview uu-section">
                <div class="ten-twenty-four row clearfix">
                  <h2>Tanner Dance</h2>
                  <h3 class="subhead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                  <hr>
                  <p>
                    Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
                  </p>
                </div>
              </section>
              <!-- end section -->
              <!-- section -->
              <section class="work-desktop-preview">
                <div class="desktop-preview-video-container">
                  <div id="desktop_preview_vid"></div>
                </div>
              </section>
              <!-- end section -->
              <!-- section -->
              <section class="">

              </section>
              <!-- end section -->
              <!-- section -->
              <section class="">

              </section>
              <!-- end section -->
              <!-- section -->
              <section class="">

              </section>
              <!-- end section -->
            </article><!-- #post-## -->
				  <?php endwhile; // end of the loop. ?>
			    </div>

            <?php if ( ! dynamic_sidebar( 'sidebar-bottom' ) ) : endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div>
<?php get_footer(); ?>

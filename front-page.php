<?php
/**
 * The front page template file.
 * Template Name: front Page
 *
 * This is the template used to generate all of the content
 * on the home page of the site. It pulls in content from
 * a sidebar location that is specific to the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package University of Utah
 */
 // get_template_part( 'partials/loader' );
 get_header(); ?>
<section class="digital-marquee">
  <!-- desktop preview -->
  <div class="desktop-preview">
    <div class="desktop-container">
      <div class="headline">
        <img class="blocku" src="http://localhost/dev/digital.utah.edu/wp-content/uploads/2018/10/blocku.svg" alt="">
        <h1><span class="line-one">We Build</span><br><span class="line-two">Award Winning</span><br><span class="line-three">Digital Experiences</span></h1>
        <h2 class="marquee-subhead">THE #1 WEBSITE SERVICE PROVIDER FOR THE UNIVERSITY OF UTAH</h2>
        <a href="#" class="uu-btn marquee-btn">See Our Work</a>
      </div>
      <div class="project-name">
        CONTIUUM.UTAH.EDU
      </div>
      <img src="http://localhost/dev/digital.utah.edu/wp-content/uploads/2018/10/continuum-heart.png" alt="" class="hero">
      <div class="window">
        <div class="marquee-video-container">
          <div class="video" id="desktop_preview_vid" data-video-id="7-4GpL41DIE"></div>
        </div>
      </div>
    </div>

  </div>
  <!-- end desktop preview -->
</section>
<div class="container-fluid">

    <div id="primary" class="content-area">
        <main id="main" class="site-main clearfix" role="main">

            <?php if ( ! dynamic_sidebar( 'sidebar-top' ) ) : endif; ?>

	        <?php if ( ! dynamic_sidebar( 'front-page' ) ) : endif; ?>

	        <div class="ten-twenty-four row clearfix">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div><!-- #ten twenty four -->

      <?php get_template_part( 'partials/c2a' ); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div>
<?php get_footer(); ?>

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
?>
<div class="page-loader">
  <svg style="width:100%;height:100%;">
    <rect width="100%" height="100%" class="loader-bar" style="fill:none;stroke-width:2;stroke:#cc0000;" />
  </svg>
  <img class="logo" src="https://umc.utah.edu/wp-content/themes/umctheme/images/global/imagine_u.png" alt="">
</div>
<?php get_header(); ?>
<section style=" background: black;">
  <!-- desktop preview -->
  <div class="desktop-preview">
    <div class="desktop-container">
      <div class="headline">
        <img class="blocku" src="http://localhost/projects/digital.utah.edu/wp-content/uploads/2018/10/blocku.svg" alt="">
        <h1><span class="line-one">We Build</span><br><span class="line-two">Award Winning</span><br><span class="line-three">Digital Experiences</span></h1>
        <h2 class="marquee-subhead">THE #1 WEBSITE SERVICE PROVIDER FOR THE UNIVERSITY OF UTAH</h2>
        <a href="#" class="uu-btn marquee-btn">See Our Work</a>
      </div>
      <div class="project-name">
        CONTIUUM.UTAH.EDU
      </div>
      <img src="http://localhost/projects/digital.utah.edu/wp-content/uploads/2018/10/continuum-heart.png" alt="" class="hero">
      <div class="window">
        <div class="marquee-video-container">
          <div class="video" id="desktop_preview_vid" data-video-id="7-4GpL41DIE"></div>
        </div>
      </div>
    </div>
    <div class="video-glow">
      <div class="marquee-video-container">
        <div id="desktop_preview_glow"></div>
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

            <?php if ( ! dynamic_sidebar( 'sidebar-bottom' ) ) : endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div>
<?php get_footer(); ?>

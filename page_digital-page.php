<?php
/**
 * The Digital page template file.
 * Template Name: Digital Page
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

<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>

      
 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview"><div class="container">
        <h1><?php _e( 'This is Embarrassing', 'bootstrapwp' ); ?></h1>
        <p class="lead"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'bootstrapwp' ); ?></p>
                                        <?php get_search_form(); ?>
</div>
      </header>

	  

<?php get_footer(); ?>

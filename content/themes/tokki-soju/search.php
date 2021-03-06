<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ts
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-md-8 mb3 md-mb0">
          <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

            <?php
            if ( have_posts() ) : ?>

              <header class="page-header">
                <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
              </header><!-- .page-header -->

              <?php
              /* Start the Loop */
              while ( have_posts() ) : the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'templates/content', 'search' );

              endwhile;

              the_posts_navigation();

            else :

              get_template_part( 'templates/content', 'none' );

            endif; ?>

            </main><!-- #main -->
          </section><!-- #primary -->
        </div>

        <div class="col-xs-12 col-md-4">
          <?php get_sidebar(); ?>
        </div>

      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

<?php
get_footer();

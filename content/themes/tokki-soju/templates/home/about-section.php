<?php
/**
 * Template for the home page about section
 *
 * @package ts
 */
?>

<section id="<?php echo ts_get_section_id(); ?>" class="home-section about-section home-section--about">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12">

        <!-- Inner -->
        <div class="section-inner about-inner about-section__inner">

          <?php /* Title */
          if ( get_sub_field( 'section_title' ) ) { ?>
            <h2 class="section-title about-title about-section__title mt0 mb3 center"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php } ?>

          <div class="row">
            <?php
            /* Photo */
            if ( get_sub_field( 'section_photo' ) ) {
              $photo = get_sub_field( 'section_photo' );
              ?>
              <div class="col-xs-12 col-md-6 col-lg-5">
                <img class="section-photo about-photo about-section__photo block mb3" src="<?php echo $photo['sizes']['tall']; ?>" alt="<?php echo $photo['alt']; ?>">
              </div>
            <?php }

            // check for section headline and text
            if ( get_sub_field( 'section_headline' ) && get_sub_field( 'section_text' ) ) { ?>
              <div class="col-xs-12 col-md-6 col-lg-7 left-align">
                <?php
                /* Section Headline */
                if ( get_sub_field( 'section_headline' ) ) { ?>
                  <h3 class="section-headline about-headline about-section__headline h2 mt0 mbp"><?php the_sub_field( 'section_headline' ); ?></h3>
                <?php }

                /* Section Text */
                if ( get_sub_field( 'section_text' ) ) { ?>
                  <div class="section-text about-text about-section__text">
                    <?php the_sub_field( 'section_text' ); ?>
                  </div>
                <?php }
                ?>
              </div>
            <?php }
            ?>
          </div><!-- .row -->

        </div><!-- .section-inner -->

      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</section>
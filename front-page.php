<?php
/**
 * The custom template for the one-page style front page. Kicks in automatically.
 */

get_header(); ?>

	<div id="primary" class="content-area one-page">
		<main id="main" class="site-main" role="main">

                    
                    
                    <section id="call-to-action">
                        <div class="indent clear">
                            <?php 
                            $query = new WP_Query( 'pagename=learn-more' );
                            // The Loop
                            if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                            $query->the_post();
                                            echo '<div class="entry-content">';
                                            the_content();
                                            echo '</div>';
                                    }
                            }

                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                        </div><!-- .indent -->
                    </section><!-- #call-to-action -->
               
                    <section id="services">
                        <div class="indent clear">
                            <?php 
                            $query = new WP_Query( 'pagename=services' );
                                
                            // The Loop
                            if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                            $query->the_post();
                                            echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                            echo '<div class="entry-content">';
                                            the_content('');
                                            echo '</div>';
                                    }
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                        </div><!-- .indent -->
                    </section><!-- #services -->
                    
                    <section id="testimonials">
                         <div class="indent">
                            Testimonials
                         </div>
                    </section>
                    
                    <section id="portfolio">
                        <div class="indent clear">
                            <?php 
                            $query = new WP_Query( 'pagename=portfolio' );
                            // The Loop
                            if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                            $query->the_post();
                                            echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                            echo '<div class="entry-content">';
                                            the_content();
                                            echo '</div>';
                                    }
                            }

                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                        </div><!-- .indent -->
                    </section><!-- #meet -->
                        
                    
                    <section id="about">
                        <div class="indent clear">
                            <?php 
                            $query = new WP_Query( 'pagename=about' );
                            // The Loop
                            if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                            $query->the_post();
                                            echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                            echo '<div class="entry-content">';
                                            the_content();
                                            echo '</div>';
                                    }
                            }

                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                        </div><!-- .indent -->
                    </section><!-- #meet -->
                        
                    <section id="contact">
                        <div class="indent clear">
                                <?php 
                                $query = new WP_Query( 'pagename=contact' );
                                // The Loop
                                if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                                $query->the_post();
                                                echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                                echo '<div class="entry-content">';
                                                the_content();
                                                echo '</div>';
                                        }
                                }

                                /* Restore original Post Data */
                                wp_reset_postdata();
                                ?>
                        </div><!-- .indent -->
                    </section><!-- #contact -->
                    
  
                    
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

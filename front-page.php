<?php
/**
 * The custom template for the one-page style front page. Kicks in automatically.
 */

get_header(); ?>
    
    <!-- Enable more tag on static pages (in event front page is changed from index to static) -->
    <?php
    global $more;
    ?>
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
                    
                    <section id="testimonials">
                         <div class="indent">
                             <?php 
                                $args = array(
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'category_name' => 'testimonials'                                   
                                );
                                $query = new WP_query( $args );
                                if ( $query->have_posts() ) {
                                echo '<ul class="testimonials">';
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    $more = 0;
                                    echo '<li class="clear">';
                                    echo '<div class="testimonial-thumb">';
                                    the_post_thumbnail('testimonial-mug');
                                    echo '</div>';
                                    echo '<aside class="testimonial-text">';
                                    echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>';
                                    echo '<div class="testimonial-excerpt">';
                                    the_content('');
                                    echo '</div>';
                                    echo '</aside>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }

                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                             
                         </div>
                    </section>
                    
                    <section id="services">
                        <div class="indent clear">
                                <?php 
                                $query = new WP_Query( 'pagename=services' );
                                $services_id = $query->queried_object->ID;

                                // The Loop
                                if ( $query->have_posts() ) {
                                        while ( $query->have_posts() ) {
                                                $query->the_post();
                                                $more = 0;
                                                echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                                echo '<div class="entry-content">';
                                                the_content('');
                                                echo '</div>';
                                        }
                                }

                                /* Restore original Post Data */
                                wp_reset_postdata();

                                $args = array(
                                        'post_type' => 'page',
                                        'post_parent' => $services_id,
                                        'orderby' => 'menu_order'                                       
                                );
                                $services_query = new WP_Query( $args );

                                // The Loop
                                if ( $services_query->have_posts() ) {

                                        echo '<ul class="services-list">';
                                        while ( $services_query->have_posts() ) {
                                                $services_query->the_post();
                                                $more = 0;
                                                echo '<li class="clear">';
                                                echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
                                                echo '<h3 class="services-title">' . get_the_title() . '</h3>';
                                                echo '</a>';
                                                echo '<div class="services-lede">';
                                                the_content('Read more <i class="fa fa-arrow-circle-o-right"></i>');
                                                echo '</div>';
                                                echo '</li>';
                                        }
                                        echo '</ul>';
                                }

                                /* Restore original Post Data */
                                wp_reset_postdata();
                                ?>
                        </div><!-- .indent -->
                    </section>
                    
                    <section id="portfolio">
                         <div class="indent">
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
                        
                                $args = array(
                                    'posts_per_page' => 6,
                                    'orderby' => 'none',
                                    'category_name' => 'portfolio'                                   
                                );
                                $query = new WP_query( $args );
                                if ( $query->have_posts() ) {
                                    echo '<ul class="portfolio">';
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        echo '<li class="clear">';
                                        echo '<div class="portfolio-thumb">';
                                        the_post_thumbnail('portfolio-mug');
                                        echo '</div>';
                                        echo '<aside class="portfolio-text">';
                                        echo '<h3 class="portfolio-name">' . get_the_title() . '</h3>';
                                        echo '<div class="portfolio-excerpt">';
                                        the_content('');
                                        echo '</div>';
                                        echo '</aside>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }

                                /* Restore original Post Data */
                                wp_reset_postdata();
                            ?>
                             
                         </div>
                    </section>
                    
                    <section id="plans">
                        <div class="indent clear">
                            <?php 
                            $query = new WP_Query( 'pagename=plans' );
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

<?php get_header(); ?>

    <main>
        <?php 

            get_template_part('template-parts/page-hero');
         ?>

        <!--? Blog Area Start-->
        <section class="blog_area section-padding  single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                            <?php 
                            
                            while(have_posts()):the_post();
                        ?>
    

                            <div class="single-service">
                                <div class="single-offers">
                                    <?php the_post_thumbnail( $size = ' w-100'); ?>
                                </div>
                                <div class="single-service-details">
                                    <h1><?php the_title(); ?></h1>

                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <hr>

                        <?php endwhile; wp_reset_postdata(); ?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>


    <?php get_footer(); ?>
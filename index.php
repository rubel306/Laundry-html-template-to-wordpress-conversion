<?php get_header(); ?>

    <main>
        <?php 

            get_template_part('template-parts/page-hero');
         ?>

        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                            <?php 
                                while(have_posts() ) :the_post();
                            ?>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <?php the_post_thumbnail(array(' card-img rounded-0')); ?>
                                    <a href="#" class="blog_item_date">
                                        <h3>
                                            <?php echo get_the_date( 'd', $post->ID ); ?>
                                        </h3>
                                        <p>
                                            <?php  echo get_the_date( 'M', $post->ID ); ?>
                                        </p>

                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                        <h2 class="blog-head" style="color: #2d2d2d;"><?php the_title(); ?></h2>
                                    </a>
                                    <?php the_excerpt(); ?>
                                    <ul class="blog-info-link">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> 
                                                <?php echo get_the_category_list( ', '); ?>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>

                        <?php endwhile; ?>

                            <nav class="blog-pagination justify-content-center d-flex">
                                
                                <?php 
                                    the_posts_pagination( array(
                                        'prev_text'     =>' < ', 
                                        'next_text'     => ' > ', 
                                        'mid_size'      => 1, 
                                        'screen_reader_text'    => ' '
                                    ) );
                                ?>
                            </nav>
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
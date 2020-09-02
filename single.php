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
                                while(have_posts() ) :the_post();
                            ?>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <?php the_post_thumbnail(array(' card-img rounded-0')); ?>
                                    
                                </div>
                                <div class="blog_details">
                                    <h2 class="blog-head" style="color: #2d2d2d;"><?php the_title(); ?></h2>

                                    <ul class="blog-info-link">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> 
                                                <?php echo get_the_category_list( ', '); ?>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>

                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <hr>

                        <?php endwhile; ?>

                            <div class="navigation-top">
                                <div class="d-sm-flex justify-content-between text-center">
                                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                                  people like this</p>
                                  <div class="col-sm-4 text-center my-2 my-sm-0">
                                  </div>
                                  <ul class="social-icons">
                                   <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                   <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                 </ul>
                               </div>
                               <div class="navigation-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">

                                         <div class="thumb prev">
                                            <?php 
                                                $prevPost = get_previous_post();
                                                    $prevThumbnail = get_the_post_thumbnail( $prevPost->ID );
                                                    previous_post_link( '%link', $prevThumbnail );

                                            ?>
                                            </div> 
                                            <div class="detials">
                                               <p>Prev Post</p>
                                               <?php 
                                                
                                                    previous_post_link( $format = ' %link', $link = '%title', $in_same_term = false, $excluded_terms = '' );    
                                                     
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                            <div class="detials">
                                             <p>Next Post</p>
                                             <?php 
                                                
                                                next_post_link( $format = ' %link', $link = '%title', $in_same_term = false, $excluded_terms = '' )
                                                ?> 
                                            </div>
                                            <div class="thumb next">
                                              <?php 
                                                $next_Post = get_next_post();
                                                    $nextThumbnail = get_the_post_thumbnail( $next_Post->ID );
                                                    next_post_link( '%link', $nextThumbnail );

                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-author">
                                 <div class="media align-items-center">
                                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                      <div class="media-body">
                                       <a href="#">
                                        <h4><?php the_author(); ?></h4>
                                      </a>
                                      <p><?php echo get_the_author_meta('description'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php comments_template(); ?>

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
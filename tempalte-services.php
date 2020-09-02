<?php 

/* Template Name: Services Page  */
 ?> 

<?php get_header(); ?>

    <main>
        <?php 

            get_template_part('template-parts/page-hero');
            ?>

   

        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2 mt-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Our Services</span>
                            <h2>What Services We Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                	<?php 
                		$count = 0;

                		$service = new WP_Query(array(
                			'posts_per_page'		=> 4,
                			'post_type'				=> 'services'
                		));
                		
                		while($service->have_posts()):
                			$service->the_post();
                			$count++;
                	?>

                	<?php if($count % 2 == 1){ 	?>


                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <?php the_post_thumbnail( $size = ' w-100'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                	<?php if(get_field('upload_services_offer_icon')): ?>
                                    	<img src="<?php the_field('upload_services_offer_icon'); ?>" alt="">
                                	<?php endif; ?>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h5>
                                   <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{

                ?>


                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <?php if(get_field('upload_services_offer_icon')): ?>
                                    	<img src="<?php the_field('upload_services_offer_icon'); ?>" alt="">
                                	<?php endif; ?>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h5>
                                   <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <?php the_post_thumbnail( $size = ' w-100', $attr = '' ) ?>
                        </div>
                    </div>
                <?php }
                	endwhile;
                	wp_reset_postdata();
                 ?>



                </div>
            </div>
        </section>
        <!-- Offer-services End  -->




		<?php echo get_template_part( 'template-parts/footer-map'); ?>
    </main>
    
<?php get_footer(); ?>
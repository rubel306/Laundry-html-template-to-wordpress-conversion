<?php 

/* Template Name: Home  */
 ?> 

<?php get_header(); ?>





    <main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Quality laundry service in your city</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">We take care about cleenness of your cloth</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Explore Services</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->

        
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element"><?php the_field('our_process_badge'); ?></span>
                            <h2><?php the_field('our_process_section_title'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<?php 

                		if(have_rows('single_process')):
                			while(have_rows('single_process')): the_row();
                				$single_process_tile = get_sub_field('single_process_title');
                				$single_process_text = get_sub_field('single_process_text');
                				$single_process_icon = get_sub_field('single_process_icon');
                	?>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="<?php echo $single_process_icon; ?>" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html"><?php echo $single_process_tile; ?></a></h5>
                                <p><?php echo $single_process_text; ?></p>
                            </div>
                        </div>
                    </div>
                <?php  endwhile; endif; 
                wp_reset_postdata();

                ?>


                </div>
            </div>
        </section>
        <!-- Services End -->

        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">


                            <span class="element"><?php the_field('services_badge_text'); ?></span>
                            <h2><?php the_field('services_offer_title'); ?></h2>
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


        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/section_bg01.png">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">

                                <h2><?php the_field('call_to_action_title'); ?></h2>
                                <p><?php the_field('call_to_action_text'); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="<?php the_field('call_to_action_button_link'); ?>" class="btn wantToWork-btn">
                            	<?php if(get_field('do_you_want_to_add_button_icons') == 'Yes'):  ?>
                            	<img src="<?php the_field('call_to_action_button_icon'); ?>" alt=""> 
                            	<?php endif; ?>
                           		<?php the_field('call_to_action_button_text'); ?>
                           	
                        	</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->


        <!-- Testimonials_start -->
        <section class="testimonials-area testimonials-overly  position-relative">
            <div class="container">
                <div class="border-bottom section-padding40 ">
                    <div class="row">
                        <div class="col-xl-12 ">
                        	<?php 

                            		$testimonial = new WP_Query(array(
                            			'post_type'		=> 'testimonial', 
                            			'posts_per_page'	=> 1,
                            		));
                            	?>
                            	<?php while($testimonial->have_posts()):$testimonial->the_post(); ?>

                            <!-- testmonial-image -->
                            <div class="testmonial-nav text-center">
                            	

                                <div class="testmonial-thumb">
                                   <?php the_post_thumbnail(); ?>
                                </div>

                            </div>
                            <div class="testmonial-item-active text-center">

                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera"><?php the_content(); ?></p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - <?php the_title(); ?></p>
                                </div>


                            </div>
                        <?php endwhile; 
                        wp_reset_postdata();

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials_end -->


        <!--? Company achievement Start -->

        <section class="services-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element"><?php the_field('fun_fact_badge'); ?></span>
                            <h2><?php the_field('fun_fact_title'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<?php 
                		if(have_rows('fun_fact_items')):
                			while(have_rows('fun_fact_items')):the_row();
                				$fun_fact_number = get_sub_field('fun_fact_number');
                				$fun_fact_item_text = get_sub_field('fun_fact_item_text');
                	?>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span><?php echo $fun_fact_number; ?></span>
                                <p><?php echo $fun_fact_item_text; ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; endif; 
                wp_reset_postdata();

                ?>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-bt">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/company-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company achievement End -->

    <?php// endif; ?>


        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="<?php echo the_field('about_image'); ?>" alt="<?php the_field('about_title'); ?>">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2><?php the_field('about_title'); ?></h2>
                            </div>
                            <p class="mb-20">
                                <?php the_field('about_text'); ?>
                            </p>
                            

                            <a href="<?php the_field('about_button_link'); ?>" class="btn"><?php the_field('about_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
		<?php echo get_template_part( 'template-parts/footer-map'); ?>
    </main>
    
<?php get_footer(); ?>
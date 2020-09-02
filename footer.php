<?php global $laundry; ?>
    <footer>
        <!-- Footer Start-->
          <div class="footer-area footer-padding">
              <div class="container">
                  <div class="row d-flex justify-content-between">
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <?php 
                          if(is_active_sidebar( 'footer-one' )){
                            dynamic_sidebar( 'footer-one' );
                          }

                        ?>
                          <!-- social -->
                          <!-- <div class="footer-social">
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-pinterest-p"></i></a>
                          </div> -->
                      <!-- </div> -->
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                  <?php 
                      if(is_active_sidebar( 'footer-two' )){
                        dynamic_sidebar( 'footer-two' );
                      }

                    ?>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                  <?php 
                    if(is_active_sidebar( 'footer-three' )){
                      dynamic_sidebar( 'footer-three' );
                    }

                  ?>
              </div>
          </div>
      </div>
  </div>
  <!-- footer-bottom area -->
    <div class="footer-bottom-area section-bg2" data-background="<?php echo get_template_directory_uri();?>/assets/img/gallery/footer-bg.png">
      <div class="container">
          <div class="footer-border">
             <div class="row d-flex align-items-center">
                  <div class="col-xl-12 ">
                    <div class="footer-copy-right text-center">
                      <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           <?php echo $laundry['footer_text']; ?>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->

<script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/animated.headline.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/contact.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.form.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/mail-script.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="<?php echo get_template_directory_uri();?>/assets/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
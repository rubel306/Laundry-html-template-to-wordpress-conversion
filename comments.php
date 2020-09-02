<div class="comments-area">

	 <h4>


	 	<?php 
	 		if(get_comments_number() == 1 || get_comments_number() == 0){
	 			echo get_comments_number(). " Comment";
	 		}

	 	else{
	 		echo get_comments_number(). " Comments";
	 	}
	 	?> 

	 </h4>

	 <div class="comment-list">
	 	<?php wp_list_comments() ;?>
		<div class="single-comment justify-content-between d-flex">
			<div class="user justify-content-between d-flex">
			   	
			    <div class="thumb">
			     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/comment_1.png" alt="">
			   </div>
			   <div class="desc">
				    <p class="comment">
				      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
				      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
				    </p>
				    <div class="d-flex justify-content-between">
					     <div class="d-flex align-items-center">
					       <h5>
					        <a href="#">Emilly Blunt</a>
					      </h5>
					      <p class="date">December 4, 2017 at 3:12 pm </p>
					    </div>
					    <div class="reply-btn">
					     <a href="#" class="btn-reply text-uppercase">reply</a>
					   </div>
				    </div>
				</div>

			</div>
		</div>
	</div>

	<?php comment_form(); ?>

</div>
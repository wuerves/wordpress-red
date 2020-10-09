<?php
/**
Template Name: 宽屏模版
 */
$page_side_bar = kratos_option('page_side_bar');
$page_side_bar = (empty($page_side_bar)) ? 'right_side' : $page_side_bar;
get_header();
get_header('banner'); ?>




<div id="kratos-blog" class="kratos-page-default">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section ">
				<h1 class="kratos-entry-title text-center"><?php the_title(); ?></h1>
				
			</div>
		</div>
	
		<div class="container">
		<div class="row">
          
           <?php echo $post->post_content;?>
         </div>
		
	</div>
		</div>
	
</div>




<?php get_footer(); ?>
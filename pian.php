<?php
/*
Template Name:  pianduan
*/

$page_side_bar;
get_header();
get_header('banner'); ?>




<div id="kratos-blog" class="kratos-page-default">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section ">
				<h1 class="kratos-entry-title text-center">片段-奇遇网，创意正能量</h1>
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=80&cat=42')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a href="<?php the_permalink() ?>">
						<i class="fa fa-heart-o"></i> 
						<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						
						</div>
						<?php kratos_blog_thumbnail_new() ?>
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>">
						<h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						<p><?php echo wp_trim_words(get_the_excerpt(), 32); ?></p>
						
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center animate-box">
				<a href="/category/pianduan" class="btn btn-primary view-more-1">查看更多</a>
			</div>
		</div>
	</div>
</div>

						



<?php get_footer(); ?>
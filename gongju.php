<?php
/*
Template Name: 工具
*/

$page_side_bar;
get_header();
get_header('banner'); ?>




<div id="kratos-blog" class="kratos-page-default">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3><?php echo "工具"; ?></h3>
				<p><?php echo "站长工具导航皆在为站长提供全面的站长工具"; ?></p>
			</div>
		</div>
	</div>
		<div class="container">
<div class="osc-res-tab tabbable   osc-tabs-left">
<ul class="nav osc-res-nav nav-tabs osc-tabs-left-ul" id="oscitas-restabs-2--83376">
<li class="active"><a href="#ert_pane2-0" data-toggle="tab" aria-expanded="false">工具</a></li>
<li class=""><a href="#ert_pane2-1" data-toggle="tab" aria-expanded="false">seo相关工具</a></li>
<li class=""><a href="#ert_pane2-2" data-toggle="tab" aria-expanded="false">php开发编辑器</a></li>
<li class=""><a href="#ert_pane2-3" data-toggle="tab" aria-expanded="true">站长平台相关</a></li>
<li class=""><a href="#ert_pane2-4" data-toggle="tab" aria-expanded="true">程序员辅助工具</a></li>
<div class="qyb-login"><a href="" onclick="javascript:window.open('https://promotion.aliyun.com/ntms/yunparter/invite.html?userCode=ds9psss5', '_blank')" class="register">领取阿里云1888代金卷</a></div>

</ul>

<div style="clear:both;width: 100%;">
<ul class="tab-content" id="oscitas-restabcontent-2--83376"style="
    padding-left: 0px;
">
<li class="tab-pane  active" id="ert_pane2-0"><div id="kratos-blog" class="kratos-page-default">

	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=30&cat=95')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a href="<?php the_permalink() ?>">
						<i class="fa fa-heart-o"></i> 
						<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						
						</div>
						
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		
	</div>

	
</li>

<li class="tab-pane" id="ert_pane2-1"><div id="kratos-blog" class="kratos-page-gray">

	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=30&cat=733')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a href="<?php the_permalink() ?>">
						<i class="fa fa-heart-o"></i> 
						<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						
						</div>
						
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		
	</div>
	
	
	</li>
<li class="tab-pane" id="ert_pane2-2"><div id="kratos-blog" class="kratos-page-default">

	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=30&cat=732')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a href="<?php the_permalink() ?>">
						<i class="fa fa-heart-o"></i> 
						<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						
						</div>
						
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		
	</div>
	
	
	</li>
<li class="tab-pane" id="ert_pane2-3"><div id="kratos-blog" class="kratos-page-default">

	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=30&cat=734')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a href="<?php the_permalink() ?>">
						<i class="fa fa-heart-o"></i> 
						<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						
						</div>
						
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		
	</div>

	
	
	</li>
<li class="tab-pane" id="ert_pane2-4"><div id="kratos-blog" class="kratos-page-default">

	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=30&cat=735')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a href="<?php the_permalink() ?>">
						<i class="fa fa-heart-o"></i> 
						<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						
						</div>
						
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		
	</div>

	
</li>
</ul>
</div>
</div>
</div>
</div>









<?php get_footer(); ?>
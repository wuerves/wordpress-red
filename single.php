<?php
/**
 * The template for displaying all single posts and attachments
 * 
 * @author Vtrois <seaton@vtrois.com>
 * @license GPL-3.0
 */
$sidebar = kratos_option('side_bar');
$sidebar = (empty($sidebar)) ? 'right_side' : $sidebar;
get_header();
get_header('banner'); ?>
<div id="kratos-blog-post" style="background:<?php echo kratos_option('background_index_color', '#f5f5f5'); ?>">
	<div class="container">
		<div class="row">
			<?php if($sidebar == 'left_side'){ ?>
			<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                <div id="sidebar">
                    <?php dynamic_sidebar('sidebar_tool'); ?>
                </div>
            </aside>
			<?php } ?>
            <section id="main" class='<?php echo ($sidebar == 'single') ? 'col-md-12' : 'col-md-8'; ?>'>
				<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
				<article> 
					
					<div class="kratos-hentry kratos-post-inner clearfix">
						<header class="kratos-entry-header">
							<h1 class="kratos-entry-title text-center"><?php the_title(); ?></h1>
							<div class="kratos-post-meta text-center">
								<span>
								<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
				                <i class="fa fa-commenting-o"></i> <?php comments_number('0', '1', '%'); ?>条评论
				                <i class="fa fa-eye"></i> <?php echo kratos_get_post_views();?>次阅读
				                <i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?>人点赞
								
								</span>
							</div>
						</header>
						<div class="kratos-post-content">
						<?php if ( kratos_option('ad_show_1') ){ ?>
							<div class="gg"><a href="https://cloud.tencent.com/redirect.php?redirect=10004&cps_key=09ff33cfb418db124451885bff0af0c4" rel="nofollow" target="_blank"><h1>广告</h1></a></div>
	                    <?php } ?>
                        <?php the_content(); ?>
						<?php if ( kratos_option('ad_show_2') ){ ?>
							 <div class="gg2"><a href="https://chuangke.aliyun.com/invite?userCode=ds9psss5" rel="nofollow" target="_blank"><h1>广告</h1></a></div>
	                    <?php } ?>
						</div>
						<footer class="kratos-entry-footer clearfix">
							<div class="post-like-donate text-center clearfix" id="post-like-donate">
							<?php if ( kratos_option( 'post_like_donate' ) ) { ?>
				   			<a href="https://www.qiyuwg.com/tougao" class="Donate"><i class="fa fa-bitcoin"></i> 投稿</a>
							<?php } ?>
				   			<a href="javascript:;" id="btn" data-action="love" data-id="<?php the_ID(); ?>" class="Love <?php if(isset($_COOKIE['love_'.$post->ID])) echo 'done';?>" ><i class="fa fa-thumbs-o-up"></i> 点赞</a>
							<?php if ( kratos_option( 'post_share', true ) ) { ?>
							<a href="javascript:;"  class="Share" ><i class="fa fa-share-alt"></i> 分享</a>
								<?php require_once( get_template_directory() . '/inc/share.php'); ?>
							<?php } ?>
								
				    		</div>
							<div class="footer-tag clearfix">
								<div class="pull-left">
								<i class="fa fa-tags"></i>
								<?php if ( get_the_tags() ) { the_tags('', ' ', ''); } ?>
								</div>
							</div>
						</footer>
					</div>
					
					<nav class="navigation post-navigation clearfix" role="navigation">
						<?php
						$prev_post = get_previous_post(TRUE);
						if(!empty($prev_post)):?>
						<div class="nav-previous clearfix">
							<a title="<?php echo $prev_post->post_title;?>" href="<?php echo get_permalink($prev_post->ID);?>">&lt; 上一篇</a>
						</div>
						<?php endif;?>
						<?php
						$next_post = get_next_post(TRUE);
						if(!empty($next_post)):?>
						<div class="nav-next">
							<a title="<?php echo $next_post->post_title;?>" href="<?php echo get_permalink($next_post->ID);?>">下一篇 &gt;</a>
						</div>
						<?php endif;?>
		                </nav>
					
					<div id="respond" class="comment-respond">
		             <h4>相关文章</h4>
                     <ul class="related_posts">
<?php
$post_num = 8;
$exclude_id = $post->ID;
$posttags = get_the_tags(); $i = 0;
if ( $posttags ) {
	$tags = ''; foreach ( $posttags as $tag ) $tags .= $tag->term_id . ',';
	$args = array(
		'post_status' => 'publish',
		'tag__in' => explode(',', $tags),
		'post__not_in' => explode(',', $exclude_id),
		'caller_get_posts' => 1,
		'orderby' => 'comment_date',
		'posts_per_page' => $post_num,
	);
	query_posts($args);
	while( have_posts() ) { the_post(); ?>
		<li><a rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
	<?php
		$exclude_id .= ',' . $post->ID; $i ++;
	} wp_reset_query();
}
if ( $i < $post_num ) {
	$cats = ''; foreach ( get_the_category() as $cat ) $cats .= $cat->cat_ID . ',';
	$args = array(
		'category__in' => explode(',', $cats),
		'post__not_in' => explode(',', $exclude_id),
		'caller_get_posts' => 1,
		'orderby' => 'comment_date',
		'posts_per_page' => $post_num - $i
	);
	query_posts($args);
	while( have_posts() ) { the_post(); ?>
		<li><a rel="bookmark" href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
	<?php $i++;
	} wp_reset_query();
}
if ( $i  == 0 )  echo '<li>没有相关文章!</li>';
?>
</ul>
			</div>
						
					<?php comments_template(); ?>
				</article>
				<?php endif; ?>
			</section>

			

				
		
			
			
			
			
			
			
			
			
			
			
			<?php if($sidebar == 'right_side'){ ?>
			
			
				<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
	                <div id="sidebar">
					
					<span><?php dynamic_sidebar('sidebar_tool'); ?></span>
	                </div>
	            </aside>
			<?php } ?>
		</div>
		
		
	</div>
</div>
<?php get_footer(); ?>
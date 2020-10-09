<?php
/*
Template Name: 首页
*/

$page_side_bar;
get_header();
get_header('banner'); ?>


<div id="kratos-blog-post" style="background: #f2f2f2;">
	<div class="container">
		<div class="row">
			<?php if($page_side_bar == 'left_side'){ ?>
				<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
	                <div id="sidebar">
	                    <?php dynamic_sidebar('sidebar_tool'); ?>
	                </div>
	            </aside>
			<?php } ?>
			
<div style="width:100%;text-align:center">

<a target="_blank" rel="nofollow" href="<?php echo kratos_option('krsort_hm_tx2'); ?>" title="<?php echo kratos_option('krsort_hm_tx1'); ?>"> <img src="<?php echo kratos_option('krsort_hm_img'); ?>" alt="<?php echo kratos_option('krsort_hm_tx1'); ?>" > </a>
</div>
<div class="search bar">

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

    <div class="input-group">
     <span class="input-group-btn">
       <select name="cat" class="btn btn-default" style="padding-left: 5px;padding-right: 0px;height: 42px;border: 2px solid #c5464a;border-right: 0;border-radius: 5px 0 0 5px;">
               <option>全站</option>
 <option value="<?php echo kratos_option('krsort_hm_bk1'); ?>" selected="selected"><?php echo kratos_option('krsort_hm_tx3'); ?></option>
           <option value="<?php echo kratos_option('krsort_hm_bk2'); ?>"><?php echo kratos_option('krsort_hm_tx6'); ?></option>
		    <option value="<?php echo kratos_option('krsort_hm_bk3'); ?>"><?php echo kratos_option('krsort_hm_tx9'); ?></option>
		   
          </select>
     </span>
     <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
</div>

    <button class="vintage9" type="submit">搜索</button></form>
	
</div>

	
<div class="osc-res-tab tabbable   osc-tabs-left" style="padding-bottom: 30px;">
<div style="clear:both;width: 100%;">
<ul class="nav osc-res-nav nav-tabs osc-tabs-left-ul" id="oscitas-restabs-2--83376" >
<li class="active"><a href="#ert_pane2-0" data-toggle="tab" aria-expanded="false"><?php echo kratos_option('krsort_hm_tx3'); ?></a></li>
<li class=""><a href="#ert_pane2-1" data-toggle="tab" aria-expanded="false"><?php echo kratos_option('krsort_hm_tx6'); ?></a></li>
<li class=""><a href="#ert_pane2-2" data-toggle="tab" aria-expanded="false"><?php echo kratos_option('krsort_hm_tx9'); ?></a></li>


</ul>
</div>

<div style="clear:both;width: 100%;">
<ul class="tab-content" id="oscitas-restabcontent-2--83376"style="
    padding-left: 0px;
">
<li class="tab-pane  active" id="ert_pane2-0">
<div id="kratos-blog" class="kratos-page-default">
	<div class="container">
		<div class="row">
     
			<?php query_posts('showposts=8&cat=' . kratos_option('krsort_hm_bk1') . '')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"> </div>
						<div class="kratos-category"><a>
						<i class="fa fa-heart-o"></i>
							<?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						</div>
					
                    
<?php kratos_blog_thumbnail_new() ?>
						
						
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>">
						<h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 28,"..."); ?></h3></a>
						<p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center ">
				<a href="<?php echo kratos_option('krsort_hm_tx5'); ?>" class="btn btn-primary view-more-1">查看更多</a>
			</div>
		</div>
	</div>
</div></li>

<li class="tab-pane" id="ert_pane2-1"><div id="kratos-blog" class="kratos-page-default">
	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=8&cat=' . kratos_option('krsort_hm_bk2') . '')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a><i class="fa fa-heart-o"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						</div>
						<?php kratos_blog_thumbnail_new() ?>
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?></h3></a>
						<p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center ">
				<a href="<?php echo kratos_option('krsort_hm_tx8'); ?>" class="btn btn-primary view-more-1">查看更多</a>
			</div>
		</div>
	</div>
</div></li>
<li class="tab-pane" id="ert_pane2-2"><div id="kratos-blog" class="kratos-page-default">
	
	<div class="container">
		<div class="row">
			<?php query_posts('showposts=8&cat=' . kratos_option('krsort_hm_bk3') . '')?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 ">
				<div class="kratos-post ">
					<div class="kratos-post-image">
						<div class="kratos-overlay"></div>
						<div class="kratos-category"><a><i class="fa fa-heart-o"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?></a>
						</div>
						<?php kratos_blog_thumbnail_new() ?>
					</div>
					<div class="kratos-post-text">
						<a href="<?php the_permalink() ?>"><h3 class="text-center"><?php echo mb_strimwidth(get_the_title(), 0, 23,"..."); ?></h3></a>
						
						<p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix visible-sm-block"></div>
			<?php endwhile;?>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center ">
				<a href="<?php echo kratos_option('krsort_hm_tx11'); ?>" class="btn btn-primary view-more-1">查看更多</a>
			</div>
		</div>
	</div>
</div></li>

 </div></div>  </div>




<div id="kratos-blog" class="kratos-page-default">
<div class="sbox2">
<div class="container">
            <div class="sbox2-tab">
                <div class="slideTxtBox">
                    <div class="hd">
					 <ul><li><a href="<?php echo kratos_option('krsort_hm_tx14'); ?>" title="<?php echo kratos_option('krsort_hm_tx3'); ?>"><?php echo kratos_option('krsort_hm_tx12'); ?></a></li></ul>
                       
                    </div>
					
                    <div class="bd">
					
                        <ul style="display: block;">
						<?php query_posts('showposts=12&cat=' . kratos_option('krsort_hm_bk4') . '')?> 
			<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 55,"..."); ?>"><i>
</i><?php echo mb_strimwidth(get_the_title(), 0, 55,"..."); ?></a> <span><?php the_time('Y年n月j日');?></span>
</li>
<?php endwhile;?>

                        </ul>

                       

                    </div>
                </div>

            </div>

            <div class="sbox2-tab fr">
                <div class="slideTxtBox">
                    <div class="hd">
                       <ul><li><a href="<?php echo kratos_option('krsort_hm_tx17'); ?>" title="<?php echo kratos_option('krsort_hm_tx15'); ?>"><?php echo kratos_option('krsort_hm_tx15'); ?></a></li></ul>
                    </div>
                    <div class="bd">
                        <ul style="display: block;">
<?php query_posts('showposts=12&cat=' . kratos_option('krsort_hm_bk5') . '')?> 
			<?php while (have_posts()) : the_post(); ?>
			<li>
<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?>"><i>
</i><?php echo mb_strimwidth(get_the_title(), 0, 55,"..."); ?></a> 
<span><?php the_time('Y年n月j日');?></span>

</li>
<?php endwhile;?>

                        </ul>

                

                    </div>
                </div>

            </div>
			<div class="sbox2-tab fr">
                <div class="slideTxtBox">
                    <div class="hd">
                       <ul><li><a href="<?php echo kratos_option('krsort_hm_tx20'); ?>" title="<?php echo kratos_option('krsort_hm_tx18'); ?>"><?php echo kratos_option('krsort_hm_tx18'); ?></a></li></ul>
                    </div>
                    <div class="bd">
                        <ul style="display: block;">
<?php query_posts('showposts=12&cat=' . kratos_option('krsort_hm_bk6') . '')?> 
			<?php while (have_posts()) : the_post(); ?>
			<li>
<a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 25,"..."); ?>"><i>
</i><?php echo mb_strimwidth(get_the_title(), 0, 55,"..."); ?></a> 
<span><?php the_time('Y年n月j日');?></span>

</li>
<?php endwhile;?>

                        </ul>

              

                    </div>
                </div>

            </div>

        </div>
</div>
</div>


<!--links-->
<div class="container"><p><ul>友情链接: <?php get_links(4, ' | <span>', '</span>', '', TRUE, 'id', FALSE); ?></ul></p></div>
<!--end links-->
</div>
<?php get_footer(); ?>
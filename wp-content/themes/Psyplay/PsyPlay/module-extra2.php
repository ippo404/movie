<?php $active = get_option('2extramodule2'); if ($active == "true") { ?>
<?php if ($cat = get_option('2extramodule2_cat')) { ?>
 <!--latest episodes-->
<div class="movies-list-wrap mlw-latestmovie">
<div class="ml-title">
<span class="pull-left"><?php if($title = get_option('2extramodule2_title')){ echo $title; } else { echo 'Extra Module 2'; }?> <i class="fa fa-chevron-right ml10"></i></span>
<?php  $category_link = get_category_link( $cat ); ?>
<a href="<?php echo esc_url( $category_link ); ?>" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<div class="clearfix"></div>
</div>
<div class="movies-list movies-list-full tab-pane in fade active">
<?php 
$cat = get_option('2extramodule2_cat');
$postnum = get_option('2extramodule2_num'); 
$catquery = new WP_Query( 'cat='.$cat.'&posts_per_page='.$postnum.'' );
while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php   $posterurl = info_movie_get_meta('poster_url'); if(!empty($posterurl)) {
$img = $posterurl;
$imgsrc = $img;
}elseif (has_post_thumbnail()) {
$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');
$imgsrc = $imgsrc[0];
} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
foreach($postimages as $postimage) {
$imgsrc = wp_get_attachment_image_src($postimage->ID, 'medium');
$imgsrc = $imgsrc[0];
}
} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
$imgsrc = $match[1];
} else {
if($img = get_post_custom_values($imagefix)){
$imgsrc = $img[0];
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
} 
} ?>
<?php include 'includes/home/item.php'; ?>

		
<?php  endwhile; ?>			
<div class="clearfix"></div>
</div>
</div>
 <!--/latest episodes-->
 <?php } ?>		
 <?php } ?>		
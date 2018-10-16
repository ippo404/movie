<?php $active = get_option('tvmodule'); if ($active == "true") { ?>
 <!--tvseries-->
<div class="movies-list-wrap mlw-latestmovie">
<div class="ml-title">
<span class="pull-left"><?php if($title = get_option('latesttv_title')){ echo $title; } else { echo 'Latest TV Series'; }?> <i class="fa fa-chevron-right ml10"></i></span>
<a href="<?php bloginfo('url'); ?>/series" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<div class="clearfix"></div>
</div>
<div class="movies-list movies-list-full tab-pane in fade active">
<?php
$ltvnum = get_option('latesttv_num');
$active = get_option('tvmodule'); if ($active == "true") {
if( is_home() ){
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( array('posts_per_page'=>$ltvnum,'post_type'=>array('tvshows',),'paged'=>$paged ) ); } } ?>
<?php  if (have_posts()) : ?>
<?php post_movies_true(); ?>
<?php while (have_posts()) : the_post(); 
if(get_option('edd_sample_theme_license_key')) { ?>
<?php  $posterurl = series_get_meta('poster_url'); if(!empty($posterurl)) {
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

<?php } endwhile; ?>						
<?php endif; ?>
<div class="clearfix"></div>
</div>
</div>
 <!--/ tvseries-->
 <?php } ?>			
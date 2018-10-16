<?php $active = get_option('sugg-featured-mov'); if ($active == "enable") { ?>
<?php $filter = get_option('sugg-filterby-cat'); if ($filter == "true")   {?>
<div id="movie-featured" class="movies-list movies-list-full tab-pane in fade">
<?php 
$cat = get_option('sugg_featured_mov_id');
$postnum = get_option('sugg_num');
$catquery = new WP_Query( 'cat='.$cat.'&posts_per_page='.$postnum.'' );
while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php  if (has_post_thumbnail()) {
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
<?php include 'item.php'; ?>
<?php  endwhile; ?>						

	
<div class="clearfix"></div>
</div>
<?php } else {?>
<div id="movie-featured" class="movies-list movies-list-full tab-pane in fade">

<?php 
$postnum = get_option('sugg_num');
$year = date ("Y"); query_posts(array(('release-year') => $year, 'posts_per_page' => 1, 'post_type'=>array('post',), 'showposts' => $postnum)); ?>
<?php while (have_posts()) : the_post(); ?>
<?php  if (has_post_thumbnail()) {
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
<?php include 'item.php'; ?>
<?php  endwhile; ?>		
<div class="clearfix"></div>
</div>		
<?php } }?>
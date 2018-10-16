<?php 
if (has_post_thumbnail()) {
$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
$imgsrc = $imgsrc[0];
} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
foreach($postimages as $postimage) {
$imgsrc = wp_get_attachment_image_src($postimage->ID, 'full');
$imgsrc = $imgsrc[0];
}
} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
$imgsrc = $match[1];
} else {
if($img = series_get_meta('poster_url')){
$imgsrc = $img;
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
} 
} ?>
<div class="thumb mvic-thumb" style="background-image: url();">
<img itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php echo $imgsrc; $imgsrc = ''; ?>" class="hiddenz" style="width: 140px; height: 210px;">
</div>
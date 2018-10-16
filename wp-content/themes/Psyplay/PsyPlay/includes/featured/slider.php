<?php $active = get_option('filterby-cat'); if ($active == "enable") { ?>
<div class="swiper-wrapper">
<?php 
$cat = get_option('estrenos_cat');
$postnum = get_option('slider_num');
$catquery = new WP_Query( 'cat='.$cat.'&showposts='.$postnum.'&posts_per_page='.$postnum.'' );
while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php   if (has_post_thumbnail()) {
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
if($img = info_movie_get_meta('featureds_img')){
$imgsrc = $img;
}elseif ($img = info_movie_get_meta('fondo_player')){
$imgsrc = $img;
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
}
}
?>
<div class="swiper-slide" style="background-image: url('<?php echo $imgsrc; $imgsrc = ''; ?>'); width: 100%;" data-swiper-slide-index="5">
<a href="<?php the_permalink() ?>" class="slide-link" title="<?php the_title(); ?>"></a>
<span class="slide-caption">
<h2><?php the_title(); ?></h2>
<p class="sc-desc"> <?php the_excerpt(); ?></p>
<div class="slide-caption-info">
<div class="block"><strong><?php _e('Genre:', 'psythemes'); ?></strong>
<?php the_category(',&nbsp;',''); ?></div>
<?php if($values = get_post_custom_values("Runtime")) { ?><div class="block"><strong><?php _e('Duration:', 'psythemes'); ?></strong> <?php echo $values[0]; ?></div><?php } ?>
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, $year_estreno ))) {  ?><div class="block"><strong><?php _e('Release:','psythemes'); ?></strong> <?php echo $mostrar; ?></div><?php } ?>
<?php if($values = get_post_custom_values("imdbRating")) { ?> <div class="block"><strong><?php _e('IMDb', 'psythemes'); ?></strong> <?php echo $values[0]; ?></div><?php } ?>
</div>
<a href="<?php the_permalink() ?>">
<div class="btn btn-successful mt20"><?php _e('Watching', 'psythemes'); ?></div>
</a>
</span>
</div>
<?php endwhile; ?>
</div>
<?php } else { ?>
<div class="swiper-wrapper">
<?php 
$postnum = get_option('slider_num');
$year = date ("Y"); query_posts(array(('release-year') => $year, 'posts_per_page' => 1, 'post_type'=>array('post',), 'showposts' => $postnum)); ?>
<?php while (have_posts()) : the_post(); ?>
<?php   
$img = get_template_directory_uri() . '/images/no_img.png';
    $imgsrc = $img;
if (has_post_thumbnail()) {
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
if($img = info_movie_get_meta('featureds_img')){
$imgsrc = $img;
}elseif ($img = info_movie_get_meta('fondo_player')){
$imgsrc = $img;
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
}
}
?>
<div class="swiper-slide" style="background-image: url('<?php echo $imgsrc; ?>'); width: 100%;" data-swiper-slide-index="5">
<a href="<?php the_permalink() ?>" class="slide-link" title="<?php the_title(); ?>"></a>
<span class="slide-caption">
<h2><?php the_title(); ?></h2>
<p class="sc-desc">  <?php the_excerpt(); ?></p>
<div class="slide-caption-info">
<div class="block"><strong><?php _e('Genre:', 'psythemes'); ?></strong>
<?php the_category(',&nbsp;',''); ?></div>
<?php if($values = get_post_custom_values("Runtime")) { ?><div class="block"><strong><?php _e('Duration:', 'psythemes'); ?></strong> <?php echo $values[0]; ?></div><?php } ?>
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, $year_estreno ))) {  ?><div class="block"><strong><?php _e('Release:', 'psythemes'); ?></strong> <?php echo $mostrar; ?></div><?php } ?>
<?php if($values = get_post_custom_values("imdbRating")) { ?> <div class="block"><strong><?php _e('IMDb:', 'psythemes'); ?></strong> <?php echo $values[0]; ?></div><?php } ?>
</div>
<a href="<?php the_permalink() ?>">
<div class="btn btn-successful mt20"><?php _e('Watching', 'psythemes'); ?></div>
</a>
</span>
</div>
<?php endwhile; ?>
</div>
<?php } ?>
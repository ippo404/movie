<div class="movies-list-wrap mlw-related">
                <div class="ml-title ml-title-page">
                    <span><?php if($title = get_option('related-movie-title')) {?><?php echo $title; } else { echo 'You May Also Like'; }?></span>
                </div>
                <div class="movies-list movies-list-full">
				<?php
 

$cat = get_the_category(); 
$cat = $cat[0]; 
$cat = $cat->cat_ID;
$post = get_the_ID();
$args = array('cat'=>$cat, 'orderby' => 'rand', 'showposts' => $relmovie,'post__not_in' => array($post));
$related = new WP_Query($args); 
if($related->have_posts()) {
while($related->have_posts()) : $related->the_post();
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
if($img = get_post_custom_values($imagefix)){
$imgsrc = $img[0];
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
} 
} ?>
                                      <div data-movie-id="18721" class="ml-item">
            <a href="<?php the_permalink() ?>" data-url="" class="ml-mask jt" data-hasqtip="112" oldtitle="<?php the_title(); ?>" title="">
			
                                   <?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'quality'))) {  ?> <span class="mli-quality"><?php echo $mostrar; ?></span><?php } ?>
                
                <img data-original="<?php echo $imgsrc; $imgsrc = ''; ?>" class="lazy thumb mli-thumb" alt="<?php the_title(); ?>">
                <span class="mli-info"><h2><?php the_title(); ?></h2></span>
            </a>
			
			<div id="hidden_tip">
			<div id="" class="qtip-title"><?php the_title(); ?></div>
			<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'quality'))) {  ?><div class="jtip-quality"><?php echo $mostrar; ?></div><?php } ?>
<div class="jtip-top">
   <?php if($values = info_movie_get_meta("imdbRating")) { ?> <div class="jt-info jt-imdb">  IMDb: <?php echo $values; ?></div><?php } ?>
   <?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'release-year' ))) {  ?> <div class="jt-info"><?php echo get_the_term_list($post->ID, 'release-year', '', '', ''); ?></div><?php } ?>
      <?php if($values = get_post_custom_values("Runtime")) { ?><div class="jt-info"><?php echo $values[0]; ?></div><?php } ?>
    <div class="clearfix"></div>
</div>
 <?php the_excerpt(); ?>

     <?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'country' ))) {  ?> <p><div class="block"><?php echo get_the_term_list($post->ID, 'country', 'Country: ', ',', ''); ?>
          </div><?php } ?>
    <div class="block">Genre:
       <?php the_category(',&nbsp;',''); ?></div>
<div class="jtip-bottom">
    <a href="<?php the_permalink() ?>""
       class="btn btn-block btn-successful"><i
            class="fa fa-play-circle mr10"></i><?php _e('Watch movie', 'psythemes'); ?></a>
   <?php echo favorite_buttons();?>
</div>
</div>
        </div>
		
		<?php endwhile; ?>
		<?php } wp_reset_query(); ?>
    
                </div>
            </div>
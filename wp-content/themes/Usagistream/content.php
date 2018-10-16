<?php
/**
 * theme from usagilabs.blogspot.com
 * version 1.0
 *
 */
?>
<article id="post-<?php the_ID(); ?>" class="post-outer col-md-3 col-sm-4 col-xs-4">
	<div class="entry-thumbnail">
	<span class="entry-type"><?php echo strip_tags (get_the_term_list($post->ID, 'type')); ?></span>
		<a class="thumb-link" href="<?php the_permalink(); ?>">
		<?php
		if ( has_post_thumbnail() ) { 
			 the_post_thumbnail( 153, 202, true, array( 'center', 'center' ));
		} else {
				echo '<img src="',get_template_directory_uri(),'/lib/img/no_anim.png" class="thumbnail no-img" alt="Thumbnail no image">';
		}
		?>
		<span class="thumb-overlay"><i class="fa fa-play-circle"></i></span>
		</a>
	</div>
	<div class="entry-post">
	<h2 class="entry-title">
		<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
	</h2><!-- .entry-header -->
	<div class='clear'></div>
	</div>
</article>

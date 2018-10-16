<div data-movie-id="<?php the_id(); ?>" class="ml-item">
<a href="<?php the_permalink() ?>" data-url="" class="ml-mask jt" data-hasqtip="112" oldtitle="<?php the_title(); ?>" title="">
<?php if($dato = episodios_get_meta('episode_number')) { ?>
<span class="mli-eps"><?php _e('Eps', 'psythemes'); ?><i><?php echo $dato; ?></i></span>
<?php } ?>

<img data-original="<?php echo $imgsrc; $imgsrc = ''; ?>" class="lazy thumb mli-thumb" alt="<?php the_title(); ?>">
<span class="mli-info"><h2><?php the_title(); ?></h2></span>
</a>
			
<div id="hidden_tip">
<div id="" class="qtip-title"><?php the_title(); ?></div>
<?php if($dato = episodios_get_meta('season_number')) { ?>
<div class="jtip-quality"><?php _e('Season', 'psythemes'); ?> <?php echo $dato; ?></div>
<?php } ?>


<div class="jtip-top">
<?php if($dato = episodios_get_meta('episode_number')) { ?>
<div class="jt-info jt-imdb"><?php _e('Episode:', 'psythemes'); ?>  <?php echo $dato; ?></div>
<?php } ?>
   

<?php if($dato = episodios_get_meta('air_date')) { ?>
<div class="jt-info"><?php _e('Air Date:', 'psythemes'); ?> <span class="ep_airdate"><?php echo $dato; ?></span></div>
<?php } ?>
<div class="clearfix"></div>
</div>

 <p class="f-desc"><?php the_excerpt(); ?></p>

<?php if($dato = episodios_get_meta('name')) { ?>
<div class="block"><?php _e('Episode Title:', 'psythemes'); ?> <span class="ep_title"><?php echo $dato; ?></span></div>
<?php } ?>

<?php if($dato = episodios_get_meta('serie')) { ?>
<div class="block"><?php _e('Serie:', 'psythemes'); ?> <a href="<?php bloginfo('url'); ?>/series/<?php echo sanitize_title(episodios_get_meta('serie')); ?>"><?php echo $dato; ?></a> </div>
<?php } ?>

<div class="jtip-bottom">
<a href="<?php the_permalink() ?>" class="btn btn-block btn-successful"><i class="fa fa-play-circle mr10"></i> <?php _e('Watch Episode', 'psythemes'); ?></a>
<?php echo favorite_buttons(); ?>
</div>

</div>
</div>
		
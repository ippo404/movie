
<?php
/*
Template Name: request
*/	
	
	
get_header(); ?>
<div id="main" class="page-detail page-profiles">
<div class="container">
<div class="pad"></div>
<div class="main-content main-detail">
<?php echo page_breadcrumbs();?>
<div class="infopage">
                <div class="infopage-head">Movies request</div>
                <div class="content">
                    <div class="clearfix"></div>
                    <div class="ip-left">
                        <p>Search movies before sending the request. Please leave movie name, more info and message,
                            we will send back soon.</p>

                        <div style="display:none;" id="message-success" class="alert alert-success">Request success.
                            Thanks you!
                        </div>
                        <div class="uc-form mt20">
                            <form id="request-form" method="POST" class="form-horizontal"?action="send">
                                <div class="form-group">
                                    <label for="movie_name" class="col-sm-3 control-label">Movie name (*)</label>

                                    <div class="col-sm-9">
                                        <input placeholder="Mission Impossible" maxlength="255" required="" name="movie_name" class="form-control" id="movie_name" type="text">

                                        <div id="error-movie_name" class="alert alert-danger error-block"></div>
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="movie_imdb" class="col-sm-3 control-label">Movie imdb (*)</label>

                                    <div class="col-sm-9">
                                        <input placeholder="tt012345" maxlength="255" required="" name="movie_imdb" class="form-control" id="movie_imdb" type="text">

                                        <div id="error-movie_imdb" class="alert alert-danger error-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="more_info" class="col-sm-3 control-label">More info</label>

                                    <div class="col-sm-9">
                                        <textarea placeholder="Year/Actors/Directors..." maxlength="255" name="more_info" class="form-control" rows="4" cols="3" id="more_info"></textarea>

                                        <div id="error-more_info" class="alert alert-danger error-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-sm-3 control-label">Message</label>

                                    <div class="col-sm-9">
                                        <textarea placeholder="I love it!" maxlength="255" name="message" class="form-control" rows="4" cols="3" id="message"></textarea>

                                        <div id="error-message" class="alert alert-danger error-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-sm-3 control-label"></label>

                                    <div class="col-sm-9">
                              <div class="g-recaptcha" data-sitekey="<?php echo get_option('public_key_rcth'); ?>"></div>
                                        <div id="error-captcha" class="alert alert-danger error-block"></div>
                                    </div>
                                </div>
                              
<label class="col-sm-3 control-label" for="username"></label>
<div class="col-sm-3">
<button id="request-submit" class="btn btn-successful btn-approve mt10" type="submit">Send request </button>

<div id="request-loading" class="cssload-center" style="display: none;">
<div class="cssload">
<span></span>
</div>
</div>
<input name="send" value="true" type="hidden">
<input id="send-contact-nonce" name="send-contact-nonce" value="11c6c68716" type="hidden">
<input name="_wp_http_referer" value="/request/send" type="hidden">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ip-right">

					
					
<div class="comentarios">
<?php $comment = get_option('comment-sys'); if ($comment == "fb_comment") { ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php if($lang = get_option('fb_idioma')) { echo $lang; } else { echo 'en_EN'; } ?>/sdk.js#xfbml=1&appId=<?php if($appid = get_option('fb_id')) { echo $appid; } else { echo "209955335852854"; } ?>&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-order-by="reverse_time" data-numposts="<?php if($dato = get_option('fb_numero')) { echo $dato; } else { echo '5'; } ?>" data-colorscheme="<?php if($color = get_option('fb_color')) { echo $color; } else { echo 'light'; } ?>"></div>
<?php } else { ?> 
<?php $comment = get_option('comment-sys'); if ($comment == "dq_comment") { ?>
<div id="disqus_thread"></div>
<script type="text/javascript">
        var disqus_shortname = '<?php $code = get_option('disqus_id'); if (!empty($code)) echo stripslashes(get_option('disqus_id')); ?>';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
</script>
<?php } else { ?>
<h3 class="title"><?php _e('Comments', 'psythemes'); ?> </h3>
<?php  comments_template('/comments.php',true);  ?>
<?php }  
}
?>
</div>
					
					
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
		
</div>
</div>
</div>
<?php  get_footer(); ?>

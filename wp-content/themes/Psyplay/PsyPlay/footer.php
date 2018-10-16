<?php get_template_part('includes/funciones/site_alert'); ?>
<!--footer-->
<footer>
<div id="footer">
<div class="container">
<?php get_template_part('loop/sidebar-footer'); ?>
<?php get_template_part('includes/funciones/foot_keywords'); ?>
</div>
</div>
</footer>
<!--/footer-->
<?php $code = get_option('html_integration'); if (!empty($code)) echo stripslashes(get_option('html_integration')); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js?v=0.1"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js?v=0.1"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slide.min.js?ver=<?php recoger_version();?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/psbar.jquery.min.js?ver=<?php recoger_version();?>"></script>
<?php wp_footer(); ?>
    <script>var swiper=new Swiper('#slider',{pagination:'.swiper-pagination',paginationClickable:true,loop:true,autoplay:4000});$(function(){$('.tn-news, .tn-notice').perfectScrollbar();}); </script>
	
<?php if($activeid = get_option('sli-social-id')) {?>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-<?php echo $activeid; ?>"></script> 
<?php }?>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">$(document).ready(function(){if(!$.cookie('domain-alert')){$.cookie('domain-alert',1,{expires:1,path:'/'});$('.alert-bottom').css('display','block');setInterval(function(){$(".alert-bottom").remove();},15000);}
$('#alert-bottom-close').click(function(){$(".alert-bottom").remove();});if($.cookie("night-mode")){$("#switch-mode").addClass("active");$("head").append("<link href='<?php echo get_template_directory_uri(); ?>/css/<?php  $default = get_option('psy-default-style'); if($default == 'light') { echo 'main-dark'; } else { echo 'main-light';}?>.css' type='text/css' rel='stylesheet' />");}
$('#switch-mode').click(function(){if($.cookie("night-mode")){$.removeCookie("night-mode",{path:'/'});}else{$.cookie("night-mode",1,{expires:365,path:'/'});}
location.reload();});$('.mvi-images').addClass('show');});</script>
<script>window.twttr=function(t,e,r){var n,i=t.getElementsByTagName(e)[0],w=window.twttr||{};return t.getElementById(r)?w:(n=t.createElement(e),n.id=r,n.src="https://platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i),w._e=[],w.ready=function(t){w._e.push(t)},w)}(document,"script","twitter-wjs");</script>
</body>
</html>
<?php
/* 
* -------------------------------------------------------------------------------------
* @author: emeza
* @author URI: https://doothemes.com/
* @aopyright: (c) 2017 Doothemes. All rights reserved
* -------------------------------------------------------------------------------------
*
* @since 1.2.0
* @date: 2017-04-02 / 20:58:25
* @last modified by: Erick Meza
* @last modified time: 2017-04-02 / 23:15:19
*
*/
if( isset( $_GET[ 's' ] ) ) {  
	$s = $_GET[ 's' ];  
	} else {
		$s = '';
	}
?>
<ul class="abc">
	<li><a href="<?php echo esc_url( home_url('/') ); ?>?letter=true&s=title-09" <?php echo $s == 'title-09' ? 'class="select"' : ''; ?>>#</a></li>
	<?php for ($l="a";$l!="aa";$l++){?>
	<li><a href="<?php echo esc_url( home_url('/') ); ?>?letter=true&s=title-<?php echo $l; ?>" <?php echo $s == "title-$l" ? 'class="select"' : ''; ?>><?php echo strtoupper($l); ?></a></li> 
	<?php } ?>
</ul>
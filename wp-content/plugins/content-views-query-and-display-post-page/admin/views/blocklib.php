<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
	#wpcontent {padding-left: 0}
	.cvb-close-btn1 {display: none !important}
	.loading {
		background: url(<?php echo site_url( '/wp-includes/images/spinner.gif' )?>) center no-repeat;
		min-height: 300px;
	}
	.intro {margin-top: 50px;}
</style>

<div class="text-center intro">
	You can click the "Copy" button below and paste into the Block Editor of your posts, pages. <br>
	Or in the Block Editor, click the "Content Views Library" button at the top toolbar, explore, then click "Import". <br>
	(for details, please check <a href="<?php echo admin_url( 'admin.php?page=content-views#block-intro-video' ); ?>">this video</a>)
</div>
<div id="cv-block-library-page">
	<div class="loading"></div>
</div>
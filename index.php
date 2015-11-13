<?php 

	/**
		@author: jlv
		@file: index.php
		@version: 1.0
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<?php /* Llamada al archivo <sidebar.php> */ get_sidebar() ?>

<div class="Container">
	<div class="Container-inner">
		<div class="BGVideo">
			<video id="bg-fluid-video" loop="loop" id="video_background" preload="auto" width="100%" height="100%" autoplay muted />
				<source src="<?php echo get_template_directory_uri() ?>/static/videos/bgvideo.mp4" type="video/mp4" />
			</video/>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>
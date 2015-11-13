<?php

	/**
		@author: jlv
		@file: sidebar.php
		@version: 1.0
	 */

?>

<div id="sidebar" class="Sidebar">
	<div class="Sidebar-inner u-inner">
		<div class="Logo"><img src="<?php echo get_template_directory_uri() ?>/static/images/logo.png"></div>
		<nav class="Nav"><?php wp_nav_menu(array('theme_location' => 'main', 'container' => false, 'menu_id' => 'mainmenu', 'menu_class' => 'MainMenu', 'fallback_cb' => false)) ?></nav>
		<div class="Social">
			<?php wp_nav_menu(array('theme_location' => 'social', 'container' => false, 'menu_id' => 'socialmenu', 'menu_class' => 'SocialMenu', 'fallback_cb' => false)) ?>
		</div>
		<div class="Copyright u-txt-blue">
			<p>&copy;<?php echo date('Y') ?> | <?php bloginfo('name' ); ?></p>
			<p>Todos los derechos reservados.</p>
		</div>
	</div>
</div>
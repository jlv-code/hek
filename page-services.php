<?php 

	/**
		@author: jlv
		@file: page.php
		@version: 1.0
		Template Name: Plantilla Servicios
	 */

?>

<?php /* Llamada al archivo <header.php> */ get_header() ?>

<?php /* Llamada al archivo <sidebar.php> */ get_sidebar() ?>

<div class="Container BGServices">
	<div class="Container-inner">
		<div class="Content">
			<div class="Section Company">
				<?php if (have_posts()): while(have_posts()): the_post() ?>
				<div class="Section-title"><?php the_title() ?></div>
				<div class="Section-content"><?php the_content() ?></div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php /* Llamada al archivo <footer.php> */ get_footer() ?>
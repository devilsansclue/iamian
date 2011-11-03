<?php
register_sidebar(array(
		'name' => 'Primary',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
));
register_sidebar(array(
		'name' => 'Header',
		'before_title' => '',
		'after_title' => '',
		'before_widget' => '',
		'after_widget'  => '',
));

register_nav_menu( 'Main', 'top nav' );
register_nav_menu( 'Footer 1', 'bottom left' );
register_nav_menu( 'Footer 2', 'bottom middle' );
?>
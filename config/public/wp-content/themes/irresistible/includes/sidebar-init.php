<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

		register_sidebar(array( 'name' => 'Sidebar','id' => 'primary','description' => "Primary Sidebar.", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div></div>','before_title' => '<h3>','after_title' => '</h3><div class="list3 box1">'));
		
		register_sidebar(array( 'name' => 'Sidebar Top','id' => 'top','description' => "Top Sidebar.", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div></div>','before_title' => '<h3>','after_title' => '</h3><div class="list3 box1">'));
    
}

add_action( 'init', 'the_widgets_init' ); 
?>
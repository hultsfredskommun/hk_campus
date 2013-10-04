<?php
function hk_campus_widgets_init() {
	unregister_sidebar("firstpage-sidebar-2");
}
add_action( 'widgets_init', 'hk_campus_widgets_init' );
?>
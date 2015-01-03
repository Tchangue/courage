<?php 
add_action('wp_head', 'courage_css_layout');
function courage_css_layout() {
	
	// Get Theme Options from Database
	$theme_options = courage_theme_options();
		
	
	// Switch Sidebar to left
	if ( isset($theme_options['sidebar']) and $theme_options['sidebar'] == 'left-sidebar' ) :
	
		echo '<style type="text/css">
			@media only screen and (min-width: 60em) {
				#content {
					float: right;
					padding-right: 0;
					padding-left: 1.5em;
				}
				#sidebar {
					float: left;
				}
			}
		</style>';
	
	endif;
	
}
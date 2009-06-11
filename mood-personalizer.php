<?php 
/*

Plugin Name: Mood Personalizer
Plugin URI: http://www.appchain.com/2009/06/mood-personalizer-11/
Description: Show the mood of the blogger using personalized emoticons
Author: Turcu Ciprian
License: GPL
Version: 1.1
Author URI: http://www.appchain.com

*/


// This prints the widget
	function xWidgetShow() {
	$xMPPicture = get_option('xMPPic');
		?>
		<div id="mood_personalizer" class="widget_mood_personalizer">
		<h4 class="widgettitle">How I feel today:</h4>
			<ul>
				<li>
					<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/<?php echo $xMPPicture;?>" alt="Mood Personalizer mood image"/>
				</li>
			</ul>
		</div>
		<?php
		

	}
function xMPWidgetInit() {
		// Tell Dynamic Sidebar about our new widget and its control
	register_sidebar_widget(array('Mood Personalizer', 'widgets'), 'xWidgetShow');
	
}

function xMPInclude(){
	include("pages/AdminPage.php");
}


function xMPApiInit() {
	if($_POST['xMPHidd']=="xMPHidd"){
		$xMPPicture = $_POST['xMPPic'];
		$xMPPictureSize = $_POST['xMPPictureSize'];
		$xMPPicture = str_replace(".2",".".$xMPPictureSize,$xMPPicture);
		update_option('xMPPic', $xMPPicture);
	}

	add_options_page('My Plugin Options', 'Mood Personalizer', 8, __FILE__, 'xMPInclude');
}

// Delay plugin execution to ensure Dynamic Sidebar has a chance to load first
add_action('plugins_loaded', 'xMPWidgetInit');
add_action('admin_init', 'xMPApiInit');

 
?>
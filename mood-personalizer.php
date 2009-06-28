<?php 
/*

Plugin Name: Mood Personalizer
Plugin URI: http://www.appchain.com/2009/06/mood-personalizer-1-2/
Description: Show the mood of the blogger using personalized emoticons
Author: Turcu Ciprian
License: GPL
Version: 1.2.2
Author URI: http://www.appchain.com
*/


// This prints the widget
	function xWidgetShow($args) {
	
	extract( $args );
	$xMPPicture = get_option('xMPPic');
	$xMPTitle = get_option('xMPTitle');
		?>

		<?php echo $before_title.$xMPTitle.$after_title;?>
			<?php echo $before_widget;?>
			<div style="text-align:center;">
					<img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/<?php echo $xMPPicture;?>" alt="Mood Personalizer mood image"/>
			</div>
			<?php echo $after_widget;?>
		<?php
		

	}
function xMPWidgetInit() {
		// Tell Dynamic Sidebar about our new widget and its control
	register_sidebar_widget(array('Mood Personalizer', 'widgets'), 'xWidgetShow');
	register_widget_control(array('Mood Personalizer', 'widgets'), 'xMPform');
	
}
function xMPform() {	
if($_POST['xMPTitle'])	
{
	update_option('xMPTitle', $_POST['xMPTitle']);
}		
        $title = get_option('xMPTitle');
		
		if($title==""){
			$title = "How I Feel Today:";
		}
		$xMPPicture = get_option('xMPPic');
       ?>
	   Title:
	   <input type="text" name="xMPTitle" value="<?php echo $title;?>" />
	   <img src="<?php bloginfo('url'); ?>/wp-content/plugins/mood-personalizer/images/<?php echo $xMPPicture;?>" alt="Mood Personalizer mood image"/>
	   <?php 
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
	$widget_number = $wp_registered_widgets[$_widget_id]['params'][0]['number'];
	$category = strip_tags(stripslashes("asd"));
	$title = strip_tags(stripslashes($widget_text['title']));
	$linknum = strip_tags(stripslashes($widget_text['linknum']));
	$order = strip_tags(stripslashes($widget_text['order']));
	$options[$widget_number] = compact( 'title', 'category', 'linknum' ,'order');

	add_options_page('My Plugin Options', 'Mood Personalizer', 8, __FILE__, 'xMPInclude');
}

// Delay plugin execution to ensure Dynamic Sidebar has a chance to load first
add_action('plugins_loaded', 'xMPWidgetInit');
add_action('admin_init', 'xMPApiInit');


 
?>
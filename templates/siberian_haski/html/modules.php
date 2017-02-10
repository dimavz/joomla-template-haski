<?php


defined('_JEXEC') or die;

/*
 * none (output raw module content)
 */
function modChrome_top_menu($module, &$params, &$attribs)
{
	echo $module->content;
}

function modChrome_left_menu($module, &$params, &$attribs)
{
	//print_r($module);
	echo '<div class="col-xs-6 col-md-12">';
		echo '<div class="wrap_panel">';
			
			if ($module->showtitle)
			{
				echo '<div class="header_panel">';
				echo '<h3 class="title_panel">'.$module->title.'</h3>';
				echo 	'</div>';
			}
																
			echo '<div class="body_panel">';
				echo $module->content;
			echo '</div>';
		echo '</div>';
	echo '</div>';
}

function modChrome_cloud_tags($module, &$params, &$attribs)
{
	//print_r($module);
	echo '<div class="col-xs-6 col-md-12">';
		echo '<div class="wrap_panel">';
			
			if ($module->showtitle)
			{
				echo '<div class="header_panel">';
				echo '<h3 class="title_panel">'.$module->title.'</h3>';
				echo 	'</div>';
			}
																
			echo '<div class="body_tags">';
				echo $module->content;
			echo '</div>';
		echo '</div>';
	echo '</div>';
}








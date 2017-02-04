<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="body_panel">
<ul>
<?php foreach ($list as $i => &$item)
{
	print_r($item);
	if (in_array($item->id, $path))
	{
		$class .= ' active';
	}
	if (($item->id == $active_id) || ($item->type == 'alias' && $item->params->get('aliasoptions') == $active_id))
	{
		$class .= ' current';
	}
	if ($item->deeper)
	{
			$class .= ' dropdown';
			$role = 'role= "presentation"';
			$icon = '<span class="caret"></span>';
			$a_class = ' class="dropdown-toggle"';
			$a_data_toggle = ' data-toggle="dropdown"';
			$a_role = ' role="button"';
			$a_aria_haspopup = ' aria-haspopup="true"';
			$a_aria_expanded = ' aria-expanded="false"';
	}

	if ($class)
	{
		echo '<li class="'. $class .'" '.$role.'>';
	}
	else
	{
		echo '<li'.$role. '>';
	}

	echo '<a href="'.$item->flink.'" '.$a_class.$a_data_toggle.$a_role.$a_aria_haspopup. $a_aria_expanded.' >'.$item->title. $icon. '</a>';
	
	if ($item->deeper)
		{
			echo '<ul class="dropdown-menu">';
		}
	// The next item is shallower.
		elseif ($item->shallower)
		{
			echo '</li>';
			echo str_repeat('</ul></li>', $item->level_diff);
		}
	// The next item is on the same level.
		else
		{
			echo '</li>';
		}
}
?>
</ul>
</div>

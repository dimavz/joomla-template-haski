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
<ul>
	<!-- <li>
	<a href="/">
		<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
		</a>
	</li> -->
<?php foreach ($list as $i => &$item)
{
	//print_r($item);
	$class = '';
	
	if (in_array($item->id, $path))
	{
		$class .= ' active';
	}
	if (($item->id == $active_id) || ($item->type == 'alias' && $item->params->get('aliasoptions') == $active_id))
	{
		$class .= ' current';
	}

	if ($class)
	{
		echo '<li class="'. $class .'">';
		echo '<a href="'.$item->flink.'">'.$item->title.'</a>';
	}
	else
	{
		echo '<li>';
		echo '<a href="'.$item->flink.'">'.$item->title.'</a>';
	}
	
	if ($item->deeper)
		{
			echo '<ul class="child">';
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

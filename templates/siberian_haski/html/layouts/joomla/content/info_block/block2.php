<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
$template = JFactory::getApplication()->getTemplate();
$blockPosition = $displayData['params']->get('info_block_position', 0);
?>
<?php //print_r($displayData); ?>
	<div class="post_metainfo">
	<ul>
		<?php if ($displayData['position'] == 'above' && ($blockPosition == 0 || $blockPosition == 2)
				|| $displayData['position'] == 'below' && ($blockPosition == 1)
				) : ?>

			<?php if ($displayData['params']->get('show_publish_date')) : ?>
				<li><img src="<?php echo JUri::base() .'templates/'.$template.'/images/content/article/icons_metainfo/calendar.png'?>" title="Опубликовано" alt="Опубликовано" width="24px" height="24px">
				<?php echo JLayoutHelper::render('joomla.content.info_block.publish_date', $displayData); ?>
				</li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ($displayData['position'] == 'above' && ($blockPosition == 0)
				|| $displayData['position'] == 'below' && ($blockPosition == 1 || $blockPosition == 2)
				) : ?>
			<?php if ($displayData['params']->get('show_create_date')) : ?>
				<?php echo JLayoutHelper::render('joomla.content.info_block.create_date', $displayData); ?>
			<?php endif; ?>

			<?php if ($displayData['params']->get('show_modify_date')) : ?>
				<li><img src="<?php echo JUri::base() .'templates/'.$template.'/images/content/article/icons_metainfo/calendar_edit.png'?>" title="Отредактировано" alt="Отредактировано" width="24px" height="24px">
				<?php echo JLayoutHelper::render('joomla.content.info_block.modify_date', $displayData); ?>
				</li>
			<?php endif; ?>

			<?php if ($displayData['params']->get('show_hits')) : ?>
				<li><img src="<?php echo JUri::base() .'templates/'.$template.'/images/content/article/icons_metainfo/eye.png'?>" title="Просмотров" alt="Просмотров" width="24px" height="24px">
				<?php echo JLayoutHelper::render('joomla.content.info_block.hits', $displayData); ?>
				</li>
			<?php endif; ?>
		<?php endif; ?>


<!-- Вывод колличества комментариев статьи -->
		<?php
		$comments = JPATH_SITE . '/components/com_jcomments/jcomments.php';
		if (file_exists($comments)) 
		{
			require_once($comments);
			$options = array();
			$options['object_id'] = $displayData['item']->id;
			$options['object_group'] = 'com_content';
			$options['published'] = 1;
			$count = JCommentsModel::getCommentsCount($options);
			if($count)
			{
				?>
				<li><img src="<?php echo JUri::base() .'templates/'.$template.'/images/content/article/icons_metainfo/comments.png'?>" title="Комментариев" alt="Комментариев" width="24px" height="24px"><span title="Комментариев"><?php echo ' '.$count. ' ' ?></span></li>
				<?php
			}
			else
			{
				?>
				<li><img src="<?php echo JUri::base() .'templates/'.$template.'/images/content/article/icons_metainfo/comments.png'?>" title="Комментариев" alt="Комментариев" width="24px" height="24px"><span title="Комментариев"><?php echo ' 0 ' ?></span></li>
				<?php
			}
					
		} 
		?>
<!-- Конец вывода колличества комментариев статьи -->




						<?php if ($displayData['params']->get('show_author') && !empty($displayData['item']->author )) : ?>
				<li id='autor'><img src="<?php echo JUri::base() .'templates/'.$template.'/images/content/article/icons_metainfo/autor.png'?>" alt="Автор" width="24px" height="24px">
				<?php echo JLayoutHelper::render('joomla.content.info_block.author', $displayData); ?>
				</li>
			<?php endif; ?>

			<!-- <?php if ($displayData['params']->get('show_category')) : ?>
				<li>
				<?php echo JLayoutHelper::render('joomla.content.info_block.category', $displayData); ?>
				</li>
			<?php endif; ?> -->
		</ul>
	</div><!-- конец блока post_metainfo -->

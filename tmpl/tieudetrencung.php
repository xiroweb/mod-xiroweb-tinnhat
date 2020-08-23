<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_xiroweb_tinnhat
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="module<?php echo $moduleclass_sfx; ?> mod-tinnhat-<?php echo $stylecss; ?>">
	<?php foreach ($list as $item) : ?>
				<?php $images = json_decode($item->images);
				 ?>
					<<?php echo $params->get('title_heading', 'h1'); ?>>
						<a class="box-tinnhat-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
					</<?php echo $params->get('title_heading', 'h1'); ?>>
					<div>
				<?php if ($item->displayHits) : ?>
					<span class="box-tinnhat-hits">
					<?php echo JText::_('MOD_XIROWEB_TINNHAT_LUOTXEM'); ?><?php echo $item->displayHits; ?>
					</span>
				<?php endif; ?>

				<?php if ($params->get('show_author')) : ?>
					<span class="box-tinnhat-writtenby">
					<?php echo JText::_('MOD_XIROWEB_TINNHAT_AUTHORNAME'); ?><?php echo $item->displayAuthorName; ?>
					</span>
				<?php endif; ?>

				<?php if ($item->displayCategoryTitle) : ?>
					<span class="box-tinnhat-category">
					<?php echo JText::_('MOD_XIROWEB_TINNHAT_CATEGORYTITLE'); ?><?php echo $item->displayCategoryTitle; ?>
					</span>
				<?php endif; ?>

				<?php if ($item->displayDate) : ?>
					<span class="box-tinnhat-date">
						<?php echo $item->displayDate; ?>
					</span>
				<?php endif; ?>

				<?php if ($params->get('show_tags', 0) && $item->tags->itemTags) : ?>
					<div class="box-tinnhat-tags">
					<?php echo JText::_('MOD_XIROWEB_TINNHAT_TAG'); ?><?php echo JLayoutHelper::render('joomla.content.tags', $item->tags->itemTags); ?>
					</div>
				<?php endif; ?>
				</div>

				
				<?php if (!empty($images->image_intro)): ?>
					<a class="box-tinnhat-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<img width="100%" src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8'); ?>" />
					</a>
				<?php endif;// if ($images->image_intro != ''): ?>

				<?php if ($params->get('show_introtext')) : ?>
					<p class="box-tinnhat-introtext">
						<?php echo $item->displayIntrotext; ?>
					</p>
				<?php endif; ?>

				<?php if ($params->get('show_readmore')) : ?>
					<p class="box-tinnhat-readmore">
						<a class="box-tinnhat-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
							<?php if ($item->params->get('access-view') == false) : ?>
								<?php echo JText::_('MOD_XIROWEB_TINNHAT_REGISTER_TO_READ_MORE'); ?>
							<?php elseif ($readmore = $item->alternative_readmore) : ?>
								<?php echo $readmore; ?>
								<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
							<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
								<?php echo JText::sprintf('MOD_XIROWEB_TINNHAT_READ_MORE_TITLE'); ?>
							<?php else : ?>
								<?php echo JText::_('MOD_XIROWEB_TINNHAT_READ_MORE_TITLE'); ?>
								<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
							<?php endif; ?>
						</a>
					</p>
				<?php endif; ?>
		<?php endforeach; ?>
</div>

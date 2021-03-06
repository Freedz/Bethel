<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
	</head>
	<body>
	<div class="wrapper">
		<div class="container">
			<hr class="space" />
			<div class="joomla-header span-16 append-1">
				<?php echo $app->getCfg('sitename'); ?>
			</div>
			<?php if($this->countModules('atomic-search')) : ?>
				<div class="joomla-search span-7 last">
	  	 			<jdoc:include type="modules" name="atomic-search" style="none" />
				</div>
			<?php endif; ?>
		</div>
		<?php if($this->countModules('atomic-topmenu')) : ?>
			<jdoc:include type="modules" name="atomic-topmenu" style="container" />
		<?php endif; ?>

		<div class="container">
			<div class="span-16 append-1">
			<?php if($this->countModules('atomic-topquote')) : ?>
				<jdoc:include type="modules" name="atomic-topquote" style="none" />
			<?php endif; ?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<hr />
			<?php if($this->countModules('atomic-bottomleft')) : ?>
			 	<div class="span-7 colborder">
					<jdoc:include type="modules" name="atomic-bottomleft" style="bottommodule" />
	        	</div>
	        <?php endif; ?>

	        <?php if($this->countModules('atomic-bottommiddle')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="atomic-bottommiddle" style="bottommodule" />
				</div>
			<?php endif; ?>
			</div>
			<?php if($this->countModules('atomic-sidebar')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="atomic-sidebar" style="sidebar" />
				</div>
			<?php endif; ?>

			<div class="joomla-footer span-16 append-1">
				<hr />
				&copy;<?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
			</div>
		</div>
</div>
	</body>
</html>

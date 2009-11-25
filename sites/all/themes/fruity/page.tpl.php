<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
	<title><?php print $head_title ?></title>
	<?php print $head ?>
	<?php print $styles ?>
	<?php print $scripts ?>
</head>
<body>

<div class="container_16">

<?php print $breadcrumb ?>

<?php print fruity_user_nav() ?>

<div id="header" class="grid_16">
	<?php if ($title): print '<h1>' . $title . '</h1>'; endif; ?>
	<?php if ($tabs): print '<ul id="tabs">' . $tabs . '</ul>'; endif; ?>
</div>

<div id="content" class="grid_12 alpha">
<div id="wrapper">
	<?php if ($show_messages && $messages): print $messages; endif; ?>
	<?php if ($tabs2): print '<ul id="tabs_secondary">' . $tabs2 . '</ul>'; endif; ?>
	<?php print $help ?>
	<?php print $content ?>
	
	<div id="corner"></div>
</div>
</div>

<div id="sidebar" class="grid_4 omega">
	<?php print $sidebar ?>
</div>

<div id="footer" class="grid_12">
	<?php print $footer ?>
	
	<?php if ($footer_message): ?>
		<p id="footer_message"><?php print $footer_message ?></p>
	<?php else: ?>
		<p id="footer_message">Thank you for trying the <a href="http://wetalkdrupal.com/theme/fruity">fruity admin theme</a>.</p>
	<?php endif; ?>
</div>

</div> <!-- /.container_16 -->

<?php print $closure ?>

</body>
</html>
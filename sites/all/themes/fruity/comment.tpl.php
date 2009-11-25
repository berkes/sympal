<div class="comment">

	<?php if ($submitted): ?>
		<span class="submitted"><?php print $submitted ?></span>
	<?php endif; ?>

	<?php if ($comment->new): ?>
		<span class="new"><?php print drupal_ucfirst($new) ?></span>
	<?php endif; ?>

	<?php print $picture ?>

	<h3><?php print $title ?></h3>

	<?php print $content ?>
	
	<?php if ($signature): ?>
		<?php print $signature ?>
	<?php endif; ?>

	<div class="links"><?php print $links ?></div>
</div>

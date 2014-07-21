<?php /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    Menu-Snippet for WolfCMS Menu (PHP)

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ ?>

<li><a href="<?php echo URL_PUBLIC; ?>">Home</a></li>
<?php foreach ($this->children() as $child) : ?>
	<li><?php echo $child->link(); ?>
	<?php if($child->childrenCount() > 0) : ?>
		<ul>
		<?php foreach ($child->children() as $subMenu) : ?>
			<li><?php echo $subMenu->link(); ?></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?></li>
<?php endforeach; ?>
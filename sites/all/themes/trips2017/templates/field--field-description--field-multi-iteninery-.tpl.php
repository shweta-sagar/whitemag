<div class="panel panel-default" style="background: blue; color: white;">
    <?php foreach ($items as $delta => $item): ?>
	<?php print render($item); ?>
<?php endforeach; ?>
</div>

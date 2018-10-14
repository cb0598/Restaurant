<?php ini_set('display_errors', '1'); ?>
<?php if (count($errors2) > 0) : ?>
	<div class="alert alert-danger" style="width: 25%; margin-left: 15px;">
		<?php foreach ($errors2 as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
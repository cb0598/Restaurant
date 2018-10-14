<?php ini_set('display_errors', '1'); ?>
<?php if (count($errors) > 0) : ?>
	<div class="alert alert-danger" style="width: 25%; margin-left: 15px;">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
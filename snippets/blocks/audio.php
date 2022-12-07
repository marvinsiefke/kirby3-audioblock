<?php if($audio = $block->audiofile()->toFile()): ?>
	<audio controls>
		<source src="<?= $audio->url() ?>" type="<?= $audio->mime() ?>">
	</audio>
<?php endif; ?>

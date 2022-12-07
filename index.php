<?php

Kirby::plugin('pepper/kirby3-audioblock', [
	'blueprints' => [
		'blocks/audio' => __DIR__.'/blueprints/blocks/audio.yml',
		'files/audio' => __DIR__.'/blueprints/files/audio.yml'
	],
	'snippets' => [
		'blocks/audio' => __DIR__.'/snippets/blocks/audio.php'
	]
]);
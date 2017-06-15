<?php

spl_autoload_register(function ($class) {
	$filePath = __DIR__ . DIRECTORY_SEPARATOR . 'src'
	            . DIRECTORY_SEPARATOR
	            . str_replace('\\', DIRECTORY_SEPARATOR, $class)
	            . '.php';

	if (file_exists($filePath)) {
		require $filePath;
	}
});

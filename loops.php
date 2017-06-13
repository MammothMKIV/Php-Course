<?php

//$i = 40;

//while ($i > 10) {
//	echo $i . PHP_EOL;
//
//	$i--;
//}

//do {
//	echo $i . PHP_EOL;
//	$i--;
//	break;
//
//	continue;
//} while ($i > 20);

$test_array = array(
	'key' => 'abc',
	'def',
	'0' => '123',
	'456'
);

foreach ($test_array as $key => $item) {
	echo $key . ': ' . $item . PHP_EOL;
}

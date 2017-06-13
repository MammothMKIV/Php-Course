<?php
$title = 'My Title';

$array = array(
	'item 1',
	'item 2',
	'item 3',
	'item 4',
	'item 5',
);

$username = '';
?>
<html>

<head>
	<title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>

<ul>
	<?php foreach ($array as $item): ?>
		<li><?php echo $item ?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>

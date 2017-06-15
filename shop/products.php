<?php
require 'common.php';

$products = \Ino\Shop\ProductRepository::getProducts();
?>

<html>
<head>
	<script
		src="https://code.jquery.com/jquery-1.12.4.js"
		integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
		crossorigin="anonymous"></script>
	<script src="main.js"></script>
</head>
<body>
<div class="cart-widget">
	<?php require 'cart-widget.php' ?>
</div>
<hr>
<table width="100%">
	<?php foreach ($products as $product): ?>
		<tr data-product-id="<?php echo $product->getId() ?>" class="product-row">
			<td><?php echo $product->getTitle(); ?></td>
			<td><?php echo $product->getFormattedPrice(); ?></td>
			<td><button type="button" class="add-to-cart">Add to Cart</button></td>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>

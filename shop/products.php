<?php
// подключаем файл с автолоадом и запуском сессии
require_once 'common.php';

// получаем список продуктов
$products = \Ino\Shop\ProductRepository::getProducts();
?>

<html>
<head>
    <!-- подключаем jQuery -->
	<script
		src="https://code.jquery.com/jquery-1.12.4.js"
		integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
		crossorigin="anonymous"></script>
    <!-- подключаем наш файл со скриптами -->
	<script src="main.js"></script>
</head>
<body>
<div class="cart-widget">
    <!-- подключаем виджет превью корзины -->
	<?php require 'cart-widget.php' ?>
</div>
<hr>
<table width="100%">
    <!-- выводим список продуктов -->
	<?php foreach ($products as $product): ?>
        <!-- выводим ID -->
		<tr data-product-id="<?php echo $product->getId() ?>" class="product-row">
            <!-- выводим название продукта -->
			<td><?php echo $product->getTitle(); ?></td>
            <!-- выводим отформатированную цену продукта -->
			<td><?php echo $product->getFormattedPrice(); ?></td>
			<td><button type="button" class="add-to-cart">Add to Cart</button></td>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>

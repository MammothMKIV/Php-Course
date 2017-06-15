<?php
// require_once подключает файл только один раз. т.к. common у нас подключается в родительском шаблоне - мы не хотим чтобы он подключался дважды
require_once 'common.php';

// получаем объект корзины
$cart = \Ino\Shop\CartProvider::getCart();

// получаем элементы корзины
$cartItems = $cart->getItems();
?>

<h3>My Cart</h3>
<!-- если корзина не пуста то выводим её -->
<?php if (!empty($cartItems)): ?>
	<table>
		<tr>
            <!-- описываем заголовок таблицы корзины -->
			<td>Title</td>
			<td>Count</td>
			<td>Price</td>
		</tr>
        <!-- выводим список продуктов корзины -->
		<?php foreach ($cartItems as $cartItem): ?>
			<tr>
                <!-- выводим название продукта корзины -->
				<td><?php echo $cartItem->getProduct()->getTitle() ?></td>
                <!-- выводим количество продуктов текущего типа в корзине -->
				<td><?php echo $cartItem->getCount() ?></td>
                <!-- выводим отформатированную цену продукта -->
				<td><?php echo $cartItem->getProduct()->getFormattedPrice() ?></td>
			</tr>
		<?php endforeach; ?>
		<tr>
            <!-- 2 пустые ячейки, чтобы не сбивалось форматирование -->
			<td></td>
			<td></td>
            <!-- выводим суммарную стоимость элементов корзины -->
			<td><b>Total: </b> <?php echo $cart->getCartPrice() ?></td>
		</tr>
	</table>
<!-- иначе - показываем сообщение что она пуста -->
<?php else: ?>
	<p>Cart is empty</p>
<?php endif; ?>

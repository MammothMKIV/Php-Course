<?php
require_once 'common.php';

$cart = \Ino\Shop\CartProvider::getCart();
$cartItems = $cart->getItems();
?>

<h3>My Cart</h3>
<?php if (!empty($cartItems)): ?>
	<table>
		<tr>
			<td>Title</td>
			<td>Count</td>
			<td>Price</td>
		</tr>
		<?php foreach ($cartItems as $cartItem): ?>
			<tr>
				<td><?php echo $cartItem->getProduct()->getTitle() ?></td>
				<td><?php echo $cartItem->getCount() ?></td>
				<td><?php echo $cartItem->getProduct()->getFormattedPrice() ?></td>
			</tr>
		<?php endforeach; ?>
		<tr>
			<td></td>
			<td></td>
			<td><b>Total: </b> <?php echo $cart->getCartPrice() ?></td>
		</tr>
	</table>
<?php else: ?>
	<p>Cart is empty</p>
<?php endif; ?>

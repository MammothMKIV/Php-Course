<?php

namespace Ino\Shop;


class CartProvider {
	public static function getCart() {
		if (!isset($_SESSION['cartItems'])) {
			return new Cart(array());
		}

		$cartItemIds = $_SESSION['cartItems'];

		$products = ProductRepository::getProducts();

		$cartItems = array();

		foreach ($cartItemIds as $productId => $count) {
			if (isset($products[$productId])) {
				$cartItems[] = new CartItem($products[$productId], $count);
			}
		}

		$cart = new Cart($cartItems);

		return $cart;
	}
}

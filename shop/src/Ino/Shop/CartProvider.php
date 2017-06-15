<?php

namespace Ino\Shop;

/**
 * Данный класс собирает корзину из сессии в её объектный вид
 *
 * @package Ino\Shop
 */
class CartProvider {
    /**
     * Статический метод для получения корзины из сессии
     *
     * @return Cart
     */
	public static function getCart() {
	    // если в сесии нет корзины - отдаём пустую корзину
		if (!isset($_SESSION['cartItems'])) {
			return new Cart(array());
		}

		// достаем содержимое корзины из сессии. Там оно хранится в виде ID продукта -> количество продукта
		$cartItemIds = $_SESSION['cartItems'];

		// получаем все доступные продукты
		$products = ProductRepository::getProducts();

		// инициализируем массив для сбора результирующих элементов корзины
		$cartItems = array();

		// проходим по всем парам ID продукта -> количество продукта
		foreach ($cartItemIds as $productId => $count) {
		    // если продукт с таким ID есть - добавляем его в нашу корзину
			if (isset($products[$productId])) {
				$cartItems[] = new CartItem($products[$productId], $count);
			}
		}

		// создаём объект корзины
		$cart = new Cart($cartItems);

		// возвращаем объект корзины
		return $cart;
	}
}

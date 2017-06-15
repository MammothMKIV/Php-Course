<?php

namespace Ino\Shop;

/**
 * Данный класс представляем собой пару Продукт -> Количество продуктов, хранящихся в корзине
 *
 * @package Ino\Shop
 */
class CartItem {
	/**
     * Указатель на продукт в корзине
     *
	 * @var Product
	 */
	private $product;

	/**
     * Количество продуктов данного типа в корзине
     *
	 * @var integer
	 */
	private $count;

	/**
	 * CartItem constructor.
	 *
	 * @param Product $product
	 * @param integer $count
	 */
	public function __construct($product, $count) {
		$this->product = $product;
		$this->count = $count;
	}

	/**
     * Получить соответствующий продукт корзины
     *
	 * @return Product
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
     * Получить число элементов в корзине
     *
	 * @return integer
	 */
	public function getCount() {
		return $this->count;
	}
}

<?php

namespace Ino\Shop;


class CartItem {
	/**
	 * @var Product
	 */
	private $product;

	/**
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
	 * @return Product
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * @return integer
	 */
	public function getCount() {
		return $this->count;
	}
}

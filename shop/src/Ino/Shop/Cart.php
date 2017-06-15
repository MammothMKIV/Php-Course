<?php

namespace Ino\Shop;


class Cart {
	private $items;

	public function __construct($items) {
		$this->items = $items;
	}

	public function getItems() {
		return $this->items;
	}

	public function getCartPrice() {
		$sum = 0;

		foreach ($this->items as $item) {
			$sum += ($item->getProduct()->getPrice() * $item->getCount());
		}

		return $sum;
	}
}

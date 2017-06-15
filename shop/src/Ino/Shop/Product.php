<?php

namespace Ino\Shop;

class Product {
	private $id;

	private $price;

	private $title;

	public function __construct($id, $price, $title) {
		$this->id = $id;
		$this->price = $price;
		$this->title = $title;
	}

	public function getId() {
		return $this->id;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getFormattedPrice() {
		return number_format($this->getPrice(), 2);
	}
}

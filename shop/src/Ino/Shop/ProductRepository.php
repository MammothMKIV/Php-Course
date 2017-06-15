<?php

namespace Ino\Shop;


class ProductRepository {
	public static function getProducts() {
		$products = array();

		for ($i = 1; $i < 16; $i++) {
			$products[$i] = new Product($i, $i * 7, 'Product ' . $i);
		}

		return $products;
	}

	public static function getProductsByIds($ids) {
		$products = self::getProducts();

		$results = array();

		foreach ($ids as $id) {
			if (isset($products[$id])) {
				$results[] = $products[$id];
			}
		}

		return $results;
	}
}

<?php

namespace Ino\Shop;


/**
 * Класс, использующийся для получения продуктов магазина
 *
 * @package Ino\Shop
 */
class ProductRepository {
    /**
     * Метод для получения всех продуктов магазина
     *
     * @return array Массив Product
     */
	public static function getProducts() {
	    // инициализируем пустой массив продуктов
		$products = array();

		// генерируем список продуктов
		for ($i = 1; $i < 16; $i++) {
		    // создаем новый продукт и кладём его в результирующий массив
			$products[$i] = new Product($i, $i * 7, 'Product ' . $i);
		}

		// отдаём результирующий массив
		return $products;
	}

    /**
     * Метод для получения массива продуктов по массиву их ID
     *
     * @param array $ids Массив ID продуктов
     * @return array Массив Product
     */
	public static function getProductsByIds($ids) {
	    // получаем все продукты
		$products = self::getProducts();

		// инициализируем пустой массив результирующих продуктов
		$results = array();

		// проходим по всем переданным ID продуктов
		foreach ($ids as $id) {
		    // если находим такой продукт в списке всех продуктов - добавляем в результирующий массив
			if (isset($products[$id])) {
				$results[] = $products[$id];
			}
		}

		// отдаём массив с результатами
		return $results;
	}
}

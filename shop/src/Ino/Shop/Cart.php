<?php

namespace Ino\Shop;


/**
 * Класс, представляющий корзину
 * @package Ino\Shop
 */
class Cart {
    /**
     * Массив пар ID продукта -> количество продуктов
     *
     * @var array
     */
	private $items;

    /**
     * Cart constructor.
     * @param array $items
     */
	public function __construct($items) {
	    // заполняем внутренний массив элементов корзины
		$this->items = $items;
	}

    /**
     * Получение элементов корзины
     *
     * @return array
     */
	public function getItems() {
	    // отдаём элементы корзины
		return $this->items;
	}

    /**
     * Метод для расчёта полной стоимости элементов в корзине
     *
     * @return float
     */
	public function getCartPrice() {
	    // инициализируем счётчик суммы
		$sum = 0;

		// проходимся по всем элементам корзины
		foreach ($this->items as $item) {
		    // прибавляем к сумме стоимость продукта * количество продукта
			$sum += ($item->getProduct()->getPrice() * $item->getCount());
		}

		// ворзвращаем сумму
		return $sum;
	}
}

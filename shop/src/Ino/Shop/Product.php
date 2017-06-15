<?php

namespace Ino\Shop;

/**
 * Класс, использующийся для представления продукта (товара) в системе
 *
 * @package Ino\Shop
 */
class Product {
    /**
     * @var int ID продукта
     */
	private $id;

    /**
     * @var float Цена продукта
     */
	private $price;

    /**
     * @var string Название продукта
     */
	private $title;

    /**
     * Product constructor.
     *
     * @param integer $id
     * @param float $price
     * @param string $title
     */
	public function __construct($id, $price, $title) {
		$this->id = $id;
		$this->price = $price;
		$this->title = $title;
	}

    /**
     * Получение ID продукта
     *
     * @return int
     */
	public function getId() {
		return $this->id;
	}

    /**
     * Получение цены продукта
     *
     * @return float
     */
	public function getPrice() {
		return $this->price;
	}

    /**
     * Получение названия продукта
     *
     * @return float
     */
	public function getTitle() {
		return $this->title;
	}

    /**
     * Получение отформатированной цены продукта для отображения на сайте
     *
     * @TODO: Вынести в отдельный класс для форматирования цен на сайте. Т.к. у нас есть ещё корзины, в которой цену тоже надо форматировать. Форматировать непосредственно в шаблоне
     *
     * @return string
     */
	public function getFormattedPrice() {
	    // форматируем цену
		return number_format($this->getPrice(), 2);
	}
}

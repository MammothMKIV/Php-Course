<?php

class MyTestClass {
	// объявляем поле класса
	private $myVar;

	// объявляем конструктор
	public function __construct($myVar, $myVar2) {
		// присваиваем значение полю класса
		$this->myVar = $myVar;
	}

	// получение значения $myVar
	public function getMyVar() {
		return $this->myVar;
	}

	public function setMyVar($myVal) {
		$this->myVar = $myVal;
	}
}

// создаем объект класса MyTestClass и передаем ему параметр 25
$myTestClassObj = new MyTestClass(25);

// выводим значение выводим возвращённый результат выполнения метода getMyVar()
echo $myTestClassObj->getMyVar(); // 25

<?php

// объявление класса
class MyClass {

	// поле класса
	private $myVar;

	// константа класса
	const MY_CLASS_CONST = 'my class const value';


	// метод класса
	public function getMyVar() {
		return $this->myVar;
	}

	// метод класса
	public function setMyVar( $myVar ) {
		$this->myVar = $myVar;
	}

	// получить удвоенное значение поля $myVar
	public function getDoubledVar() {
		return $this->myVar * 2;
	}
}

// создание объектов класса MyClass
$myClassObjOne = new MyClass();
$myClassObjTwo = new MyClass();

// задание переменной объекту $myClassObjOne
$myClassObjOne->setMyVar(42);

// задание переменной объекту $myClassObjTwo
$myClassObjTwo->setMyVar(98);

echo $myClassObjOne->getDoubledVar(); // 84
echo $myClassObjTwo->getDoubledVar(); // 196

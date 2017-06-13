<?php

// объявляем namespace Company\Project\Module1
namespace Company\Project\Module1 {
	class MyTestClass {
		// объявляем закрытую переменную $myVar
		private $myVar;

		// конструктор
		public function __construct($myVar) {
			$this->myVar = $myVar;
		}

		// получение значения переменной
		public function getMyVar() {
			return $this->myVar;
		}
	}
}

// объявляем namespace Company\Project\Module2
namespace Company\Project\Module2 {
	// создаем объект класса MyTestClass из пакета Company\Project\Module1
	$myTestClassObj = new \Company\Project\Module1\MyTestClass(123);

	// выводим значене переменной
	echo $myTestClassObj->getMyVar();
}

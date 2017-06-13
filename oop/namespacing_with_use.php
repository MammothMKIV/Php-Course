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
	// "импортируем" MyTestClass из неймспейса Company\Project\Module1
    use Company\Project\Module1\MyTestClass;

    // с использованием use, нам не надо указывать полный адрес класса с указанием неймспейса
    $myTestClassObj = new MyTestClass(123);

	// выводим значене переменной
    echo $myTestClassObj->getMyVar();
}

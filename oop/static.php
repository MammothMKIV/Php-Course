<?php

class MyClassWithStatic {
    private static $myVar = 25;
    private $myVar1 = 34;

    public static function myStaticMethod() {
        echo self::$myVar; // 25
//        echo self::$myVar1; // ошибка
//        echo $this->myVar; // ошибка
//        echo $this->myMethod(); // ошибка
    }

    public function myMethod() {
    	echo $this->myVar1;
	    MyClassWithStatic::myStaticMethod();
    }
}

MyClassWithStatic::myStaticMethod();

$myObj = new MyClassWithStatic();
$myObj->myMethod();

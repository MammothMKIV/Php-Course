<?php

class A {
	public function methodA() {
		echo "hello world";
	}

	public function methodB() {
		echo "method B";
	}
}

class B extends A {
	function methodB() {
		echo "method B override";
		parent::methodB();
	}

	function methodC() {
		echo "method C";
	}
}

$b = new B();

$b->methodC();

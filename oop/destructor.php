<?php

class MyClass
{
    // объявляем деструктор
    public function __destruct()
    {
        echo 'destroyed' . PHP_EOL;
    }
}

// создаем объкт класса MyClass
$a = new MyClass();

// присваиваем ссылку на объект в переменную $b
$b = $a;

echo 'unsetting a' . PHP_EOL;

// удаляем ссылку на объект из переменной $a
unset($a);

echo 'unsetting b' . PHP_EOL;

// удаляем ссылку на объект из переменной $b
unset($b);

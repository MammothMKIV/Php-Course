<?php
/*
 * Этот файл является единственным нужным файлом для всех скриптов. Запускает сессию и подключает автозагрузку. Благодаря этому необходимость в других include снижается.
 * */

// подключаем автолоадер
require 'autoload.php';

// запускаем сессию
session_start();

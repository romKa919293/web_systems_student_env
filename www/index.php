<?php

header('Content-type: text/html; charset = utf-8');//установка контента и кодировки
include_once "autoinclude.php";//подключение автозагрузчика

$loader = new AutoIncluder();//автозагрузка всех файлов прокта

$router = Router::getInstance();//создание единственного экземпляра класса роутинга
$router->process($_SERVER["REQUEST_URI"],$_SERVER["REQUEST_METHOD"]);//вызов метода роутинка


<?php

define("ROOT", dirname(__FILE__));

include ROOT . "/config.php";
include ROOT . "/engine.php";

// Получить запрошенный путь на сервере
$path = explode("/", trim($_GET['path'], "/"));

// Получить название ручки и параметр из пути, определить параметры запроса
$handler = $path[0];
$param = htmlspecialchars($path[1] ?? "");

$request_method = $_SERVER['REQUEST_METHOD'];
$request_body = $request_method == "POST" ? json_decode(file_get_contents("php://input")) : "";

// Получить полный путь до скрипта-обработчика ручки и проверить его существование
$handler_path = ROOT . "/handlers/" . $handler . ".php";

if (!file_exists($handler_path)) throw_404_error();

// Подключиться к базе данных
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Запустить скрипт-обработчик ручки
include $handler_path;

// Закрыть соединение с базой данных
$mysqli->close();

?>
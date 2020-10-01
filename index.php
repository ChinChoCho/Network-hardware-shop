<?php

include_once "php/config/config.php";         // Инициализация настроек
include_once "php/config/db.php";             // Инициализация БД
include_once "php/library/mainFunctions.php"; // Основные Функции

// Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//echo "Подключаемый php файл (Контроллер) = " . $controllerName . "<br />";

// Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

//echo "Функция формирующая страницу (Экшэн) = " . $actionName . "<br />";
loadPage($smarty, $db, $controllerName, $actionName);

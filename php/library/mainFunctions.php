<?php

// 
// ОСНОВНЫЕ ФУНКЦИИ
// 

/**
 * Формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
function loadPage($smarty, $db, $controllerName, $actionName = "index")
{
   // Подключанем контроллер
   include_once PathPrefix . $controllerName . PathPostfix;
   // Формируем название функции
   $function = $actionName . "Action";
   // Вызываем функцию
   $function($smarty, $db);
}

/**
 * Загрузка шаблона
 * @param string $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName)
{
   $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы выводя значение переменной $value
 * 
 * @param variant $value переменная для вывода ее на страницу
 */
function d($value = null, $die = 1)
{
   echo "Debug: <br /><pre>";
   print_r($value);
   echo "</pre>";

   if ($die) die;
}

/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 * 
 * @param recordset $rs набор строк - результат работы SELECT
 * @return array
 */
function createSmartyRsArray($rs)
{
   if (!$rs) return false;

   $smartyRs = array();
   while ($row = mysqli_fetch_assoc($rs)) {
      $smartyRs[] = $row;
   }

   return $smartyRs;
}
<?php

// 
// ФАЙЛ НАСТРОЕК
// 

// Константы для обращение к контроллерам
define("PathPrefix", "php/controllers/");
define("PathPostfix", "Controller.php");

// используемый шаблон
$template = "default";

// Пути к файлам шаблонов (*.php)
define("TemplatePrefix", "php/blocks/{$template}/");
define("TemplatePostfix", ".tpl");

// пути к файлам шаблонов в вебпространстве
define("TemplateWebPath", "templates/{$template}/");

//Инициализация шаблонизатора Smarty
require('php/library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir("php/tmp/smarty/templates_c");
$smarty->setCacheDir("php/tmp/smarty/cache");
$smarty->setConfigDir("php/library/Smarty/configs");

$smarty->assign("templateWebPath", TemplateWebPath);
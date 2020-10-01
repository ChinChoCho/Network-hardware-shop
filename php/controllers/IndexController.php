<?php

/**
 * КОНТРОЛЛЕР ГЛАВНОЙ СТРАНИЦЫ
 */

// Подключаем модели
include_once "php/models/CategoriesModel.php";

function testAction()
{
   echo "IndexController.php > testAction";
}

/**
 * Формирование главной страницы
 */
function indexAction($smarty, $db)
{

   $rsCategories = getAllMainCatsWithChildren($db); //получили массив

   $smarty->assign("rsCategories", $rsCategories);

   echo '<!DOCTYPE html>
   <html lang="ru">
   
   <head>
      <link rel="stylesheet" href="css/style.css">
      <meta http-equiv="Content-type" content="text/html" charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Network & Server hardware store</title>
   </head>
   
   <body class="body">';

   loadTemplate($smarty, "header");
   loadTemplate($smarty, "index");

   echo '
         </div>
      </main>
      <script src="js/script.js"></script>
      <script src="js/dynamic_adapt.js"></script>
      <script src="js/script_items.js"></script>
      </body>
   
   </html>';
}
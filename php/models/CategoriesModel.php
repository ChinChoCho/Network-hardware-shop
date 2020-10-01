<?php

/**
 *  МОДЕЛЬ ДЛЯ ТАБЛИЦЫ КАТЕГОРИЙ (categories)
 */

/**
 * Получить дочернии категории для категории $catId
 * @param integer $catId ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($db, $catId)
{
   $sql = "SELECT * FROM categories WHERE parent_id = '{$catId}'";

   $rs = mysqli_query($db, $sql);

   return createSmartyRsArray($rs);
}

/**
 *  Получить главные категории с привязками дочерних
 * 
 * @return array массив категорий
 */
function getAllMainCatsWithChildren($db)
{
   $sql = "SELECT * FROM categories WHERE parent_id = 0";

   $rs = mysqli_query($db, $sql);
   $smartyRs = array();
   while ($row = mysqli_fetch_assoc($rs)) {

      $rsChildren = getChildrenForCat($db, $row['id']);

      if ($rsChildren) {
         $row['children'] = $rsChildren;
      }

      $smartyRs[] = $row;
   }
   return $smartyRs;
}
<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 03:09:21
  from 'C:\OpenServer\domains\localhost\Network-hardware-shop\php\blocks\default\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f751e3119eb90_42460393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd332081045acc39d771f055e088fa892815882' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\Network-hardware-shop\\php\\blocks\\default\\categories.tpl',
      1 => 1601510957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f751e3119eb90_42460393 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="page">
   <div class="page__container _container">
      <aside class="page__side">
         <nav class="page__menu menu-page">
            <div class="menu-page__header">
               <div class="menu-page__title">Каталог товаров</div>
               <div class="menu-page__burger">
                  <div class="menu-page__lines _active">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
            </div>
            <div class="menu-page__body">
               <ul class="menu-page__list">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                  <li class="menu-page__link_parent">
                     <a href="" class="menu-page__link"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a>

                     <div class="menu-page__submenu submenu-page">
                        <div class="submenu-page__item">
                           <ul class="submenu-page__list">
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                              <li><a href="" class="submenu-page__link"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['title'];?>
</a></li>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           </ul>
                        </div>
                     </div>

                  </li>
                  <?php } else { ?>
                  <li><a href="" class="menu-page__link"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a></li>
                  <?php }?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

               </ul>
            </div>
         </nav>
      </aside><?php }
}

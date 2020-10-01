<main class="page">
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
                  <?php d($rsCategories); ?>
                  <?php foreach ($rsCategories as $item) : ?>
                  <li class="menu-page__link_parent">
                     <a href="" class="menu-page__link"><?php $item["title"] ?></a>
                     <!-- <div class="menu-page__submenu submenu-page">
                        <div class="submenu-page__item">
                           <ul class="submenu-page__list">
                              <li><a href="" class="submenu-page__link">Всепогодный</a></li>
                              <li><a href="" class="submenu-page__link">Для помещений</a></li>
                              <li><a href="" class="submenu-page__link">Профессиональный</a></li>
                              <li><a href="" class="submenu-page__link">Любительский</a></li>
                           </ul>
                        </div>
                     </div> -->
                  </li>
                  <?php endforeach; ?>
                  <li><a href="" class="menu-page__link">Эллептические тренажеры</a></li>
               </ul>
            </div>
         </nav>
      </aside>
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
                  {foreach $rsCategories as $item}
                  {if isset($item['children'])}
                  <li class="menu-page__link_parent">
                     <a href="" class="menu-page__link">{$item["title"]}</a>

                     <div class="menu-page__submenu submenu-page">
                        <div class="submenu-page__item">
                           <ul class="submenu-page__list">
                              {foreach $item['children'] as $itemChild}
                              <li><a href="" class="submenu-page__link">{$itemChild['title']}</a></li>
                              {/foreach}
                           </ul>
                        </div>
                     </div>

                  </li>
                  {else}
                  <li><a href="" class="menu-page__link">{$item["title"]}</a></li>
                  {/if}
                  {/foreach}

               </ul>
            </div>
         </nav>
      </aside>
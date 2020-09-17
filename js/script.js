
"use strict";
// $(document).ready(function () {
//    $(".icon-menu").click(function (event) {
//       $(".icon-menu").toggleClass("icon-menu_active");
//    });
// });

function add_toggle_element(elementClass, elementsArray, toggleClass) {
   let element = document.querySelector("." + elementClass);
   element.addEventListener("click", function () {
      for (let i = 0; i < elementsArray.length; i++) {
         let element = document.querySelector("." + elementsArray[i]);
         element.classList.toggle(toggleClass);
      }
   });
}

add_toggle_element("icon-menu", ["icon-menu", "menu__body"], "_active");
add_toggle_element("menu-page__burger", ["menu-page__lines"], "_active");

"use strict";
// $(document).ready(function () {
//    $(".icon-menu").click(function (event) {
//       $(".icon-menu").toggleClass("icon-menu_active");
//    });
// });

function add_toggle_element(elementClass, elementsArray, toggleClass) {
   let element = document.querySelector("." + elementClass);
   element.addEventListener("click", function () {
      element.classList.toggle(toggleClass);
      for (let i = 0; i < elementsArray.length; i++) {
         let element = document.querySelector("." + elementsArray[i]);
         element.classList.toggle(toggleClass);
      }
   });
}


add_toggle_element("icon-menu", ["menu__body"], "_active");
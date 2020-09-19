
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

function add_hover_elements(elementsClass, toggleClass) {
   let elements = document.querySelectorAll("." + elementsClass);
   for (let i = 0; i < elements.length; i++) {
      elements[i].addEventListener("mouseenter", function () {
         if (isMobile()) {
            let childElements = document.querySelectorAll("." + elementsClass + ">a");
            childElements[i].addEventListener("click", function (e) {
               childElements[i].parentElement.classList.toggle(toggleClass);
               e.preventDefault();
            });
         }
         else {
            elements[i].classList.add(toggleClass);
         }
      });
      elements[i].addEventListener("mouseleave", function () {
         if (isMobile()) {

         }
         else {
            elements[i].classList.remove(toggleClass);
         }
      });
   }
}

function isMobile() {
   let width = document.body.clientWidth;
   if (width < 992) {
      return true;
   }
   else {
      return false;
   }
}

add_toggle_element("icon-menu", ["icon-menu", "menu__body"], "_active");
add_toggle_element("menu-page__burger", ["menu-page__lines", "menu-page__body"], "_active");

add_hover_elements("menu-page__link_parent", "_active");


// add_hover_elements("menu-page__link_parent", "_active");
// console.log(isMobile());
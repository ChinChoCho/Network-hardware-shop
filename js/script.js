
"use strict";

// $(document).ready(function () {
//    $(".icon-menu").click(function (event) {
//       $(".icon-menu").toggleClass("icon-menu_active");
//    });
// });

function add_toggle_element(elementClass, elementsArray, toggleClass) {
   let element = document.querySelector("." + elementClass);
   element.addEventListener("click", function (e) {
      for (let i = 0; i < elementsArray.length; i++) {
         let element = document.querySelector("." + elementsArray[i]);
         element.classList.toggle(toggleClass);
         e.preventDefault();
      }
   });
}

// function add_hover_elements(elementsClass, toggleClass) {
//    let elements = document.querySelectorAll("." + elementsClass);
//    for (let i = 0; i < elements.length; i++) {
//       elements[i].addEventListener("mouseenter", function () {
//          if (isMobile()) {
//             let childElements = document.querySelectorAll("." + elementsClass + ">a");
//             childElements[i].addEventListener("click", function (e) {
//                childElements[i].parentElement.classList.toggle(toggleClass);
//                e.preventDefault();
//             });
//          }
//          else {
//             elements[i].classList.add(toggleClass);
//          }
//       });
//       elements[i].addEventListener("mouseleave", function () {
//          if (isMobile()) {
//          }
//          else {
//          }
//       });
//    }
// }

function isMobile() {
   let width = document.body.clientWidth;
   if (width < 992) {
      return true;
   }
   else {
      return false;
   }
}

function add() {
   elements[i].classList.add("_active");
}

function remove() {
   elements[i].classList.remove("_active");
}
// var handler = function (event) {
//    elements[i].classList.toggle("_active");
//    event.preventDefault();
// };

// let handler = {
//    handleEvent: addToggle
// };

let currentDevice = isMobile();

let timerId = setInterval(function () {
   if (currentDevice && !isMobile()) {
      for (let i = 0; i < elements.length; i++) {
         elements[i].classList.remove("_active");
         childElements[i].onclick = null;
         //elements[i].addEventListener("click", function (e), { passive: false });
         // elements[i].removeEventListener("click", function (e) {
         //    elements[i].classList.toggle("_active");
         //    e.preventDefault();
         // });
         elements[i].onmouseenter = function () {
            elements[i].classList.add("_active");
         };
         elements[i].onmouseleave = function () {
            elements[i].classList.remove("_active");
         };
      }
   }
   else if (!currentDevice && isMobile()) {
      for (let i = 0; i < elements.length; i++) {
         elements[i].classList.remove("_active");
         elements[i].onmouseenter = null;
         elements[i].onmouseleave = null;
         childElements[i].onclick = function (e) {
            elements[i].classList.toggle("_active");
            e.preventDefault();
         };
      }
   }
   currentDevice = isMobile();
}, 500);

let elements = document.querySelectorAll(".menu-page__link_parent");
let childElements = document.querySelectorAll(".menu-page__link_parent > a");

if (isMobile()) {
   for (let i = 0; i < elements.length; i++) {
      childElements[i].onclick = function (e) {
         elements[i].classList.toggle("_active");
         e.preventDefault();
      };
   }
}
else {
   for (let i = 0; i < elements.length; i++) {
      elements[i].onmouseenter = function () {
         elements[i].classList.add("_active");
      };
      elements[i].onmouseleave = function () {
         elements[i].classList.remove("_active");
      };
   }
}

add_toggle_element("icon-menu", ["icon-menu", "menu__body"], "_active");
add_toggle_element("menu-page__burger", ["menu-page__lines", "menu-page__body"], "_active");

//add_hover_elements("menu-page__link_parent", "_active");


// add_hover_elements("menu-page__link_parent", "_active");
// console.log(isMobile());
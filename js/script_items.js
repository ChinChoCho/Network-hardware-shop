"use strict";

let currentDevice2 = isMobile();
let items = document.querySelectorAll(".item-product");

let itemsTimer = setInterval(function () {
   if (currentDevice2 && !isMobile()) {
      for (let i = 0; i < items.length; i++) {
         items[i].classList.remove("_active");
         items[i].onmouseenter = function () {
            items[i].classList.add("_active");
         };
         items[i].onmouseleave = function () {
            items[i].classList.remove("_active");
         };
      }
   }
   else if (!currentDevice2 && isMobile()) {
      for (let i = 0; i < items.length; i++) {
         items[i].classList.add("_active");
         items[i].onmouseenter = null;
         items[i].onmouseleave = null;
      }
   }
   currentDevice2 = isMobile();
}, 500);


if (isMobile()) {
   for (let i = 0; i < items.length; i++) {
      items[i].classList.add("_active");
   }
}
else {
   for (let i = 0; i < items.length; i++) {
      items[i].onmouseenter = function () {
         items[i].classList.add("_active");
      };
      items[i].onmouseleave = function () {
         items[i].classList.remove("_active");
      };
   }
}
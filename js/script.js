// $(document).ready(function () {
//    $(".icon-menu").click(function (event) {
//       $(".icon-menu").toggleClass("icon-menu_active");
//    });
// });

function addToggleElement(elementClass, toggleClass) {
   let element = document.querySelector("." + elementClass);
   element.addEventListener("click", function () {
      element.classList.toggle(toggleClass);
   });
}

addToggleElement("icon-menu", "_active");
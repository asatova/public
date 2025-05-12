/***********************
* 
* reviews text hide/show
* 
************************/

// (function() {
//   function iComputerSlide(element, options) {
//     options = Object.assign({
//       height: 200,
//       btnClose: "Close",
//       btnOpen: "Open"
//     }, options);

//     function makeWrap($element, options) {
//       return '<div class="io_item">' +
//         '<div class="io_item_wrap" style="max-height:' + options.height + 'px">' + element.outerHTML +
//         '<div class="io_trans"></div>' +
//         '</div>' +
//         '<div class="io_button_wrap">' +
//         '<a class="io_button btn_close">' + options.btnClose + '</a>' +
//         '<a class="io_button btn_open">' + options.btnOpen + '</a>' +
//         '</div>' +
//         '</div>';
//     }

//     document.addEventListener("click", function(event) {
//       var target = event.target;
//       if (target.classList.contains("io_button")) {
//         target.closest(".io_item").classList.toggle("open");
//       }
//     });

//     var element = document.querySelector(element);
//     var wrapper = document.createElement("div");
//     wrapper.innerHTML = makeWrap(element, options);
//     element.parentNode.replaceChild(wrapper, element);
//   }

//   document.addEventListener("DOMContentLoaded", function() {
//     iComputerSlide(".item_text", {
//       height: 150,
//       btnClose: "Свернуть",
//       btnOpen: "Читать"
//     });
//   });
// })();

/***********************
* Navigation
************************/

// document.addEventListener("DOMContentLoaded", function() {
//     var mobileMenuItems = document.querySelectorAll(".e-mobile-menu__main-menu .menu-item-has-children > a");

//     mobileMenuItems.forEach(function(item) {
//         item.addEventListener("click", function(e) {
//             e.preventDefault();

//             var submenu = this.nextElementSibling;

//             submenu.classList.toggle("js-mobile-menu-open");

//             mobileMenuItems.forEach(function(otherItem) {
//                 if (otherItem !== item) {
//                     otherItem.nextElementSibling.classList.remove("js-mobile-menu-open");
//                     otherItem.classList.remove("js-menu-active");
//                 }
//             });

//             item.classList.toggle("js-menu-active");
//         });
//     });

//     var desktopMenuItems = document.querySelectorAll(".c-desktop-menu > div > ul > .menu-item-has-children > a");

//     desktopMenuItems.forEach(function(item) {
//         item.addEventListener("click", function(e) {
//             e.preventDefault();

//             var submenu = this.nextElementSibling;

//             submenu.classList.toggle("js-menu-open");

//             desktopMenuItems.forEach(function(otherItem) {
//                 if (otherItem !== item) {
//                     otherItem.nextElementSibling.classList.remove("js-menu-open");
//                     otherItem.classList.remove("js-menu-active");
//                 }
//             });

//             item.classList.toggle("js-menu-active");
//         });
//     });
// });

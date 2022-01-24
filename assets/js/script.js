$(function () {
 $(".menu-link").click(function () {
  $(".menu-link").removeClass("is-active");
  $(this).addClass("is-active");
 });
});



// var activeNavItem = $('."menu-link');

// activeNavItem.click(function(){
//   activeNavItem.removeClass('is-active');
//   $(this).addClass('is-active');  
// });

$(function () {
 $(".main-header-link").click(function () {
  $(".main-header-link").removeClass("is-active");
  $(this).addClass("is-active");
 });
});

const dropdowns = document.querySelectorAll(".dropdown");
dropdowns.forEach((dropdown) => {
 dropdown.addEventListener("click", (e) => {
  e.stopPropagation();
  dropdowns.forEach((c) => c.classList.remove("is-active"));
  dropdown.classList.add("is-active");
 });
});

$(".search-bar input")
 .focus(function () {
  $(".header").addClass("wide");
 })
 .blur(function () {
  $(".header").removeClass("wide");
 });

$(document).click(function (e) {
 var container = $(".status-button");
 var dd = $(".dropdown");
 if (!container.is(e.target) && container.has(e.target).length === 0) {
  dd.removeClass("is-active");
 }
});

$(function () {
 $(".dropdown").on("click", function (e) {
  $(".content-wrapper").addClass("overlay");
  e.stopPropagation();
 });
 $(document).on("click", function (e) {
  if ($(e.target).is(".dropdown") === false) {
   $(".content-wrapper").removeClass("overlay");
  }
 });
});

$(function () {
 $(".status-button:not(.open)").on("click", function (e) {
  $(".overlay-app").addClass("is-active");
 });
 $(".pop-up .close").click(function () {
  $(".overlay-app").removeClass("is-active");
 });
});

$(".status-button:not(.open)").click(function () {
 $(".pop-up").addClass("visible");
});

$(".pop-up .close").click(function () {
 $(".pop-up").removeClass("visible");
});



// const toggleButton = document.querySelector('.dark-light');


// toggleButton.addEventListener('click', () => {
//   document.body.classList.toggle('light-mode');
// });



const body = document.querySelector('body');
const button = document.querySelector('#darkbutton');
function toggleDark() {
  if (body.classList.contains('light-mode')) {
    body.classList.remove('light-mode');
    localStorage.setItem("theme", "dark-mode");
  } else {
    body.classList.add('light-mode');
    localStorage.setItem("theme", "light-mode");
  }
}

if (localStorage.getItem("theme") === "light-mode") {
  body.classList.add('light-mode');
}

document.querySelector('#darkbutton').addEventListener('click', toggleDark);

// // check for saved 'darkMode' in localStorage
// let darkMode = localStorage.getItem('light-mode'); 

// const darkModeToggle = document.querySelector('#darkmode');

// const enableDarkMode = () => {
//   // 1. Add the class to the body
//   document.body.classList.addClass('light-mode');
//   // 2. Update darkMode in localStorage
//   localStorage.setItem('light-mode', 'enabled');
// }

// const disableDarkMode = () => {
//   // 1. Remove the class from the body
//   document.body.classList.removeClass('light-mode');
//   // 2. Update darkMode in localStorage 
//   localStorage.setItem('light-mode', null);
// }
 
// // If the user already visited and enabled darkMode
// // start things off with it on
// if (darkMode === 'enabled') {
//   enableDarkMode();
// }

// // When someone clicks the button
// darkModeToggle.addEventListener('click', () => {
//   // get their darkMode setting
//   darkMode = localStorage.getItem('light-mode'); 
  
//   // if it not current enabled, enable it
//   if (darkMode !== 'enabled') {
//     enableDarkMode();
//   // if it has been enabled, turn it off  
//   } else {  
//     disableDarkMode(); 
//   }
// });


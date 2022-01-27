const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const body = document.querySelector('body');
const themeToggler = document.querySelector(".theme-toggler"); 
const button = document.querySelector('#darkbutton');

//tampilkan sidebar
menuBtn.addEventListener('click',() => {
    sideMenu.style.display = 'block';
})

//tutup sidebar
closeBtn.addEventListener('click',() => {
    sideMenu.style.display = 'none';
})

//ganti tema
// themeToggler.addEventListener('click', () =>{
//     document.body.classList.toggle('dark-theme-variables');

//     themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
//     themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
// })



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



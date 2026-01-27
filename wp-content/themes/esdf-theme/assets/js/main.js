const menuBtn = document.querySelector('.toggle-btn');
const closeMenuBtn = document.querySelector('.navbar-close-btn');
const menu = document.querySelector('.navbar-mobile');
const overlay = document.querySelector('.overlay-all');
const searchOpenBtn = document.querySelector('.search-open-btn')
const searchDiv = document.querySelector('.search-div')
const closeSearchBtn = document.querySelector('.search-close-btn')
const navBarCloseBtn = document.querySelector('.navbar-close-btn')

menuBtn.addEventListener('click', () => {
  console.log("menuuuuuu")
  menu.classList.add('active');
  overlay.classList.add('active');
});

closeMenuBtn.addEventListener('click', () => {
  menu.classList.remove('active');
  overlay.classList.remove('active');
});

overlay.addEventListener('click', () => {
  menu.classList.remove('active');
  overlay.classList.remove('active');
});

searchOpenBtn.addEventListener('click', () => {
  console.log("searchhhhhh")
  searchDiv.classList.add('active');
  overlay.classList.add('active');
});

closeSearchBtn.addEventListener('click', () => {
  searchDiv.classList.remove('active');
  overlay.classList.remove('active');
});

navBarCloseBtn.addEventListener('click', () => {
  menu.classList.remove('active');
  overlay.classList.remove('active');
});


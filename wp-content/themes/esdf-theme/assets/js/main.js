document.onload = function () {

  const togglemenubtn = document.querySelector('.toggle-btn');
  const togglecontactbtn = document.querySelector('.contact-btn');
  const toggleclosemenubtn = document.querySelector('.navbar-close-btn');
  const togglesearchbtn = document.querySelector('.search-btn');
  const toggleclosesearchbtn = document.querySelector('.search-close-btn');
  const navbarMobile = document.querySelector('.navbar-mobile');
  const contactMenu = document.querySelector('.contact-menu');
  const searchDiv = document.querySelector('.search-div');
  const overlayAll = document.querySelector('.overlay-all');

  const toggleActiveState = (selectors, isActive) => {
    selectors.forEach(selector => {
      document.querySelector(selector)?.classList.toggle('active', isActive);
    });
  };

  togglemenubtn.addEventListener('click', () => {
    toggleActiveState(['.navbar-mobile', '.overlay-all'], true);
  });

  togglecontactbtn.addEventListener('click', () => {
    toggleActiveState(['.contact-menu', '.overlay-all'], true);
  });

  toggleclosemenubtn.addEventListener('click', () => {
    toggleActiveState(['.contact-menu', '.overlay-all'], false);
  });

  togglesearchbtn.addEventListener('click', () => {
    toggleActiveState(['.search-div', '.overlay-all'], true);
  });

  toggleclosesearchbtn.addEventListener('click', () => {
    toggleActiveState(['.search-div', '.overlay-all'], false);
  });

  overlayAll.addEventListener('click', () => {
    toggleActiveState(['.navbar-mobile', '.contact-menu', '.search-div', '.overlay-all'], false);
  });

  navbarMobile.addEventListener('click', () => {
    toggleActiveState(['.navbar-mobile', '.overlay-all'], false);
  });

  contactMenu.addEventListener('click', () => {
    toggleActiveState(['.contact-menu', '.overlay-all'], false);
  });

  searchDiv.addEventListener('click', () => {
    toggleActiveState(['.search-div', '.overlay-all'], false);
  });



};
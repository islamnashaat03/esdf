document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  // Initialize AOS
  AOS.init({
    easing: 'ease-in-out',
    once: true,
    mirror: true,
    anchorPlacement: 'top-bottom',
    offset: 100,

  });

  const menuBtn = document.querySelector('.toggle-btn');
  const closeMenuBtn = document.querySelector('.navbar-close-btn');
  const mobileMenu = document.querySelector('.navbar-mobile');
  const overlay = document.querySelector('.overlay-all');
  const searchOpenBtn = document.querySelector('.search-open-btn');
  const searchDiv = document.querySelector('.search-div');
  const closeSearchBtn = document.querySelector('.search-close-btn');

  // Open the mobile menu and show overlay
  if (menuBtn) {
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.add('active');
      overlay.classList.add('active');
    });
  }

  // Close the mobile menu and hide overlay when close button is clicked
  if (closeMenuBtn) {
    closeMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.remove('active');
      overlay.classList.remove('active');
    });
  }

  // Close the mobile menu and hide overlay when overlay itself is clicked
  if (overlay) {
    overlay.addEventListener('click', () => {
      mobileMenu.classList.remove('active');
      overlay.classList.remove('active');
    });
  }

  // Open the search bar container
  if (searchOpenBtn) {
    searchOpenBtn.addEventListener('click', () => {
      searchDiv.classList.add('active');
    });
  }

  // Close the search bar container
  if (closeSearchBtn) {
    closeSearchBtn.addEventListener('click', () => {
      searchDiv.classList.remove('active');
    });
  }



  // Show/Hide "Scroll to Top" button based on scroll position
  window.addEventListener('scroll', () => {
    const upBtn = document.querySelector('.up');
    const mainMenu = document.querySelector('.fixed-nav');
    if (upBtn) {
      if (window.scrollY > 500) {
        upBtn.classList.add('active');
      } else {
        upBtn.classList.remove('active');
      }
    }
    if (mainMenu) {
      if (window.scrollY > 100) {
        mainMenu.classList.add('fixed');
      } else {
        mainMenu.classList.remove('fixed');
      }
    }

  });
  const upBtn = document.querySelector('.up');
  upBtn.onclick = () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  };
});

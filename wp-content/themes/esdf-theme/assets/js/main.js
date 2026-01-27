document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  const menuBtn = document.querySelector('.toggle-btn');
  const closeMenuBtn = document.querySelector('.navbar-close-btn');
  const menu = document.querySelector('.navbar-mobile');
  const overlay = document.querySelector('.overlay-all');
  const searchOpenBtn = document.querySelector('.search-open-btn');
  const searchDiv = document.querySelector('.search-div');
  const closeSearchBtn = document.querySelector('.search-close-btn');

  // Open the mobile menu and show overlay
  if (menuBtn) {
    menuBtn.addEventListener('click', () => {
      menu.classList.add('active');
      overlay.classList.add('active');
    });
  }

  // Close the mobile menu and hide overlay when close button is clicked
  if (closeMenuBtn) {
    closeMenuBtn.addEventListener('click', () => {
      menu.classList.remove('active');
      overlay.classList.remove('active');
    });
  }

  // Close the mobile menu and hide overlay when overlay itself is clicked
  if (overlay) {
    overlay.addEventListener('click', () => {
      menu.classList.remove('active');
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
    if (upBtn) {
      if (window.scrollY > 500) {
        upBtn.classList.add('active');
      } else {
        upBtn.classList.remove('active');
      }
    }
  });

});

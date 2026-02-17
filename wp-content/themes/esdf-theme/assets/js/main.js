document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  // Initialize AOS
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    offset: 0,

  });
  window.addEventListener('load', function () {
  AOS.refresh();
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
        if (!mainMenu.classList.contains('fixed')) {
          // Get navbar height before fixing it
          const navHeight = mainMenu.offsetHeight;
        mainMenu.classList.add('fixed');
          // Add padding to body to prevent content jump
          document.body.style.paddingTop = navHeight + 'px';
        }
      } else {
        mainMenu.classList.remove('fixed');
        // Remove padding when navbar is not fixed
        document.body.style.paddingTop = '0';
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

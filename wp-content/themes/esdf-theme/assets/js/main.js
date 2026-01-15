const toggleActiveState = (selectors, isActive) => {
  selectors.forEach(selector => {
    document.querySelector(selector)?.classList.toggle('active', isActive);
  });
};

document.querySelector('.menu-btn')?.addEventListener('click', () => {
  toggleActiveState(['.navbar-mobile', '.overlay-all'], true);
});

document.querySelector('.contact-btn')?.addEventListener('click', () => {
  toggleActiveState(['.contact-menu', '.overlay-all'], true);
});

document.querySelector('.close-menu-btn')?.addEventListener('click', () => {
  toggleActiveState(['.contact-menu', '.overlay-all'], false);
});

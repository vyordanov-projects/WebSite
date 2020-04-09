let mobileNav = document.querySelector('.js--nav-icon');
let mainMenu = document.querySelector('.js--main-nav');
let iconState = document.querySelector('.js--nav-icon i');

mobileNav.addEventListener("click", toggleMobileMenu);

window.addEventListener('resize', onResize);

//Fix for main menu after resizing
function onResize() {
  if (document.documentElement.clientWidth > 767) {
    mainMenu.style.display = 'block';
  } else {
    mainMenu.style.display = 'none';
  }
}
//Toggle mobile-navigation menu
function toggleMobileMenu() {
  if (mainMenu.style.display == 'block') {
    iconState.classList.remove('ion-close-round');
    iconState.classList.add('ion-navicon-round');
    mainMenu.style.display = 'none';
  } else {
    mainMenu.style.display = 'block';
    iconState.classList.remove('ion-navicon-round');
    iconState.classList.add('ion-close-round');
  }
}
// auto-update copyright year
const currentYear = document.querySelector(".footer__text--currentYear");
currentYear.innerHTML = new Date().getFullYear();

// nav menu, nav menu button, and nav menu button icon
const navMenu = document.querySelector(".nav-menu");
const navMenuButton = document.querySelector(".nav-menu-button");
let navMenuButtonIconHamburger = document.querySelector(
  ".nav-menu-button-icon--hamburger"
);
let navMenuButtonIconClose = document.querySelector(
  ".nav-menu-button-icon--close"
);
const header = document.querySelector(".header");
const body = document.querySelector("body");

navMenuButton.addEventListener("click", () => {
  const navMenuIsActive = document.querySelector(".nav-menu--active");
  if (!navMenuIsActive) {
    body.style.overflow = "hidden";
  } else {
    body.style.overflow = "auto";
  }
  toggleNavButton();
});

navMenu.addEventListener("click", e => {
  // auto-close menu if any of its links are clicked
  let isInMobile = matchMedia("only screen and (max-width: 851px)").matches;
  if (isInMobile) {
    let isNavMenuItemLink = e.target.parentNode.classList.contains(
      "nav-menu__item"
    );
    if (isNavMenuItemLink) {
      toggleNavButton();
      body.style.overflow = "auto";
    }
  }
});

function toggleNavButton() {
  // toggle menu icon between hamburger and close
  navMenuButtonIconHamburger.classList.toggle(
    "nav-menu-button-icon--hamburger--active"
  );
  navMenuButtonIconClose.classList.toggle(
    "nav-menu-button-icon--close--active"
  );
  navMenu.classList.toggle("nav-menu--active");
}

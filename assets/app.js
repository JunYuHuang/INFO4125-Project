// auto-update copyright year
const currentYear = document.querySelector(".footer__text--currentYear");
currentYear.innerHTML = new Date().getFullYear();

// nav menu, nav menu button, and nav menu button icon (only applies when user is in mobile or tablet view)
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
  // toggle nav menu
  navMenu.classList.toggle("nav-menu--active");
}

// PRODUCTS PAGE //

// important var for products page and product-page page
let currentProductItemID = "";

// only display and filter the products if the user is on the products page
let productSearchForm = document.querySelector(".search-form");
let productSearchInput = document.querySelector(".input--search");
let productCardGrid = document.querySelector(".card-grid-container");

const errorMessage = "not applicable";

let isProductPage = productSearchForm && productSearchInput && productCardGrid;
if (isProductPage) {
  productSearchForm.addEventListener("submit", e => {
    e.preventDefault(); // stop form from submitting or refreshing
  });

  productSearchInput.addEventListener("keyup", e => {
    filterProducts(e.target.value);
  });

  function filterProducts(searchTerm) {
    searchTerm = searchTerm.toLowerCase();
    let allProducts = document.querySelectorAll(".card");
    allProducts.forEach(product => {
      const productName = product.firstChild.nextSibling.nextSibling.nextSibling.firstChild.nextSibling.firstChild.textContent.toLowerCase();

      // hide products that don't match the search term
      if (productName.indexOf(searchTerm) !== -1) {
        product.style.display = "block";
      } else {
        product.style.display = "none";
      }
    });
  }
}

// CART PAGE

// CHECKOUT PAGE

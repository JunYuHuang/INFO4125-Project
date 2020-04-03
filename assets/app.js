// ALL PAGES //

// auto-update copyright year
const currentYear = document.querySelector(".footer__text--currentYear");
currentYear.innerHTML = new Date().getFullYear();

// nav menu, nav menu button, and nav menu button icon - only if user is on mobile or tablet
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

// display and filter products - only if user is on products page
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

// CHECKOUT PAGE //

// summary checkout toggle button - only if user is on checkout page
let checkoutViewOrderSummaryButton = document.querySelector(
  ".button--toggle-order-summary"
);
let checkoutCartSummaryAccordionList = document.querySelector(
  ".cart__summary--accordion"
);
let accordionStatePhrase = document.querySelector(".accordion-state");

if (
  checkoutCartSummaryAccordionList &&
  checkoutViewOrderSummaryButton &&
  accordionStatePhrase
) {
  accordionStatePhrase.textContent = "Show";

  checkoutViewOrderSummaryButton.addEventListener("click", () => {
    checkoutCartSummaryAccordionList.classList.toggle(
      "cart__summary--accordion--active"
    );
    // toggle the verb phrase of the accordion
    if (accordionStatePhrase.textContent == "Show") {
      accordionStatePhrase.textContent = "Hide";
    } else {
      accordionStatePhrase.textContent = "Show";
    }
  });
}

// credit card validation - only if user is on checkout page
let creditCardProviderSelectInput = document.querySelector(
  ".input--credit-card-provider"
);
let creditCardNumberInput = document.querySelector(
  ".input--credit-card-number"
);

if (creditCardProviderSelectInput && creditCardNumberInput) {
  // state & vars
  let currentCreditCardProvider = "";
  let currentRegex = "";

  // const matchNothingRegex = "^(?!)$";
  const matchNothingRegex = "$^";
  const VISACardRegex = "^(?:4[0-9]{12}(?:[0-9]{3})?)$";
  const MASTERCARDCardRegex = "^(?:5[1-5][0-9]{14})$";
  const AMEXCardRegex = "^(?:3[47][0-9]{13})$";

  console.log(`initial regex: ${currentRegex}`);

  // event listeners
  creditCardProviderSelectInput.addEventListener("change", e => {
    // debug
    console.log(`initial regex: ${currentRegex}`);

    setCreditCardProvider(currentCreditCardProvider, e.target.value);
    console.log(`middle regex: ${currentRegex}`);

    setCurrentCreditCardNumberInputRegex(currentCreditCardProvider);
    console.log(`final regex: ${currentRegex}`);
  });

  // functions
  function setCreditCardProvider(oldProvider, newProvider) {
    if (newProvider != oldProvider) {
      currentCreditCardProvider = newProvider;
      return true;
    } else {
      return false;
    }
  }

  function setCurrentCreditCardNumberInputRegex(currentCardProvider) {
    switch (currentCardProvider) {
      case "":
        currentRegex = matchNothingRegex;
        break;
      case "VISA":
        currentRegex = VISACardRegex;
        break;
      case "MASTERCARD":
        currentRegex = MASTERCARDCardRegex;
        break;
      case "AMEX":
        currentRegex = AMEXCardRegex;
        break;
      default:
        console.log("something went wrong :(");
        break;
    }

    creditCardNumberInput.setAttribute("pattern", currentRegex);
  }
}

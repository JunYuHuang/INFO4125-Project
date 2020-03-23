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

// products page

// front-end mockup products (use until database connection is good)
const pensArray = [
  {
    id: "1",
    name: "Ballpoint Pen",
    price: 4.99,
    description: "The classic choice for students since 1950.",
    imageURL: "./images/products/ballpoint-1_no_logo.jpg"
    // inkColours: ["black", "blue", "red"],
  },
  {
    id: "2",
    name: "Marker Pen",
    price: 4.99,
    description:
      "Great for writing big and bold letters. Also great for smelling.",
    imageURL: "./images/products/marker-1_no_logo.jpg"
  },
  {
    id: "3",
    name: "Gel Pen",
    price: 1.99,
    description: "An applicator for highly viscous and coloured fluids.",
    imageURL: "./images/products/gel-1.jpg"
  },
  {
    id: "4",
    name: "Retractable Pen",
    price: 1.99,
    description:
      "The best tool for both writing and annoying your colleagues at the same time",
    imageURL: "./images/products/retractable-1.jpg"
  },
  {
    id: "5",
    name: "Stylus Pen",
    price: 14.99,
    description:
      "Excellent pen with a comfortable silicon rubber grip that allows for precise ink strokes.",
    imageURL: "./images/products/stylus-1.jpg"
  },
  {
    id: "6",
    name: "Coming Soon TM",
    price: 9999.99,
    description: "Top secret pen coming next century.",
    imageURL: "./images/products/unknown-product.svg"
  }
];

// only display and filter the products if the user is on the products page
let productSearchForm = document.querySelector(".search-form");
let productSearchInput = document.querySelector(".input--search");
let productCardGrid = document.querySelector(".card-grid-container");

let isProductPage = productSearchForm && productSearchInput && productCardGrid;
if (isProductPage) {
  console.log(isProductPage);

  const errorMessage = "not applicable";

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

  function displayProductItems() {
    pensArray.map(pen => {
      // // onClick={() => setCurrentCountry(country)}
      let card = `
      <a
        href="#"
        class="card"
      >
        <div class="card__img-container">
          <img src="${pen.imageURL}" alt="An image of a ${pen.name}"} />
        </div>
        <section class="card__text ellipsis">
          <h3 class="card__text__title ellipsis">
            ${pen.name ? pen.name : errorMessage}
          </h3>
          <p class="card__text__price">
            &#36;${pen.price ? pen.price : errorMessage}
          </p>
        </section>
      </a>
  `;
      productCardGrid.insertAdjacentHTML("beforeend", card);
    });
  }

  displayProductItems();
}

<?php
  // for displaying the number of current items in the cart
  require_once(__DIR__ . '/../../utilities/session.php');
  require_once(__DIR__ . '/../../model/databaseModel.php');
  require_once(__DIR__ . '/../../model/productDBModel.php');
  require_once(__DIR__ . '/../../model/cartModel.php');

  $numberOfCurrentCartItems = getCountOfTotalProductItemsInCart();
?>
    <header class="header">
      <nav role="navigation" class="navbar">
        <div class="logo-wrapper">
          <a href="/INFO4125-Project/" class="logo__link">
            <img class="logo-icon" src="/INFO4125-Project/assets/images/favicon.png" alt="An thumbnail image of the Penzaar brand.">
            <h1 class="logo uppercase">Penzaar</h1>
          </a>
        </div>
        <ul class="nav-menu">
          <li class="nav-menu__item">
            <a href="/INFO4125-Project/products" class="nav-menu__item__link">Products</a>
          </li>
          <li class="nav-menu__item">
            <a href="/INFO4125-Project/views/about.php" class="nav-menu__item__link">About</a>
          </li>
          <li class="nav-menu__item">
            <a href="/INFO4125-Project/views/contact.php" class="nav-menu__item__link">Contact</a>
          </li>
        </ul>
        <div class="nav-special-icons">
          <a
            href="/INFO4125-Project/cart"
            class="button button--cart"
            role="button"
            aria-label="View your online shopping cart"
          >
            <div class="icon-wrapper--nav">
              <img
                src="../assets/images/cart.svg"
                alt="An icon of a shopping cart."
                class="nav-menu-button-icon shopping-cart-icon"
              />
            </div>
            <?php if ($numberOfCurrentCartItems > 0) : ?>
              <div
                class="text-wrapper text-wrapper--cart text-wrapper--cart--active"
              >
                <span>
                  <?php echo ($numberOfCurrentCartItems > 9) ? '9+' : $numberOfCurrentCartItems; ?>
                </span>
              </div>
            <?php endif; ?>
          </a>
          <button
            class="button nav-menu-button"
            role="button"
            aria-label="Navigation Menu"
          >
            <img
              src="../assets/images/icon-hamburger.svg"
              alt="A icon of a hamburger navigation menu."
              class="nav-menu-button-icon nav-menu-button-icon--hamburger nav-menu-button-icon--hamburger--active"
            />
            <img
              src="../assets/images/icon-close.svg"
              alt="A icon of an x that represents closing the navigation menu."
              class="nav-menu-button-icon nav-menu-button-icon--close"
            />
          </button>
        </div>
      </nav>
    </header>
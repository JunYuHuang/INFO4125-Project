<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--cart">
        <h1 class="h1 heading heading--main">Your Cart</h1>
        <article class="section__text section__text--cart">
          <!-- <p class="text-align-left full-width">To remove an item, set its quantity to 0.</p> -->
          <div class="cart">
            <div class="cart__item">
              <div class="cart__item__img-wrapper">
                <img
                  src="/INFO4125-Project/assets/images/products/ballpoint.jpg"
                  alt="gay."
                />
              </div>
              <div class="cart__item__brief">
                <p class="cart__item__brief__product-name ellipsis">
                  <a href="#" class="url-link">
                    Ballpoint Penssssssssssssssssssssssssssssssssssssssssssssssssssss
                  </a>
                </p>
                <div class="input-group input-group--text--no-hover input-group--text--no-hover--fixed-max-width">
                  <input
                    class="input input--text--no-hover full-width"
                    id="input--add-to-cart--quantity"
                    type="number"
                    required
                    value="1"
                    min="0"
                    step="1"
                  />
                  <label class="label" for="input--add-to-cart--quantity">
                    Quantity
                  </label>
                  <button class="button button--red--ghost">Remove</button>
                </div>
              </div>
              <p class="cart__item__price ellipsis">
                &#36;9999.99
              </p>
            </div>
            <hr class="hr hr--cart__item">
            <div class="cart__item">
              <div class="cart__item__img-wrapper">
                <img
                  src="/INFO4125-Project/assets/images/products/ballpoint.jpg"
                  alt="gay."
                />
              </div>
              <div class="cart__item__brief">
                <p class="cart__item__brief__product-name ellipsis">
                  <a href="#" class="url-link">
                    Ballpoint Penssssssssssssssssssssssssssssssssssssssssssssssssssss
                  </a>
                </p>
                <div class="input-group input-group--text--no-hover input-group--text--no-hover--fixed-max-width">
                  <input
                    class="input input--text--no-hover full-width"
                    id="input--add-to-cart--quantity"
                    type="number"
                    required
                    value="1"
                    min="0"
                    step="1"
                  />
                  <label class="label" for="input--add-to-cart--quantity">
                    Quantity
                  </label>
                  <button class="button button--red--ghost">Remove</button>
                </div>
              </div>
              <p class="cart__item__price ellipsis">
                &#36;9999.99
              </p>
            </div>
            <hr class="hr hr--cart__item">
            <div class="cart__item cart__item--subtotal">
              <p class="cart__item__price cart__item__price--subtotal">
                  Subtotal: CAD &#36;9999.99
                </p>
            </div>
          </div>
          <div class="cart__summary">
            <div class="cart__item cart__item--subtotal ellipsis hidden-in-mobile">
                <p class="cart__item__price cart__item__price--subtotal ellipsis">
                  Subtotal: CAD &#36;9999.99
                </p>
            </div>
            <div class="button-container button-container--cart">
              <a href="/INFO4125-Project/products" class="button button--blue--ghost">
                Continue Shopping
              </a>
              <a href="#" class="button button--blue--ghost">
                Update Cart
              </a>
              <a href="#" class="button button--blue button--checkout">
                Checkout
              </a>
            </div>
          </div>
        </article>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>
<?php require_once './partials/header.php'; ?>
<?php require_once './partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--cart">
        <h1 class="h1 heading heading--main">Your Cart</h1>
        <article class="section__text section__text--cart">
          <div class="cart">
            <div class="cart__item">
              <div class="cart__item__img-wrapper">
                <img
                  src="../assets/images/products/ballpoint-1_no_logo.jpg"
                  alt="gay."
                />
              </div>
              <div class="cart__item__brief-details">
                <h4 class="checkout-form__sub-heading">
                  Ballpoint Pen
                </h4>
                <div class="input-group input-group--text--no-hover full-width">
                  <input
                    class="input input--text--no-hover half-width half-max-width"
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
                </div>
              </div>
              <div class="cart__item__price">
                <p class="product-detail__price">
                  &#36;4.99
                </p>
              </div>
            </div>
          </div>
          <div class="button-container button-container--product-detail">
            <a href="./products.php" class="button button--blue--ghost">
              <&nbsp;&nbsp;&nbsp;Back to Products
            </a>
          </div>
        </article>
      </section>
    </main>
<?php require_once './partials/footer.php'; ?>
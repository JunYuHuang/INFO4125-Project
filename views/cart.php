<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--cart">
        <h1 class="h1 heading heading--main">Your Cart</h1>
        <article class="section__text section__text--cart">
          <?php if (getCountOfTotalProductItemsInCart() == 0) : ?>
            <div class="section__text--cart__error-message full-width">
              <p class="full-width text-align-center">Your cart is currently empty.</p>
              <div class="button-container button-container--cart--error">
                <a href="/INFO4125-Project/products" class="button button--blue--ghost">
                  Continue Shopping
                </a>
              </div>
            </div>
          <?php else: ?>
              <div class="cart">
                <?php foreach ($currentCart as $productID => $currentCartItem) : ?>
                  <div class="cart__item">
                    <div class="cart__item__left">
                      <div class="cart__item__img-wrapper">
                        <img
                          src="/INFO4125-Project/assets/images/products/<?php echo htmlspecialchars($currentCartItem['productImageFileName']); ?>"
                          alt="An image of a(n) <?php echo htmlspecialchars($currentCartItem['productName']); ?>"
                        />
                      </div>
                      <div class="cart__item__brief">
                        <p class="cart__item__brief__product-name ellipsis">
                          <a 
                            href="/INFO4125-Project/products?action=viewProduct&amp;productID=<?php echo htmlspecialchars($productID); ?>" 
                            class="url-link"
                          >
                            <?php echo htmlspecialchars($currentCartItem['productName']); ?>
                          </a>
                        </p>
                        <div class="input-group input-group--text--no-hover input-group--text--no-hover--fixed-max-width">
                          <!-- id="input--add-to-cart--quantity" -->
                          <input
                            class="input input--text--no-hover full-width input--number--product-quantity"
                            id="currentCartItems[<?php echo $productID?>]"
                            type="number"
                            required
                            name="currentCartItems[<?php echo $productID?>]"
                            value="<?php echo htmlspecialchars($currentCartItem['productQuantity']); ?>"
                            min="0"
                            max="9999"
                            step="1"
                          />
                          <label class="label" for="currentCartItems[<?php echo $productID?>]">
                            Quantity
                          </label>
                        </div>
                        <div class="input-group input-group--text--no-hover input-group--text--no-hover--fixed-max-width">
                          <form 
                            class="delete-cart-item-form" 
                            action="." 
                            method="POST"
                          >
                            <input type="hidden" name="action" value="deleteItemFromCart">
                            <input type="hidden" name="productID" value="<?php echo $productID; ?>">
                            <button type="submit" class="button button--red--ghost">
                              Remove
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <p class="cart__item__price ellipsis">
                      &#36;<?php echo htmlspecialChars($currentCartItem['totalProductPrice']); ?>
                    </p>
                  </div>
                  <hr class="hr hr--cart__item">
                <?php endforeach; ?>
                <div class="cart-subtotal-container ellipsis">
                  Subtotal (<?php echo(getCountOfTotalProductItemsInCart() . " " . getCorrectQuantifierForCartItems());?>): CAD &#36;<?php echo htmlspecialChars(getCartSubtotal()); ?>
                </div>
              </div>
              <!-- temp -->
              <div class="cart__summary">
                <!-- make this subtotal a flex container that divides "subtotal" and the "$MONEY" part -->
                <div class="cart-subtotal-container ellipsis hidden-in-mobile text-align-center">
                  Subtotal (<?php echo(getCountOfTotalProductItemsInCart() . " " . getCorrectQuantifierForCartItems());?>): CAD &#36;<?php echo htmlspecialChars(getCartSubtotal()); ?>
                </div>
                <div class="button-container button-container--cart">
                  <a href="/INFO4125-Project/products" class="button button--blue--ghost">
                    Continue Shopping
                  </a>
                  <form class="empty-cart-form" action="." method="POST">
                    <input 
                      type="hidden" 
                      name="action" 
                      value="deleteAllItemsFromCart"
                    />
                    <button type="submit" class="button button--red--ghost button--empty-cart">
                      Empty Cart
                    </button>
                  </form>
                  <form action="." method="POST" class="update-cart-form full-width">
                    <input type="hidden" name="action" value="updateItemsInCart">
                    <!-- <button type="submit" class="button button--orange--ghost full-width">
                      Update Cart
                    </button> -->
                    <input value="Update Cart" type="submit" class="button button--orange--ghost full-width">
                  </form> 
                  <!-- incomplete part below -->
                  <a 
                    href="/INFO4125-Project/checkout" class="button button--blue button--checkout">
                    Checkout
                  </a>
                </div>
              </div>
          <?php endif; ?>
        </article>
      </section>
    </main>
    <script type="text/javascript">
      // below code doesn't work when used put in app.js
      let productQuantityInputs = document.querySelectorAll(
        ".input--number--product-quantity"
      );
      let updateCartForm = document.querySelector(".update-cart-form");

      function cloneProductQuantityInputsAndSubmit() {
        productQuantityInputs.forEach(productQuantityInput => {
            var productQuantityInputClone = productQuantityInput.cloneNode(false);
            productQuantityInputClone.setAttribute("type", "hidden");
            productQuantityInputClone.removeAttribute("class");
            updateCartForm.appendChild(productQuantityInputClone);
          });
          updateCartForm.submit();
      }

      if (updateCartForm && productQuantityInputs) {
        updateCartForm.addEventListener("submit", () => {
          cloneProductQuantityInputsAndSubmit()
        });
      }
    </script>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>
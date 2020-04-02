<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--checkout">
        <h1 class="h1 heading heading--main">Checkout</h1>
        <article class="section__text section__text--checkout">
          <div class="cart cart--checkout">
            <h4 class="checkout-form__sub-heading full-width hidden-in-mobile">Order Summary</h4>
            <button class="button button--blue--ghost button--toggle-order-summary ellipsis full-width hidden-in-desktop">
              <span class="accordion-state">Show</span>
              <?php echo 'Summary: CAD &#36;' . htmlspecialChars(getCartSubtotal()); ?>
            </button>
            <div class="cart__summary cart__summary--accordion">
              <?php foreach ($currentCart as $productID => $currentCartItem) : ?>
                <div class="cart__item cart__item--checkout">
                  <div class="cart__item__left">
                    <div class="cart__item__img-wrapper cart__item__img-wrapper--checkout">
                      <img
                        src="/INFO4125-Project/assets/images/products/<?php echo htmlspecialchars($currentCartItem['productImageFileName']); ?>"
                        alt="An image of a(n) <?php echo htmlspecialchars($currentCartItem['productName']); ?>"
                      />
                    </div>
                    <!--   -->
                    <div class="cart__item__brief flex-vertically-centered full-height">
                      <p class="cart__item__brief__product-name ellipsis no-margin">
                        <span class="text-color--dark ellipsis">
                          <?php echo htmlspecialchars($currentCartItem['productQuantity']) . ' &Cross; '; ?>
                        </span>
                        <span class="ellipsis">
                          <?php echo htmlspecialchars($currentCartItem['productName']); ?>
                        </span>
                      </p>
                    </div>
                  </div>
                  <p class="ellipsis text-color--red full-height flex-vertically-centered">
                    &#36;<?php echo htmlspecialChars($currentCartItem['totalProductPrice']); ?>
                  </p>
                </div>
              <?php endforeach; ?>
              <div class="cart__item cart__item--other-fees">
                <div class="text-color--blue text-align-left ">
                  Shipping and Handling
                </div> 
                <div class="text-color--green">FREE</div>
              </div>
              <hr class="hr hr--cart__item">
              <div class="cart-subtotal-container ellipsis">
                Total: 
                <span class="text-color--red text-align-right font-weight-bold">
                  <?php echo 'CAD &#36;' . htmlspecialChars(getCartSubtotal()); ?>
                </span>
              </div>
            </div>
          </div> 
          <form action="." method="POST" class="register-form">
            <input type="hidden" name="action" value="submitOrder">
            <h4 class="checkout-form__sub-heading full-width">Contact Info</h4>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="customerFirstName"
                name="customerFirstName"
                type="text"
                required
                placeholder="First Name"
                minlength="1"
              />
              <label class="label" for="customerFirstName">
                First Name
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="customerLastName"
                name="customerLastName"
                type="text"
                required
                placeholder="Last Name"
                minlength="1"
              />
              <label class="label" for="customerLastName">
                Last Name
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text input--text--email"
                id="emailAddress"
                name="customerEmailAddress"
                type="customerEmailAddress"
                required
                placeholder="Email Address"
                minlength="4"
              />
              <label class="label" for="customerEmailAddress">
                Email Address
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text input--text"
                id="customerPhoneNumber"
                name="customerPhoneNumber"
                type="text"
                required
                placeholder="Mobile Phone Number"
                minlength="10"
                maxlength="11"
              />
              <label class="label" for="customerPhoneNumber">
                 Mobile Phone Number
              </label>
            </div>
            <h4 class="checkout-form__sub-heading full-width">Shipping Info</h4>
            <div class="input-group input-group--text two-thirds-width">
              <input
                class="input input--text"
                id="addressStreet"
                name="addressStreet"
                type="text"
                required
                placeholder="Street Address"
              />
              <label class="label" for="addressStreet">
                Street Address
              </label>
            </div>
            <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="addressUnitNumber"
                name="addressUnitNumber"
                type="text"
                placeholder="Unit (if applicable)"
              />
              <label class="label" for="addressUnitNumber">
                Unit (if applicable)
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text input--text"
                id="addressCity"
                name="addressCity"
                type="text"
                required
                placeholder="City"
              />
              <label class="label" for="city">
                City
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="addressProvince"
                name="addressProvince"
                type="text"
                required
                placeholder="Province / State e.g. Alberta"
                minlength="1"
                maxlength="255"
              />
              <label class="label" for="addressProvince">
                Province / State e.g. Alberta
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="addressPostalCode"
                name="addressPostalCode"
                type="text"
                required
                placeholder="Postal Code e.g. V7X9M1"
              />
              <label class="label" for="addressPostalCode">
                Postal Code e.g. V7X9M1
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="addressCountry"
                name="addressCountry"
                type="text"
                required
                placeholder="Country / Region e.g. Canada"
                minlength="1"
              />
              <label class="label" for="addressCountry">
                Country / Region e.g. Canada
              </label>
            </div>
            <h4 class="checkout-form__sub-heading full-width">Payment Info</h4>
            <div class="input-group input-group--text full-width">
              <select
                class="input input--text"
                id="creditCardType"
                name="creditCardType"
                required
              >
                <option value="">Choose Credit Card Type</option>
                <option value="VISA">VISA</option>
                <option value="MASTERCARD">MASTERCARD</option>
                <option value="AMEX">AMEX</option>
              </select>
              <label class="label" for="creditCardType">
                Credit Card Type
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text"
                id="creditCardNumber"
                name="creditCardNumber"
                type="text"
                placeholder="Credit Card Number (no spaces or dashes)"
              />
              <label class="label" for="creditCardNumber">
                Credit Card Number (no spaces or dashes)
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text"
                id="creditCardName"
                name="creditCardName"
                type="text"
                required
                placeholder="Name on Card"
              />
              <label class="label" for="creditCardName">
              Name on Card
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="creditCardExpiryDate"
                name="creditCardExpiryDate"
                type="text"
                required
                placeholder="Expires (MMYY)"
                minlength="4"
                maxlength="4"
              />
              <label class="label" for="creditCardExpiryDate">
                Expires (MMYY)
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="creditCardSecurityCode"
                name="creditCardSecurityCode"
                type="text"
                required
                placeholder="3 or 4 digit Security Code"
                minlength="3"
                maxlength="4"
              />
              <label class="label" for="creditCardSecurityCode">
                3 or 4 digit Security Code
              </label>
            </div>
            <h4
              class="checkout-form__sub-heading checkout-form__sub-heading--last full-width"
            >
              &nbsp;
            </h4>
            <div class="input-group input-group--submit full-width">
              <a href="/INFO4125-Project/cart/" class="button button--blue--ghost half-width">
                Review Cart
              </a>
              <input
                class="input input--button button button--blue half-width"
                id="input--checkout__submit"
                type="submit"
                value="Submit Order&nbsp;&nbsp;&nbsp;&gt;"
              />
            </div>
          </form>
        </article>
      </section>
    </main>
<?php require PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>

<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--checkout">
        <h1 class="h1 heading heading--main">Checkout</h1>
        <p class="text-color--medium-dark"><span class="text-color--red font-weight--bold">NOTE: </span>At this time, we only deliver to residents in Canada.</p>
        <article class="section__text section__text--checkout">
          <!-- cart summary preview -->
          <div class="cart cart--checkout">
            <h4 class="checkout-form__sub-heading full-width hidden-in-mobile">Order Summary</h4>
            <button class="button button--dark-transparent button--toggle-order-summary ellipsis full-width hidden-in-desktop">
              <span class="accordion-state">Show</span>
              <?php echo 'Summary: CAD ' . sprintf('$%.2f', getCartSubtotal()); ?>
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
                    <div class="cart__item__brief flex-vertically-centered full-height">
                      <p class="cart__item__brief__product-name ellipsis no-margin">
                        <span class="text-color--dark ellipsis">
                          <?php echo htmlspecialchars($currentCartItem['productQuantity']) . ' &Cross; '; ?>
                        </span>
                        <span class="ellipsis text-color--medium-dark">
                          <?php echo htmlspecialchars($currentCartItem['productName']); ?>
                        </span>
                      </p>
                    </div>
                  </div>
                  <p class="ellipsis text-color--red full-height flex-vertically-centered">
                    <?php echo sprintf('$%.2f', $currentCartItem['totalProductPrice']); ?>
                  </p>
                </div>
              <?php endforeach; ?>
              <div class="cart__item cart__item--other-fees">
                <div class="text-color--medium-dark text-align-left ">
                  Shipping and Handling
                </div> 
                <div class="text-color--green">FREE</div>
              </div>
              <hr class="hr hr--cart__item">
              <div class="cart-subtotal-container ellipsis">
                Total: 
                <span class="text-color--red text-align-right font-weight-bold">
                  <?php echo sprintf('$%.2f', getCartSubtotal()); ?>
                </span>
              </div>
            </div>
          </div> 
          <!-- form -->
          <form action="." method="POST" class="register-form">
            <input type="hidden" name="action" value="submitOrder">
            <h4 class="checkout-form__sub-heading full-width">Contact Info</h4>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text--validation"
                id="customerFirstName"
                name="customerFirstName"
                type="text"
                required
                placeholder=" "
                minlength="1"
                maxlength="255"
                pattern=".+"
                autocomplete="given-name"
              />
              <label class="label label--validation" for="customerFirstName">
                First Name
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text--validation"
                id="customerLastName"
                name="customerLastName"
                type="text"
                required
                placeholder=" "
                minlength="1"
                maxlength="255"
                pattern=".+"
                autocomplete="family-name"
              />
              <label class="label label--validation" for="customerLastName">
                Last Name
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
            </div>
            <div class="input-group input-group--text input-group--validation full-width">
              <input
                class="input input--text input--text--validation input--text--email"
                id="customerEmailAddress"
                name="customerEmailAddress"
                type="email"
                required
                placeholder=" "
                minlength="4"
                maxlength="1000"
                pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$"
                autocomplete="email"
              />
              <label class="label label--validation" for="customerEmailAddress">
                Email Address
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Invalid email.</div>
            </div>
            <div class="input-group input-group--text input-group--validation full-width">
              <input
                class="input input--text input--text--validation input--text"
                id="customerPhoneNumber"
                name="customerPhoneNumber"
                type="tel"
                required
                placeholder=" "
                minlength="10"
                maxlength="11"
                pattern="^\d{10,11}$"
                autocomplete="tel"
              />
              <label class="label label--validation" for="customerPhoneNumber">
                Phone Number (no spaces, dashes, brackets, or +)
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Your mobile phone number can only contain digits 0 to 9 and must be 10 or 11 characters long.</div>
            </div>
            <h4 class="checkout-form__sub-heading full-width">Shipping Info</h4>
            <div class="input-group input-group--text input-group-validation two-thirds-width">
              <input
                class="input input--text input--text--validation"
                id="addressStreet"
                name="addressStreet"
                type="text"
                required
                placeholder=" "
                minlength="1"
                maxlength="255"
                pattern=".+"
              />
              <label class="label label--validation" for="addressStreet">
                Street Address
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
            </div>
            <div class="input-group input-group--text input-group--validation one-third-width">
              <input
                class="input input--text input--text--validation"
                id="addressUnit"
                name="addressUnit"
                type="text"
                placeholder=" "
                minlength="0"
                maxlength="255"
                pattern=".*"
              />
              <label class="label label--validation" for="addressUnit">
                Unit (if applicable)
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text input--text--validation"
                id="addressCity"
                name="addressCity"
                type="text"
                required
                placeholder=" "
                minlength="1"
                maxlength="255"
                pattern=".+"
              />
              <label class="label label--validation" for="addressCity">
                City
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <select
                class="input input--text input--text--validation"
                id="addressProvince"
                name="addressProvince"
                required
                autocomplete="cc-type"
              >
                <option value="" selected>Choose a province</option>
                <option value="ALBERTA">ALBERTA</option>
                <option value="BRITISH COLUMBIA">BRITISH COLUMBIA</option>
                <option value="MANITOBA">MANITOBA</option>
                <option value="NEW BRUNSWICK">NEW BRUNSWICK</option>
                <option value="NEWFOUNDLAND AND LABRADO">NEWFOUNDLAND AND LABRADOR</option>
                <option value="NOVA SCOTIA">NOVA SCOTIA</option>
                <option value="ONTARIO">ONTARIO</option>
                <option value="PRINCE EDWARD ISLAND">PRINCE EDWARD ISLAND</option>
                <option value="QUEBEC">QUEBEC</option>
                <option value="SASKATCHEWAN">SASKATCHEWAN</option>
              </select>
              <label class="label label--validation" for="addressProvince">
                Province e.g. Alberta
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Invalid province.</div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text--validation"
                id="addressPostalCode"
                name="addressPostalCode"
                type="text"
                required
                placeholder=" "
                minlength="6"
                maxlength="6"
                pattern="^([ABCEGHJKLMNPRSTVXY]|[abceghjklmnprstvxy])\d([ABCEGHJ-NPRSTV-Z]|[abceghj-nprstv-z])[ ]?\d([ABCEGHJ-NPRSTV-Z]|[abceghj-nprstv-z])\d$"
                autocomplete="postal-code"
              />
              <label class="label label--validation" for="addressPostalCode">
                Postal Code e.g. V7X9M1
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Your postal code must be exactly 6 characters long and match the format in the example above.</div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text--validation"
                id="addressCountry"
                name="addressCountry"
                type="text"
                required
                placeholder=" "
                minlength="1"
                maxlength="255"
                pattern="^[cC][aA][nN][aA][dD][aA]$"
                value="Canada"
              />
              <label class="label label--validation" for="addressCountry">
                Country / Region e.g. Canada
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Country must be Canada.</div>
            </div>
            <h4 class="checkout-form__sub-heading full-width">Payment Info</h4>
            <div class="input-group input-group--text input-group--validation full-width">
              <select
                class="input input--text input--text--validation input--credit-card-provider"
                id="creditCardProvider"
                name="creditCardProvider"
                required
                autocomplete="cc-type"
              >
                <option value="">Choose Credit Card Provider</option>
                <option value="AMEX">AMEX</option>
                <option value="MASTERCARD">MASTERCARD</option>
                <option value="VISA">VISA</option>
              </select>
              <label class="label label--validation" for="creditCardProvider">
                Credit Card Provider
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Invalid credit card provider.</div>
            </div>
            <div class="input-group input-group--text input-group--validation full-width">
              <!-- test credit card number is AMEX -->
              <input
                class="input input--text input--text--validation input--credit-card-number"
                id="creditCardNumber"
                name="creditCardNumber"
                type="text"
                required
                placeholder=" "
                minlength="13"
                maxlength="19"
                pattern="(?!)"
                autocomplete="cc-number"
              />
              <label class="label label--validation" for="creditCardNumber">
                Credit Card Number (no spaces or dashes).
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Invalid credit card number. Please check your card number again.</div>
            </div>
            <div class="input-group input-group--text input-group--validation full-width">
              <input
                class="input input--text input--text--validation"
                id="creditCardName"
                name="creditCardName"
                type="text"
                required
                placeholder=" "
                minlength="1"
                maxlength="255"
                pattern=".+"
                autocomplete="cc-name"
              />
              <label class="label label--validation" for="creditCardName">
                Name on Card
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Invalid name.</div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text--validation input--credit-card-expiry-date"
                id="creditCardExpiryDate"
                name="creditCardExpiryDate"
                type="text"
                required
                placeholder=" "
                minlength="6"
                maxlength="6"
                pattern="^(0[1-9]|(1[0-2]))(20)[2-9][0-9]$"
                autocomplete="cc-exp"
              />
              <label class="label label--validation" for="creditCardExpiryDate">
                Expires (MMYYYY)
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Your credit card's expiry date must be 6 numerical digits that represent both a valid month (01 thru 12) and a valid year
                <span class="input-requirements__valid-years">(2020 or later)</span>
              </div>
            </div>
            <div class="input-group input-group--text input-group--validation half-width">
              <input
                class="input input--text input--text--validation"
                id="creditCardSecurityCode"
                name="creditCardSecurityCode"
                type="text"
                required
                placeholder=" "
                minlength="3"
                maxlength="4"
                pattern="^\d{3,4}$"
                autocomplete="cc-csc"
              />
              <label class="label label--validation" for="creditCardSecurityCode">
                3 or 4 digit Security Code
              </label>
              <div class="img-wrapper--icon--validation">
                <img src="/INFO4125-Project/assets/images/checkmark-circle.svg" alt="An icon of a checkmark">
              </div>
              <div class="input-requirements">Your security code or CVC number must be 3 or 4 characters long and only contain digits 0 thru 9.</div>
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

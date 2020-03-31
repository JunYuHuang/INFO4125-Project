<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--checkout">
        <h1 class="h1 heading heading--main">Checkout</h1>
        <article class="section__text section__text--checkout">
        <form action="" class="register-form">
            <h4 class="checkout-form__sub-heading full-width">Contact Info</h4>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="input--checkout__first-name"
                type="text"
                required
                placeholder="First Name"
                minlength="1"
              />
              <label class="label" for="input--checkout__first-name">
                First Name
              </label>
            </div>
            <div class="input-group input-group--text half-width">
              <input
                class="input input--text"
                id="input--checkout__last-name"
                type="text"
                required
                placeholder="Last Name"
                minlength="1"
              />
              <label class="label" for="input--checkout__last-name">
                Last Name
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text input--text--email"
                id="input--checkout__email-address"
                type="email"
                required
                placeholder="Email Address"
                minlength="4"
              />
              <label class="label" for="input--checkout__email-address">
                Email Address
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text input--text"
                id="input--checkout__contact-info"
                type="text"
                required
                placeholder="Mobile Phone Number"
                minlength="10"
              />
              <label class="label" for="input--checkout__contact-info">
                 Mobile Phone Number
              </label>
            </div>
            <h4 class="checkout-form__sub-heading full-width">Shipping Info</h4>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text"
                id="input--checkout__street-address"
                type="text"
                required
                placeholder="Street Address"
              />
              <label class="label" for="input--checkout__street-address">
                Street Address
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text"
                id="input--checkout__street-address-unit"
                type="text"
                placeholder="Unit e.g. apartment, suite, etc. (if applicable)"
              />
              <label class="label" for="input--checkout__street-address-unit">
                Unit e.g. apartment, suite, etc. (if applicable)
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text input--text"
                id="input--checkout__city"
                type="text"
                required
                placeholder="City"
              />
              <label class="label" for="input--checkout__city">
                City
              </label>
            </div>
            <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="input--checkout__province"
                type="text"
                required
                placeholder="Province / State e.g. BC"
                minlength="1"
                maxlength="2"
              />
              <label class="label" for="input--checkout__province">
                Province / State e.g. BC
              </label>
            </div>
            <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="input--checkout__postal-code"
                type="text"
                required
                placeholder="Postal / ZIP Code e.g. V7X9M1"
              />
              <label class="label" for="input--checkout__postal-code">
                Postal / ZIP Code e.g. V7X9M1
              </label>
            </div>
            <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="input--checkout__country"
                type="text"
                required
                placeholder="Country / Region e.g. Canada"
                minlength="1"
              />
              <label class="label" for="input--checkout__country">
                Country / Region e.g. Canada
              </label>
            </div>
            <h4 class="checkout-form__sub-heading full-width">Payment Info</h4>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text"
                id="input--checkout__card-name"
                type="text"
                required
                placeholder="Name on Card"
              />
              <label class="label" for="input--checkout__card-name">
              Name on Card
              </label>
            </div>
            <div class="input-group input-group--text full-width">
              <input
                class="input input--text"
                id="input--checkout__card-number"
                type="text"
                placeholder="Credit Card Number (no spaces or dashes)"
              />
              <label class="label" for="input--checkout__card-number">
                Credit Card Number (no spaces or dashes)
              </label>
            </div>
            <!-- <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="input--checkout__card-type"
                type="text"
                required
                placeholder="Credit Card Type e.g. VISA"
              />
              <label class="label" for="input--checkout__card-type">
                Credit Card Type e.g. VISA
              </label>
            </div> -->
            <div class="input-group input-group--text one-third-width">
              <select
                class="input input--text"
                id="input--checkout__card-type"
                required
              >
                <option value="">Choose Credit Card Type</option>
                <option value="VISA">VISA</option>
                <option value="MASTERCARD">MASTERCARD</option>
                <option value="AMEX">AMEX</option>
              </select>
              <label class="label" for="input--checkout__card-type">
                Choose Credit Card Type
              </label>
            </div>
            <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="input--checkout__card-expiry-date"
                type="text"
                required
                placeholder="Expires (MMYY)"
                minlength="4"
                maxlength="4"
              />
              <label class="label" for="input--checkout__card-expiry-date">
                Expires (MMYY)
              </label>
            </div>
            <div class="input-group input-group--text one-third-width">
              <input
                class="input input--text"
                id="input--checkout__security-code"
                type="number"
                required
                placeholder="3 or 4 digit Security Code"
                min="3"
                max="4"
              />
              <label class="label" for="input--checkout__security-code">
                3 or 4 digit Security Code
              </label>
            </div>
            <h4
              class="checkout-form__sub-heading checkout-form__sub-heading--last full-width"
            >
              &nbsp;
            </h4>
            <div class="input-group input-group--submit full-width">
              <input
                class="input input--button button button--blue one-third-width"
                id="input--checkout__submit"
                type="submit"
                value="Submit Your Order"
              />
            </div>
          </form>
        </article>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>
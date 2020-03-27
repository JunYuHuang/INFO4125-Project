<?php require_once './partials/header.php'; ?>
<?php require_once './partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--products">
        <h1 class="h1 heading heading--main">Products</h1>
        <article class="section__text section__text--products">
          <form action="" class="search-form">
            <div class="input-group input-group--search">
              <input
                class="input input--search"
                id="input--search"
                type="text"
                placeholder="Search for a product..."
              />
              <label class="label label--hidden" for="input--search">
                Country Search
              </label>
              <div class="icon-wrapper icon-wrapper--search">
                <img
                  src="../assets/images/search.svg"
                  alt="An icon of a person."
                  class="nav-menu-button-icon shopping-cart-icon"
                />
              </div>
            </div>
          </form>
          <div class="card-grid-container"></div>
        </article>
      </section>
    </main>
<?php require_once './partials/footer.php'; ?>
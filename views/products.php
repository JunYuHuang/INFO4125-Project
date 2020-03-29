<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
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
          <?php if (count($productsArray) == 0) : ?>
              <p>There are no products.</p>
          <?php else: ?>
          <div class="card-grid-container">
            <?php foreach ($productsArray as $product): ?>
              <a
                href="?action=viewProduct&amp;productID=<?php echo htmlspecialchars($product['productID']); ?>"
                class="card"
              >
                <div class="card__img-container">
                  <img 
                    src="/INFO4125-Project/assets/images/products/<?php echo htmlspecialchars($product['productImageFileName']); ?>" 
                    alt="An image of a <?php echo htmlspecialchars($product['productName']); ?>" 
                  />
                </div>
                <section class="card__text ellipsis">
                  <h3 class="card__text__title ellipsis">
                    <?php echo htmlspecialchars($product['productName']); ?>
                  </h3>
                  <p class="card__text__price">
                    CAD &#36;<?php echo htmlspecialchars($product['productPrice']); ?>
                  </p>
                </section>
              </a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </article>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>
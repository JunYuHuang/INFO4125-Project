<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--product-detail">
        <div class="section__img-wrapper section__img-wrapper--product-detail">
          <img
		  	src="<?php echo htmlspecialchars($productImageURL); ?>" 
            alt="An image of a <?php echo htmlspecialchars($productName); ?>"
          />
        </div>
        <article class="section__text section__text--product-detail product-detail">
          <h1 class="h1 heading--main product-detail__title">
            <?php echo htmlspecialchars($productName); ?>
          </h1>
          <p class="product-detail__price">
			&#36;<?php echo htmlspecialchars($productPrice); ?>
		  </p>
			<form action="" class="add-to-cart-form">
				<div class="input-group input-group--text--no-hover full-width">
					<input
						class="input input--text--no-hover half-width half-max-width"
						id="input--add-to-cart--quantity"
						type="number"
						required
						value="1"
						min="1"
						step="1"
					/>
					<label class="label" for="input--add-to-cart--quantity">
						Quantity
					</label>
				</div>
				<div class="input-group input-group--submit full-width">
					<input
						class="input input--button button button--blue button--add-to-cart half-max-width"
						id="input--add-to-cart--submit"
						type="submit"
						value="Add to Cart"
					/>
				</div>
			</form>
			<p class="product-detail__description">
				<?php echo htmlspecialchars($productDescription); ?>
			</p>
			</article>
			<div class="button-container button-container--product-detail">
				<a href="/INFO4125-Project/products" class="button button--blue--ghost">
					<&nbsp;&nbsp;&nbsp;Back to Products
				</a>
			</div>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>

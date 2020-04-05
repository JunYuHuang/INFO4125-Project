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
			CAD &#36;<?php echo htmlspecialchars($productPrice); ?>
		  </p>
			<form 
				action="/INFO4125-Project/cart/" 
				method="POST"
				class="add-to-cart-form"
			>
				<input type="hidden" name="action" value="addItemToCart">
				<input 
					type="hidden" 
					name="productID" 
					value="<?php echo $productID;?>"
				>
				<div class="input-group input-group--text--no-hover full-width">
					<input
						class="input input--text--no-hover half-width half-max-width"
						type="number"
						required
						value="1"
						min="1"
						max="999"
						pattern="^(([1-9])|([1-9][0-9])|([1-9][0-9][0-9]))$"
						step="1"
						id="productQuantity"
						name="productQuantity"
					/>
					<label class="label" for="productQuantity">
						Quantity
					</label>
				</div>
				<div class="input-group input-group--submit full-width">
					<input
						class="input input--button button button--blue button--add-to-cart half-max-width"
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
					&lt;&nbsp;&nbsp;&nbsp;Continue Shopping
				</a>
			</div>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>

<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--order-submitted">
        <h1 class="h1 heading heading--main">Thank You!</h1>
        <article class="section__text section__text--order-submitted text-align-left">
          <h2 class="h2 heading full-width">Hi John,</h2>
          <p>Thanks for shopping at Penzaar.<p>
          <p>We've sent you an order receipt to your email address <span class="text-color--dark text-weight--bold">john.smith@example.com</span>.</p>
          <p>Your order ID is <span class="text-color--dark text-weight--bold">#1MG4YF0RU</span>.<p>
          <p>Please allow 1 to 5 business days for us to process your order before shipping.</p>
          <div class="button-container button-container--order-submitted">
            <a href="/INFO4125-Project/" class="button button--blue--ghost">
              Return to Home
            </a>
            <a href="/INFO4125-Project/products" class="button button--blue">
              Make Another Purchase
            </a>
          </div>
        </article>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>

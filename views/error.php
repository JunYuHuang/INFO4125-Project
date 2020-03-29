<?php require_once PROJECT_DIR_ROOT . '/views/partials/header.php'; ?>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--error">
        <h1 class="h1 heading heading--main">Error</h1>
        <p>Something went wrong :(</p>
        <p>Error: <?php echo $errorMessage; ?></p>
        <div class="button-container button-container--error">
            <a href="/INFO4125-Project/" class="button button--blue--ghost">
                Back to Home
            </a>
        </div>
      </section>
    </main>
<?php require_once PROJECT_DIR_ROOT . '/views/partials/footer.php'; ?>
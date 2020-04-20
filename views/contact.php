<?php require_once './partials/header.php'; ?>
<?php require_once './partials/navbar.php'; ?>
    <main class="main-wrapper">
      <section class="section section--contact">
        <h1 class="h1 heading heading--main full-width">Contact</h1>
        <article class="section__text section__text--contact">
          <h2 class="h2 heading">Come Say Hello</h2>
          <div class="contact-group">
            <div class="icon-wrapper icon-wrapper--contact">
              <img
                src="../assets/images/call.svg"
                alt="An icon of a telephone handset."
              />
            </div>
            <p class="text--contact">
              (+1) 604 333 3150
            </p>
          </div>
          <div class="contact-group">
            <div class="icon-wrapper icon-wrapper--contact">
              <img
                src="../assets/images/mail.svg"
                alt="An icon of an envelope or email message."
              />
            </div>
            <p class="text--contact">
              info@penzaar.com
            </p>
          </div>
          <div class="contact-group">
            <div class="icon-wrapper icon-wrapper--contact">
              <img src="../assets/images/location.svg" alt="An icon of a map pin." />
            </div>
            <p class="text--contact">
              8291 Heather St, Richmond, BC V6Y 2R3
            </p>
          </div>
        </article>
        <div class="embedded-google-maps-container">
          <iframe
            class="embedded-google-maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d652.3730642072876!2d-123.12351617072763!3d49.153263998707345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54860aac1585c1d5%3A0x83c944dba938917e!2s8291%20Heather%20St%2C%20Richmond%2C%20BC%20V6Y%202R3!5e0!3m2!1sen!2sca!4v1584402208489!5m2!1sen!2sca"
            width="100%"
            height="100%"
            frameborder="0"
            style="border:0;"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
      </section>
    </main>
<?php require_once './partials/footer.php'; ?>
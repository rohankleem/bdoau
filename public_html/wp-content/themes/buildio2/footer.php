

<!-- Footer -->
<footer class="border-top mt-7 text-white" style="background: #3f1181">
  <div class="container py-5 pt-9">
    <div class="row g-4">

      <!-- Brand / summary -->
      <div class="col-12 col-lg-4 text-white">
        <a class="d-inline-flex align-items-center text-decoration-none mb-3" href="/" aria-label="Buildio home">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/buildio-hori-clean-d.svg"
            alt="Buildio"
            style="height: 32px; width: auto;"
          />
        </a>

        <p class="mb-3 text-white">
          Digital | Development | Design. Building reliable, modern systems — from WordPress to custom apps and integrations.
        </p>

        <a class="btn btn-primary btn-sm" href="/contact/">Get In Touch</a>
      </div>

      <!-- Navigation -->
      <div class="col-6 col-lg-2 text-white">
        <h6 class="text-uppercase small fw-bold mb-3 text-white">Navigate</h6>
        <ul class="list-unstyled mb-0 text-white">
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/">Home</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/notebook/">Notebook</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/contact/">Contact</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/wp-json/">API</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/feed/">RSS</a></li>
        </ul>
      </div>

      <!-- Services (mirrors your header items) -->
      <div class="col-6 col-lg-3">
        <h6 class="text-uppercase small fw-bold mb-3 text-white">Services</h6>
        <ul class="list-unstyled mb-0">
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">CRM system development</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">API integration</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">Custom apps and software</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">Reporting and insights</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">Phone and SMS systems</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">Hosting and infrastructure</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="#">WordPress Development</a></li>
        </ul>
      </div>

      <!-- Products + external -->
      <div class="col-12 col-lg-3">
        <h6 class="text-uppercase small fw-bold mb-3 text-white">Products</h6>
        <ul class="list-unstyled mb-4">
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/unipixel/">UniPixel WordPress Plugin</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/unipixel-docs/">UniPixel Documentation</a></li>
          <li class="mb-2">
            <a class="link-secondary text-decoration-none text-white" href="https://wordpress.org/plugins/unipixel/" target="_blank" rel="noopener noreferrer">
              UniPixel on WordPress.org
            </a>
          </li>
        </ul>

        <ul class="list-unstyled mb-0">
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/privacy-policy/">Privacy Policy</a></li>
          <li class="mb-2"><a class="link-secondary text-decoration-none text-white" href="/terms/">Terms</a></li>
        </ul>
      </div>

    </div>

    <hr class="my-4">

    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
      <div class="text-white small">
        © <span id="footerYear"></span> Buildio. All rights reserved.
      </div>


    </div>
  </div>
</footer>

<script>
  (function () {
    var el = document.getElementById('footerYear');
    if (el) el.textContent = new Date().getFullYear();
  })();
</script>
<!-- End Footer -->



<!-- <div class="">

<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>
</div>





<button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



<?php wp_footer(); ?>
</body>
</html>
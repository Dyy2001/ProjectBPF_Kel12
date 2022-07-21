<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="<?= base_url('assets/') ?>assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">PPPM Miftahul Huda</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>

                <form class="row g-3 needs-validation" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                  <div class="col-12">
                    <label for="yourName" class="form-label">Your Name</label>
                    <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Your Email</label>
                    <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Alamat Email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password1" value="<?= set_value('password'); ?>" class="form-control form-control-user" id="password1" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password2" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="<?= base_url('Auth') ?>">Log in</a></p>
                  </div>
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Designed by Kelompok 12
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img width="100" src="assets/images/ico/user-svgrepo-com.svg" alt="logo">
              </div>
              <h4>Merhaba, Hoşgeldiniz.</h4>
              <h6 class="fw-light">Giriş yapmaya başlayalım.</h6>
              <form class="pt-3" method="POST" name="form-1" id="form1" data-dest="user">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="alert alert-success" role="alert" style="display: none;" id="formalertsuccess">
                    Giriş Başarılı
                </div>
                <div class="alert alert-danger" role="alert" style="display: none;" id="formalertdanger">
                  Giriş başarısız oldu. Lütfen bilgilerinizi kontrol edip tekrar deneyiniz.
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">GİRİŞ YAP</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="remember" class="form-check-input">
                      Beni Hatırla
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Şifrenizi mi unuttunuz?</a>
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Facebook ile bağlan
                  </button>
                </div> -->
                <div class="text-center mt-4 fw-light">
                  Bir hesabınız yok mu? <a href="<?php echo SITEADRESS?>register" class="text-primary">Kayıt Ol</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>



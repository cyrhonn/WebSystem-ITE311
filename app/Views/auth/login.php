
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-5">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-4">Login</h4>

            <?php if(!empty(session()->getFlashdata('error'))): ?>
              <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif ?>

             <?php if(!empty(session()->getFlashdata('error_log'))): ?>
              <div class="alert alert-danger"><?= esc(session()->getFlashdata('error_log')) ?></div>
            <?php endif ?>

           <?php if(!empty(session()->getFlashdata('validation_errors'))): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('validation_errors') ?>
            </div>
          <?php endif; ?>


            <form action="<?= base_url('login') ?>" method="post" novalidate>
              <?= csrf_field() ?>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= old('email') ?>" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
                    <div class="text-center mt-3">
                      <p class="mb-0">
                          Don't have an account?
                          <a href="<?= base_url('register') ?>" class="text-primary fw-bold">
                              Register
                          </a>
                      </p>
                    </div>
                    <br>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
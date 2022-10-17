<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Akun</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/login.css'); ?>">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo site_url('assets/images/tani1.jpg'); ?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h1 style="font-weight: 800;">
                  <span style="color: #2eca6a;">SI</span>CANTIK<br>
                </h1>
                <span>SISTEM CATATAN PETANI ORGANIK</span>
              </div>
              <p class="login-card-description">Daftar Akun</p>
              <?php
              if ($this->session->flashdata('error') != '') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
              }
              ?>
              <form action="<?php echo site_url('register/proses'); ?>" method="post">
                <div class="form-group">
                  <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
                </div>
                <input class="btn btn-block login-btn mb-4" type="submit" value="Register">
              </form>
              <p class="login-card-footer-text">Sudah punya akun ?<a href="<?php echo site_url()?>login/index" class="text-reset"> Masuk</a> disini</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
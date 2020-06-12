<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/src/jquery.horizontalmenu.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/main.css')?>">
</head>
<body class="hold-transition register-page mt-5">
<div class="register-box">
  <div class="register-logo">
    <b>Register</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post">

        <?php echo form_open('login/register'); ?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama" value="<?php echo set_value('nama'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <small class="text-danger ml-2" style="margin-top:-10px;"> <?php echo form_error('nama'); ?> </small>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <small class="text-danger ml-2" style="margin-top:-10px;"> <?php echo form_error('username'); ?> </small>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <small class="text-danger ml-2" style="margin-top:-10px;"> <?php echo form_error('email'); ?> </small>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <small class="text-danger ml-2" style="margin-top:-10px;"> <?php echo form_error('password'); ?> </small>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password_conf" value="<?php echo set_value('password_conf'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <small class="text-danger ml-2" style="margin-top:-10px;"> <?php echo form_error('password_conf'); ?> </small>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block mb-3" name="btnSubmit" value="Daftar" data-toggle="modal" data-target="#modal-success">Register</button>
          </div>
          <?php echo form_close();?>
          <!-- /.col -->
        </div>
      </form>

      <?php echo anchor(base_url().'login','I already have a membership'); ?>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>

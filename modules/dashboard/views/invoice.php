<!DOCTYPE html>
<html>
<head> <?php $this->load->view('dashboard/partials/head.php') ?></head>
<body class="hold-transition sidebar-mini">
  <?php echo ucfirst($this->session->userdata('username')); ?>

  <div class="wrapper">
  <!-- Navbar -->
  <nav"> <?php $this->load->view('dashboard/partials/navbar.php') ?></nav>


  <aside> <?php $this->load->view('dashboard/partials/sidebar.php') ?></aside>

     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Invoiced</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Invoiced</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID_order
                      </th>
                      <th style="width: 25%" class="text-center">
                          Tanggal
                      </th>
                      <th style="width: 20%">
                          ID_Pelanggan
                      </th>
                  </tr>
              </thead>

              <tbody>
                <?php 
                  $no = 1;
                  foreach($tbl_order as $u){
                 ?>
                 <tr>
                  <td><?php echo $u['id']?></td>
                  <td><?php echo $u['tanggal'] ?></td>
                  <td><?php echo $u['pelanggan'] ?></td>
                  <td class="project-actions text-right">
                    <div class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-folder">
                      <?php echo anchor('dashboard/detail/'.$u['id'],'Detail'); ?>
                        </i>
                        </i>
                        </div>
          </td>
                 </tr>
              </tbody>
          <?php } ?>
              </table>


<?php $this->load->view('dashboard/partials/js.php') ?>

</body>
</html>
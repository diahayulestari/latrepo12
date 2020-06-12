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
            <h1>Kategori</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kategori</h3>

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
                          Id
                      </th>
                      <th style="width: 25%" class="text-center">
                          Nama_Kategori
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($tbl_kategori as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><?php echo $u['id']?></td>
              	 	<td><?php echo $u['nama_kategori'] ?></td>

              	 	<td class="project-actions text-right">
              	 		<div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<?php echo anchor(base_url('dashboard/editkategori/'.$u['id']),'Edit'); ?>
                        </i>
                        </div>
                        <div class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-folder">
                <?php echo anchor('dashboard/hapus/'.$u['id'],'Hapus'); ?>
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
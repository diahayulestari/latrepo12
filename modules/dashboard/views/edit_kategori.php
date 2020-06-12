<!DOCTYPE html>
<html>
<head><?php $this->load->view("dashboard/partials/head.php") ?> </head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  <nav ><?php $this->load->view("dashboard/partials/navbar.php") ?></nav>

  <aside><?php $this->load->view("dashboard/partials/sidebar.php") ?></aside>
    <div class="content-wrapper">

      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <section class="content">
          <div class="container-fluid">
        <?php foreach($tbl_kategori as $u){ ?>
              <form action="<?php echo base_url(''); ?>dashboard/upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id Kategori</label>
                      <input type="text" name="id" value="<?php echo $u->id;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Nama Kategori</label>
                      <input type="text" name="nama_kategori" value="<?php echo $u->nama_kategori;?>" class="form-control" placeholder="Enter">
                </div>
                <input type="submit" value="Update" class="btn btn-primary btn-block">
              </form>
              <?php } ?>
              </div>
            </section>
            </div>
    </div>
<?php $this->load->view('dashboard/partials/js.php') ?>
</body>
</html>
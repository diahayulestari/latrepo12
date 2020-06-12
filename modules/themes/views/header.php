<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <!-- The above 3 meta tags *must* come first in the head; any
other head content must come *after* these tags -->
 <meta name="description" content="">
 <meta name="author" content="">
 <title>A Store</title>
 <link href="<?php echo
base_url()?>assets/bootstrap/css/bootstrap.min.css"
rel="stylesheet">
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <link href="<?php echo base_url()?>assets/asie/css/ie10-
viewport-bug-workaround.css" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="<?php echo base_url()?>assets/custom.css"
rel="stylesheet">
 <link href="<?php echo base_url()?>assets/jquery/jqueryui.css" rel="stylesheet">
 <!-- Just for debugging purposes. Don't actually copy these 2
lines! -->
 <!--[if lt IE 9]><script src="../../assets/js/ie8-responsivefile-warning.js"></script><![endif]-->
 <script src="<?php echo base_url()?>assets/asie/js/ieemulation-modes-warning.js"></script>
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5
elements and media queries -->
 <!--[if lt IE 9]>
 <script
src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></s
cript>
 <script
src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></scrip
t>
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
 <![endif]-->
 </head>
 <body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo base_url()?>assert/images/a.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
		<div id="navbar" class="collapse navbar-collapse">
		<a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/images/As.png"></a>
		<ul class="nav navbar-nav navbar-right">
 <li class="active"><a href="<?php echo
base_url()?>">Home</a></li>
 <li><a href="<?php echo base_url()?>page/tentang"><i
class="glyphicon glyphicon-user"></i> Tentang</a></li>
 <li><a href="<?php echo
base_url()?>page/cara_bayar"><i class="glyphicon glyphiconbriefcase"></i> Kontak</a></li>
 <li><a href="<?php echo
base_url()?>shopping/tampil_cart"><i class="glyphicon glyphiconshopping-cart"></i> Keranjang Belanja</a></li>
 <li><a href="<?php echo
base_url()?>login"><i class="glyphicon glyphiconshopping-cart"></i> Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/images/a.png);">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>WELCOME TO "A STORE"</h2>
             <p></p>
             <div class="carousel-item active" style="background-image: url(assets/images/a.png);">
            </div>
          </div>
        </div>
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
 <!-- Begin page content -->
<div class="container">
<div class="row">
 <div class="col-lg-3">
 <div class="list-group">
 <a class="list-group-item"><strong>KATEGORI</strong></a>
 <a href="<?php echo base_url()?>shopping/index/"
class="list-group-item">Semua</a>
 <?php
 foreach ($kategori as $row)
 {
 ?>
 <a href="<?php echo base_url()?>shopping/produk_kategori/<?php
echo $row['id'];?>" class="list-group-item"><?php echo
$row['nama_kategori'];?></a>
 <?php } ?>
 </div><br>
 <div class="list-group">
 <a href="<?php echo base_url()?>shopping/tampil_cart"
class="list-group-item"><strong><i class="glyphicon glyphiconshopping-cart"></i> KERANJANG BELANJA</strong></a>
 <?php
 $cart= $this->cart->contents();
// If cart is empty, this will show below message.
 if(empty($cart)) {
 ?>
 <a class="list-group-item">Keranjang Belanja
Kosong</a>
 <?php
 }
 else
 {
 $grand_total = 0;
 foreach ($cart as $item)
 {
 $grand_total+=$item['subtotal'];
 ?>
 <a class="list-group-item"><?php echo
$item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo
number_format($item['price'],0,",","."); ?>)=<?php echo
number_format($item['subtotal'],0,",","."); ?></a>
 <?php }?>
 <?php }?>
 </div>
 </div>
 <!-- /.col-lg-3 -->
 <div class="col-lg-9">
<div class="row">

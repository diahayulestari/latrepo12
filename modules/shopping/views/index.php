<h2>Daftar Produk</h2>

<!-- Form Pencarian -->
<div class="row col-md-12" style="margin-top:20px">
	<div class="col-lg-6 pull-right">
		<div class="input-group pager">
			<input class="form-control" type="text" id="keyword" placeholder="Cari Produk">
			<span class="input-group-btn">
				<button class="btn btn-primary" type="button" id="btn-search">Search</button>
			</span>
		</div>
	</div>
</div>

<!-- Menampilkan Produk -->
<div class="col-md-12 mx-auto" id="view" style="margin-bottom:50px">
	<?php $this->load->view('view', array('produk'=>$produk)); ?>
</div>

<!-- Java Script -->
<script>
    var baseurl = "<?= base_url("index.php/"); ?>";
</script>
<script src="<?= base_url('assets/dist/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/dist/js/config.js')?>"></script>
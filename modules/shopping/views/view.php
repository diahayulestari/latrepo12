<!-- Menampilkan Produk -->
<?php
if( ! empty($produk) ){
    foreach($produk as $row){ ?>
        <div class="col-lg-4">
            <div class="kotak">
                <form method="post" action="<?= base_url();?>shopping/tambah" method="post" accept-charset="utf8">
                    <a href="#"><img class="img-thumbnail" src="<?= base_url('assets/images/'.$row->gambar) ?>"/></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?= $row->nama_produk;?></a>
                        </h4>
                        <h4 class="card-title">
                            <a href="#"><?= $row->stock_barang;?></a>
                        </h4>
                        <h5>Rp. <?= number_format($row->harga,0,",",".");?></h5>
                        <p class="card-text"><?= $row->deskripsi;?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url();?>shopping/detail_produk/<?= $row->id_produk;?>" class="btn btn-sm btn-default">
                            <i class="glyphicon glyphicon-search"></i> Detail
                        </a>
                        <input type="hidden" name="id" value="<?= $row->id_produk; ?>" />
                        <input type="hidden" name="nama" value="<?= $row->nama_produk; ?>" />
                        <input type="hidden" name="harga" value="<?= $row->harga; ?>" />
                        <input type="hidden" name="gambar" value="<?= $row->gambar; ?>" />
                        <input type="hidden" name="stock" value="<?= $row->stock_barang; ?>" />
                        <input type="hidden" name="qty" value="1" />
                        <button type="submit" class="btn btn-sm btnsuccess">
                            <i class="glyphicon glyphicon-shopping-cart"></i>Beli
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php }
}else{
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
} ?>


<!-- Tampikan link-link paginationnya -->
<!-- <div class="row col-md-12" style="margin:0">
	<?= $produk ['pagination']; ?>
</div> -->
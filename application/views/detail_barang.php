<div class="container-fluid">

    <div class="card">
    <div class="card-header">
    Detail Produk
    </div>
    <div class="card-body">
        
        <?php foreach($barang as $brg):?>
        <!-- <h5 class="card-title"></h5> -->
        <div class="row">
        <div class="col-md-4">
        <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>Nama Produk</td>
                    <td><strong><?php echo $brg->nama_brg ?></strong></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><strong><?php echo $brg->keterangan ?></strong></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><strong><?php echo $brg->kategori ?></strong></td>
                </tr>
                <tr>
                    <td>stok</td>
                    <td><strong><?php echo $brg->stok ?></strong></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.')  ?></div></strong></td>
                </tr>
            </table>
            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
            <?php echo anchor('dashboard/index','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
        </div>

        </div>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>

    <?php endforeach ?>
    </div>

</div>
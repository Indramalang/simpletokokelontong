<div class="container-fluid">
    <h4>Detail Total Harga Pesanan</h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID Produk</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
    
    <?php
    $total = 0;
    if(count($hargabarang ?? [])){
    foreach ($hargabarang as $hrg):
        $subtotal = $hrg->harga * $hrg->stok;
        $total += $subtotal;
    ?>
    <tr>
        <td><?php echo $hrg->id_brg ?></td>
        <td><img src="<?php echo base_url();?>uploads/<?php echo $hrg->gambar;?>" width="100px"/></td>
        <td><?php echo $hrg->nama_brg ?></td>
        <td><?php echo $hrg->stok ?></td>
        <td align="right">Rp. <?php echo number_format($hrg->harga,0,',','.')  ?></td>
        <td align="right">Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
    </tr>
    
    <?php endforeach ?>
    
    <?php 
    }
    ?>
    <tr>
        <td colspan="4" align="right">Total Stok</td>
        <td  align="right">Rp. <?php echo number_format($total,0,',','.')?></td>
    </tr>
    </table>

    <h4>Detail Total Harga Penjualan</h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID Produk</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
    
    <?php
    $total = 0;
    // $id_brg = 0;
    // $nama_brg = array('Kosong');
    // $harga = 0;
    // $sub_total = 0;
    if(count($penjualanbarang ?? [])){
        foreach($penjualanbarang as $pb):
            $subtotal = $pb->harga * $pb->jumlah;
            $total += $subtotal;
        ?>
        <tr>
            <td><?php echo $pb->id_brg ?></td>
            <td><?php echo $pb->nama_brg ?></td>
            <td><?php echo $pb->jumlah ?></td>
            <td align="right">Rp. <?php echo number_format($pb->harga,0,',','.')  ?></td>
            <td align="right">Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
        </tr>
    
        <?php endforeach ?>
        
    <?php
    }
    ?>
    <tr>
        <td colspan="4" align="right">Total Penjualan</td>
        <td  align="right">Rp. <?php echo number_format($total,0,',','.')?></td>
    </tr>
    </table>
    <a href="<?php echo base_url('admin/dashboard_admin') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
    <a href="<?php echo base_url('admin/hargabarang/reset') ?>"><div class="btn btn-sm btn-danger">Reset Penjualan</div></a>
</div>
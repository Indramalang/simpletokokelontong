<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
    <tr>
        <th>ID Invoice</th>
        <th>Nama Pemesan</th>
        <th>Alamat Pengiriman</th>
        <th>Tanggal Pemesanan</th>
        <th>Batas Pembayaran</th>
        <th>Aksi</th>
    </tr>
    <?php 
    if(count($invoice ?? [])){
    foreach ($invoice as $inv):?>

    <tr>
        <td><?php echo $inv->id?></td>
        <td><?php echo $inv->nama?></td>
        <td><?php echo $inv->alamat?></td>
        <td><?php echo $inv->tgl_pesan?></td>
        <td><?php echo $inv->batas_bayar?></td>
        <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
    </tr>

    <?php endforeach ?>
    <?php 
    } ?>
</table>
<a href="<?php echo base_url('admin/dashboard_admin') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
    <a href="<?php echo base_url('admin/invoice/reset') ?>"><div class="btn btn-sm btn-danger">Reset Pemesanan</div></a>
</div>
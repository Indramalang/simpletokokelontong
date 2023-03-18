<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang
</button>
<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Gambar</th>
    <th>Nama Barang</th>
    <th>Keterangan</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th colspan="3">Aksi</th>
</tr>
<?php 
$no=1;
if(count($barang ?? [])){
foreach($barang as $brg):?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><img src="<?php echo base_url();?>uploads/<?php echo $brg->gambar;?>" width="100px"/></td>
    <td><?php echo $brg->nama_brg ?></td>
    <td><?php echo $brg->keterangan ?></td>
    <td><?php echo $brg->kategori ?></td>
    <td><?php echo $brg->harga ?></td>
    <td><?php echo $brg->stok ?></td>
    <!-- <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td> -->
    <td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
    <td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
    
</tr>
<?php endforeach;?>

</table>
<?php
} 
?>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Awal Form -->
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_brg" class="form-control">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control">
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="text" name="stok" class="form-control">
    </div>
    <div class="form-group">
        <label>Gambar Produk</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <!-- Akhir Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    </div>
  </div>
</div>
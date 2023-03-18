<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h6>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Alamat Pembayaran</h3>
            <form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            </div>
            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
            </div>
            <div class="form-group">
                <label>Pengambilan</label>
                <select class="form-control">
                    <option>Sendiri</option>
                    <option>Diantarkan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pilih Pembayaran</label>
                <select class="form-control">
                    <option>Tunai</option>
                    <option>BCA        - 817xxxx</option>
                    <option>Bank Jatim - 1010000</option>
                    <option>DANA       - 0810xxxxxxxx</option>
                    <option>BRI        - 817xxxx</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Pesan</button>

        </form>
        <?php 
        }else{
            echo "<h5> Keranjang Anda Masih Kosong";
        }
        ?>
        </div>

        
        <div class="col-md-2"></div>
    </div>
</div>
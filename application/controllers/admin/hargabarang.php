<?php 

class hargabarang extends CI_Controller{
    public $model_barang;

    public function index(){ //Sudan Benar
        $data['hargabarang'] = $this->model_barang->tampil_datahrg();
        $data['penjualanbarang'] = $this->model_barang->tampil_hrgjual();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/hargabarang',$data);
        $this->load->view('templates_admin/footer');
    }
    public function reset (){
        $data = array(
            'reset_barang' => 1,
        );
        $this->model_barang->reset($data, 'tb_pesanan');
        redirect('admin/hargabarang/index');
    }
}
?>
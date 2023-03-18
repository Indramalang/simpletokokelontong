<?php 

class Invoice extends CI_Controller{
    public $model_invoice;

    public function index(){ //Sudan Benar
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer');
    }
    public function detail($id_invoice){
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');
    }
    public function reset (){
        $data = array(
            'reset_invoice' => 1,
        );
        $this->model_invoice->reset($data, 'tb_invoice');
        redirect('admin/invoice');
    }
}

?>
<?php 
class dashboard_admin extends CI_Controller{
    public $model_auth,
           $session;
    public function index(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
        $datauser= $this->model_auth->pilih_user($this->session->userdata('id'))->row();
    }
}

?>
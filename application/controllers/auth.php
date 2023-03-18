<?php

class auth extends CI_Controller{
    public $input,
           $session,
           $model_auth;

    public function masuk() {
        $this->load->view('form_login');
    
    }

    public function login(){
        $username = $this->input->post('username','true');
        $password = $this->input->post('password','true');

        $temp_account = $this->model_auth->cek_user($username,$password)->row();

        if($temp_account){
            $ses = array(
                'id' => $temp_account->id,
                'username' => $temp_account->username,
                'level' => $temp_account->level
            );
            $this->session->set_userdata($ses);
            if($temp_account->level == "Owner"){
                redirect(site_url('admin/dashboard_admin'));
            }else{
                redirect(site_url('dashboard'));
            }
        }else{
            ?><script language="JavaScript">alert('Username dan Password Anda Salah!');
                document.location='<?php echo site_url('');?>'</script><?php
        }
    }

    public function logout_message() {
        $this->session->set_flashdata('msg', '
                <div class="alert alert-warning">
                <strong>Sampai Jumpa!</strong> Anda sudah keluar...
                </div>
                ');
        redirect(base_url(), 'refresh');
    }

    // public function login(){
    //     $this->form_validation->set_rules('username','Username','required');
    //     $this->form_validation->set_rules('password','Password','required');
    //     if($this->form_validation-run() == FALSE){
    //         $this->load->view('form_login');
    //     }else{
    //         $auth = $this->model_auth->cek_login();

    //         if($auth == FALSE){
    //             $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //                                             <strong>Username Atau Passoword anda Salah.
    //                                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //                                             </div>');
    //                                             redirect('auth/login');
    //         }else{
    //             $this->session->set_userdata('username', $auth->username);
    //             $this->session->set_userdata('level', $auth->level);

    //             switch($auth->role_id){
    //                 case 1 : redirect('admin/dashboard_admin');
    //                          break;
    //                 case 2 : redirect('dashboard');
    //                          break;
    //                 default: break;
    //             }
    //         }
    //     }
    // }
}
?>
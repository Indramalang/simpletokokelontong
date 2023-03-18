<?php

class model_kategori extends CI_Model{
    public function data_elektronik(){
       return $this->db->get_where('tb_barang', array('kategori'=>'Elektronik'));
    }
    public function data_makanan(){
        return $this->db->get_where('tb_barang', array('kategori'=>'Makanan'));
     }
     public function data_minuman(){
        return $this->db->get_where('tb_barang', array('kategori'=>'Minuman'));
     }
     public function data_peralatan_olahraga(){
        return $this->db->get_where('tb_barang', array('kategori'=>'Peralatan olahraga'));
     }
}

?>
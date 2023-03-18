<?php

class model_barang extends CI_Model{
    public $id;



    public function tampil_data(){
       $this->db->where('delete_barang', 0);
       return $this->db->get('tb_barang');
    }
    // public function tampil_data(){
    //     $result = $this->db->where('delete_barang', 0)->get('tb_barang');
    //     if ($result->num_rows() > 0){
    //     return $result ->result();
    //     }else{return ($result ?? []);}
    //  }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function reset($data,$table){
        // $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id){
        $result = $this->db->where('id_brg', $id)
                           ->limit(1)
                           ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{return array();}
    }

    public function detail_brg($id_brg){
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if($result->num_rows()> 0 ){
            return $result->result();
        }else{
            return false;
        }
    }
    public function tampil_datahrg()
    {
        $result = $this->db->order_by('stok', 'desc')->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
    public function tampil_hrgjual()
    {
        $result = $this->db->order_by('jumlah', 'desc')->where('reset_barang',0)->get('tb_pesanan');
        // if($result->num_rows() > 0){
            return $result->result();
        // }else{
        //     return False;
        // }
    }
}
<?php
class Mberanda extends CI_Model {
        
    function search($keyword){
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->like('judul_berita',$keyword);
        $this->db->or_like('isi_berita',$keyword);
        $this->db->or_like('kat_berita',$keyword);
        return $this->db->get()->result_array();
    }
}
?>
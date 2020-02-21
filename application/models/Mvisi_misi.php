<?php
class Mvisi_misi extends CI_Model {

        public function misi(){
                $this->db->delete('tb_visimisi',array('ket_visimisi'=>'misi'));
                $misi=$this->input->post('misi');
                $mulai=0;
                foreach($misi as $key){
                        $data['isi_visimisi']=$misi[$mulai];
                        $this->db->insert('tb_visimisi',$data);
                        $mulai++;
                }
        }
}
?>
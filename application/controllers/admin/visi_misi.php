<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
	        //  if($this->session->userdata('login')==0){
	        //     redirect('welcome');
	        //  }elseif($this->session->userdata('login')==2){
	        //     redirect('users');
	        // }
		 	error_reporting(0);
	}

	public function index()
	{  
        $this->form_validation->set_rules('visi', 'visi', 'required');
        if($this->form_validation->run()===false){
    		$data=array(
                'visi' =>$this->db->get_where('tb_visimisi',array('ket_visimisi'=>'visi'))->result_array(),
                'misi' =>$this->db->get_where('tb_visimisi',array('ket_visimisi'=>'misi'))->result_array(),
            );
    		$this->load->view('admin/visi_misi/data',$data);
        }else{
            $where['id_visimisi']=$this->Mcrypt->decrypt($this->input->post('id_visi'));
            $visi=$this->db->get_where('tb_visimisi',$where)->result_array();
            $data=array(
                    'isi_visimisi' => $this->input->post('visi'),
                    'ket_visimisi'=> 'visi'
            );
            if(count($visi)==0){
                $this->db->insert('tb_visimisi',$data);
            }else{
                $this->db->update('tb_visimisi',$data,$where);
            }
            $this->db->delete('tb_visimisi',array('ket_visimisi'=>'misi'));
                $misi=$this->input->post('misi');
                $mulai=0;
                foreach($misi as $key){
                        if(empty($misi[$mulai])){
                            $mulai++;
                            continue;
                        }
                        $datamisi['isi_visimisi']=$misi[$mulai];
                        $datamisi['ket_visimisi']='misi';
                        $this->db->insert('tb_visimisi',$datamisi);
                        $mulai++;
                }
            redirect('admin/visi_misi');
        }
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	function __construct()
    {
         parent::__construct();
             if($this->session->userdata('logged_in')!=TRUE){
                redirect('welcome');
             }
            error_reporting(0);
    }

	public function index()
	{  
        $this->form_validation->set_rules('pertanyaan[0]', 'pertanyaan','required');
        if($this->form_validation->run()===false){
    		$data=array(
                'survey' =>$this->db->get('tb_soal')->result_array(),
            );
    		$this->load->view('admin/survey/data',$data);
        }else{
            $soal=$this->input->post('pertanyaan');
            $this->db->query('DELETE FROM tb_soal');
            $no=1;
            $simpan=0;
            foreach($soal as $key){
                $pertanyaan=array(
                    'id' =>$no,
                    'pertanyaan' => $soal[$simpan]
                );
                if(empty($soal[$simpan])){
                    $simpan++;
                    continue;
                }else{
                    echo $no;
                    $this->db->insert('tb_soal',$pertanyaan);
                    $no++;
                    $simpan++;
                }
                
                
            }
            redirect('admin/survey');
        }
	}
}

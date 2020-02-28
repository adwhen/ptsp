<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
	public function index()
	{
		if(empty($this->input->post('tombol'))){
			$data=array(
				'isi'=>'frontend/page/survey',
				'soal' =>$this->db->get('tb_soal')->result_array(),
			);
			$this->load->view('frontend/snippet/template',$data);
		}else{
			$orang=array(
				'nama_survey'=>$this->input->post('nama_survey'),
				'pekerjaan_survey'=>$this->input->post('pekerjaan_survey'),
			);
			$this->db->insert('tb_survey',$orang);
			$id=$this->db->insert_id();
			$soal=$this->input->post('soal');
			$nilai=$this->input->post('pil');
			$no=0;
			foreach($soal as $key){
				$simpan=array(
					'soal_nilai'=>$soal[$no],
					'survey_nilai' =>$id,
					'nilai'	=>$nilai[$no]
				);
				$this->db->insert('tb_nilai',$simpan);
				$no++;
			}
			redirect('frontend/survey');
		}
	}
	public function hasil(){
		$jumlah=count($this->db->get('tb_soal')->result_array());
		$bagi=round($jumlah/2);
		$data=array(
				'isi'=>'frontend/page/hasilsurvey',
				'soal' =>$this->db->get('tb_soal',$bagi,0)->result_array(),
				'soal2' =>$this->db->get('tb_soal',$jumlah,$bagi)->result_array(),
				'semua' =>$this->db->get('tb_soal')->result_array(),
				'jumlah' =>count($this->db->get('tb_survey')->result_array())

			);
			$this->load->view('frontend/snippet/template',$data);
	}

}

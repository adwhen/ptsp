<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index($id=null)
	{
		if(empty($id)){
			$data=array(
				'isi'=>'frontend/page/survey',
				'soal' =>$this->db->get('tb_soal')->result_array(),
			);
			$this->load->view('frontend/snippet/template',$data);
		}else{
			$img = $this->input->post('image');
		    $folderPath = 'asset/gambar/survey/';
		  
		    $image_parts = explode(";base64,", $img);
		    $image_type_aux = explode("image/", $image_parts[0]);
		    $image_type = $image_type_aux[1];
		  
		    $image_base64 = base64_decode($image_parts[1]);
		    $fileName = uniqid() . '.png';
		  
		    $file = $folderPath . $fileName;
		    file_put_contents($file, $image_base64);

			$orang=array(
				'nama_survey'=>$this->input->post('nama_survey'),
				'pekerjaan_survey'=>$this->input->post('pekerjaan_survey'),
				'jk_survey'=>$this->input->post('jk_survey'),
				'email_survey'=>$this->input->post('email_survey'),
				'no_survey'=>$this->input->post('no_survey'),
				'saran_survey'=>$this->input->post('saran_survey'),
				'pendidikan_survey'=>$this->input->post('pendidikan_survey'),
				'usia_survey'=>$this->input->post('usia_survey'),
				'url'=>base_url($file)
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
	public function upload(){
		$nama_file = time().'.jpg';
		$direktori = base_url('asset/control');
		$target = $direktori.$nama_file;

		move_uploaded_file($_FILES['webcam']['tmp_name'], $target);
	}

}

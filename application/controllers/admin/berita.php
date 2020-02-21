<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
		$data=array(
			'isi'=>'admin/berita/data',
			'data' =>$this->db->get('tb_berita')->result_array()
		);
		$this->load->view('admin/snippet/template',$data);
	}
	public function form($id_berita=null){
		$berita=$this->db->query('select * from tb_berita order by id_berita DESC limit 1')->result_array();
		if(count($berita)==0){
			$id=0;
			$encrypt_id=$this->encryption->encrypt($id);
		}else{
			$id=$berita[0]['id_berita']+1;
			$encrypt_id=$this->encryption->encrypt($id);
		}

		$this->form_validation->set_rules('id_berita', 'id_berita', 'required');
		$this->form_validation->set_rules('judul_berita', 'judul_berita', 'required');
		$this->form_validation->set_rules('isi_berita', 'isi_berita',);
		$this->form_validation->set_rules('tgl_publish', 'tgl_publish', 'required');
		$this->form_validation->set_rules('kat_berita', 'Kategori Berita', 'required');

		if($this->form_validation->run()===false){
			$this->db->delete('tb_file',array('ket_file'=>"sementara"));
			if(!empty($id_berita)){
				$decode= $this->encryption->decrypt($id_berita);
				$berita=$this->db->get_where('tb_berita',array('id_berita'=>$decode))->result_array();
				
				$file=$this->db->get_where('tb_file',array('ket_file'=>$decode))->result_array();
				$encrypt_id=$this->encryption->encrypt($id_berita);
				$data=array(
					'isi'	=>'admin/berita/form_berita',
					'id'	=>$encrypt_id,
					'data'	=>$berita,
					'foto'	=>$file
				);
			}else{
				$data=array(
					'isi'	=>'admin/berita/form_berita',
					'id'	=>$encrypt_id
				);
			}
			
			$this->load->view('admin/snippet/template',$data);
		}else{
			$decode= $this->encryption->decrypt($this->input->post('id_berita'));
			$where = array('id_berita'=>$decode);
			$berita= $this->db->get_where('tb_berita',$where)->result_array();
			if(count($berita)==0){
				$data=array(
					'id_berita'=>$decode,
					'judul_berita'=>$this->input->post('judul_berita'),
					'isi_berita'=>$this->input->post('isi_berita'),
					'tgl_publish'=>$this->input->post('tgl_publish'),
					'tgl_update'=>$this->input->post('tgl_publish'),
					'kat_berita'=>$this->input->post('kat_berita'),
				);
				$this->db->insert('tb_berita',$data);
				$this->db->update('tb_file',array('ket_file'=>$decode),array('ket_file'=>"sementara"));
				redirect('admin/berita/form');
			}else{
				$data=array(
					'judul_berita'=>$this->input->post('judul_berita'),
					'isi_berita'=>$this->input->post('isi_berita'),
					'tgl_update'=>$this->input->post('tgl_publish'),
					'kat_berita'=>$this->input->post('kat_berita'),
				);
				$this->db->update('tb_berita',$data,$where);
				$this->db->update('tb_file',array('ket_file'=>$decode),array('ket_file'=>"sementara"));
				redirect('admin/berita/form');
			}
		}
		
	}
	public function upload(){
		$decode= $this->encryption->decrypt($this->input->post('id_berita'));
		$nmfile="foto_berita".time();
        $config['upload_path']          = 'asset/gambar/foto/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
            $data = array(
                    'message'   => 'Image Uploaded Successfully',
                    'image'         => $basePath,
            );
            $nama=$this->input->post('judul_berita')."_".time();

            $simpan = array(
            	'url_file'  => $basePath,
            	'nama_file' => $nama,
            	'kat_file'  => $this->input->post('kat_file'),
            	'ket_file'	=> "sementara"
            );

            $this->db->insert('tb_file',$simpan); 
            echo json_encode($data);  
        }else{
            $data = array(
                'error' => "error"
                );

            echo json_encode($data);
        }
	}
	public function coba(){
		$data=4;
		$encrypt = $this->encryption->encrypt($data);
		echo $encrypt;
		$decode = $this->encryption->decrypt($encrypt);
		echo "<br>".$decode;
	}
}

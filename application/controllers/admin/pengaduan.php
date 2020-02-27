<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

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
        $query=$this->db->query('SELECT * from tb_pengaduan')->result_array();
        $data=array(
			'isi'=>'admin/pengaduan/data',
			'data' => $query
		);
		$this->load->view('admin/snippet/template',$data);
	}
}

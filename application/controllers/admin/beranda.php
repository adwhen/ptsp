<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
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
		$data=array(
			'isi'=>'admin/beranda'
		);
		$this->load->view('admin/snippet/template',$data);
	}
}

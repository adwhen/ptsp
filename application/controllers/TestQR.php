<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestQR extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('ciqrcode');
	}

	public function index()
	{
		$data['title'] = 'QRCode';
		$data['id'] = 'G1A015022';
		$data['nama'] = 'Agief Muftahid';
		$this->load->view('qrtampil',$data);
	}

	public function QRCode($params)
	{
	    $id = $params;
        QRCode::png(
            'https://kejati-bengkulu.go.id/ptsp_kejati/TestQR/berhasil/'.$id
        );
	}

	public function berhasil($id){
	    $data['id'] = $id;
		$this->load->view('berhasil',$data);
	}
}
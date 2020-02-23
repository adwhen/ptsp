<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/agenda'
		);
		$this->load->view('frontend/snippet/template',$data);
	}
	public function agendaDetail()
	{
		$data=array(
			'isi'=>'frontend/page/agendaDetail'
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}

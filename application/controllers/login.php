<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		if($this->session->userdata('logged_in')==TRUE){
                redirect('admin/beranda');
        }
            error_reporting(0);
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run()===false){
			$this->load->view('frontend/page/login');
		}else{
			$akun=array(
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))
			);
			$check=$this->db->get_where('tb_user',$akun)->result_array();
			if(count($check)==0){
				$this->session->set_flashdata('msg', 'Username atau Password Salah');
				redirect('login');
			}else{
				$session=array(
					'logged_in' =>TRUE,
					'username' =>$this->input->post('username')
				);
				$this->session->set_userdata($session);
				redirect('admin/beranda');
			}
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('frontend/beranda');
	}
}

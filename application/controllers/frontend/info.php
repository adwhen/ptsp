<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	public function index($jenis)
	{
		$specs = jenisInformasi($jenis);
		if($specs['tipe']=='pdf'){
			$array = judulInformasi($specs['jenis']);
			$x=0;$y=0;
			foreach($array as $jdl){
				$array[$x]['subJudul'] = subJudulInformasi($specs['jenis'],$jdl['judul_informasi']);
				foreach($array[$x]['subJudul'] as $sub){
					$array[$x][$y]['file'] = dataFile($specs['jenis'],$jdl['judul_informasi'],$sub['sub_informasi']);
					$y++;
				}
				$x++;
			}
			$data=array(
	            'jenis' => $specs['jenis'],
				'isi'=>'frontend/page/informasi',
				'tipe'=> $specs['tipe'],
				'data1' => $array
			);
			$this->load->view('frontend/snippet/template',$data);
		}else{
			$array = periode($specs['jenis']);
			$x=0;$y=0;
			foreach($array as $per){
				$array[$x]['nama_file'] = filePerPeriode($specs['jenis'],$per['periode']);
				$x++;
			}
			$data=array(
	            'jenis' => $specs['jenis'],
				'isi'=>'frontend/page/informasi',
				'tipe'=> $specs['tipe'],
				'data2' => $array
			);
			$this->load->view('frontend/snippet/template',$data);
		}
	}
}

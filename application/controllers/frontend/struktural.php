<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktural extends CI_Controller {
	public function index()
	{
		$kajati = struktural('kepala kejaksaan tinggi');
		$wakajati = struktural('wakil kepala kejaksaan tinggi');
		$tu = struktural('tata usaha');
		$pembinaan = struktural('asisten pembinaan');
		$intel = struktural('asisten intelijen');
		$pidum = struktural('asisten tindak pidana umum');
		$pidsus = struktural('asisten tindak pidana khusus');
		$ptun = struktural('asisten perdata dan tata usaha negara');
		$pengawas = struktural('asisten pengawas');
		$data=array(
			'isi'=>'frontend/page/struktural',
			'kajati' => $kajati,
			'wakajati' => $wakajati,
			'tu' => $tu,
			'pembinaan' => $pembinaan,
			'intel' => $intel,
			'pidum' => $pidum,
			'pidsus' => $pidsus,
			'ptun' => $ptun,
			'pengawas' => $pengawas
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}

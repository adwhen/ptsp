<?php 
    
    function jenisInformasi($jenis){
		if ($jenis=='pidum'){
            return 'Pidana Umum';
        }elseif($jenis=='pidsus'){
            return 'Pidana Khusus';
        }elseif($jenis=='ptun'){
            return 'Perdata dan Tata Usaha Negara';
        }elseif($jenis=='ptun'){
            return 'Perdata dan Tata Usaha Negara';
        }else{
            return $jenis;
        }
    }
    
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split = explode('-', $tanggal);
    
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }

    function pagination($array,$baseUrl,$jlh){
        $CI =& get_instance();

        $CI->load->library('pagination');
		$CI->load->config('pagination');
        $config = $CI->config->item('pagination_config');
		$config['base_url'] = base_url().$baseUrl;
		$config['total_rows'] = $array->num_rows();
		$config['per_page'] = $jlh;
    
        return $config;
    }

?>
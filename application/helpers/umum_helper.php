<?php 
    
    function jenisInformasi($jenis){
		if ($jenis=='renja'){
            $specs = array (
                'jenis' => 'rencana kerja',
                'tipe' => 'pdf'
            );
            return $specs;
        }elseif ($jenis=='pembinaan'){
            $specs = array (
                'jenis' => 'pembinaan',
                'tipe' => 'img'
            );
            return $specs;
        }elseif ($jenis=='intelijen'){
            $specs = array (
                'jenis' => 'intelijen',
                'tipe' => 'pdf'
            );
            return $specs;
        }elseif ($jenis=='pidum'){
            $specs = array (
                'jenis' => 'pidana umum',
                'tipe' => 'pdf'
            );
            return $specs;
        }elseif($jenis=='pidsus'){
            $specs = array (
                'jenis' => 'pidana khusus',
                'tipe' => 'img'
            );
            return $specs;
        }elseif($jenis=='ptun'){
            $specs = array (
                'jenis' => 'perdata dan tata usaha negara',
                'tipe' => 'img'
            );
            return $specs;
        }elseif($jenis=='pengawasan'){
            $specs = array (
                'jenis' => 'pengawasan',
                'tipe' => 'img'
            );
            return $specs;
        }elseif($jenis=='pengadaan'){
            $specs = array (
                'jenis' => 'pengadaan',
                'tipe' => 'img'
            );
            return $specs;
        }
    }
    
    function judulInformasi($jenis){
        $CI =& get_instance();

		$CI->db->select('judul_informasi,kat_informasi');
		$CI->db->from('tb_informasi');
        $CI->db->where('kat_informasi',$jenis);
        $CI->db->group_by('judul_informasi');
		$query  = $CI->db->get();
        $array  = $query->result_array();
        
        return $array;
    }
    
    function subJudulInformasi($jenis,$judul){
        $CI =& get_instance();

		$CI->db->select('sub_informasi,kat_informasi');
		$CI->db->from('tb_informasi');
        $CI->db->where('kat_informasi',$jenis);
        $CI->db->where('judul_informasi',$judul);
        $CI->db->group_by('sub_informasi');
		$query  = $CI->db->get();
        $array  = $query->result_array();
        
        return $array;
    }
    
    function dataFile($jenis,$judul,$subjudul){
        $CI =& get_instance();

        $CI->db->select('nama_file,url_file');
		$CI->db->from('tb_file');
		$CI->db->join('tb_informasi','ket_file = id_informasi');
        $CI->db->where('kat_file',$jenis);
        $CI->db->where('judul_informasi',$judul);
        $CI->db->where('sub_informasi',$subjudul);
		$query  = $CI->db->get();
        $array  = $query->result_array();
        
        return $array;

    }
    
    function periode($jenis){
        $CI =& get_instance();

        $CI->db->select('YEAR(tgl_file) as periode');
        $CI->db->from('tb_file');
        $CI->db->where('kat_file',$jenis);
        $CI->db->group_by('YEAR(tgl_file)');
        $query  = $CI->db->get();
        $array  = $query->result_array();
        
        return $array;

    }
    
    function filePerPeriode($jenis,$periode){
        $CI =& get_instance();

        $CI->db->select('nama_file,url_file');
        $CI->db->from('tb_file');
        $CI->db->where('kat_file',$jenis);
        $CI->db->where('YEAR(tgl_file)',$periode);
        $query  = $CI->db->get();
        $array  = $query->result_array();
        
        return $array;

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

    function struktural($jabatan){
        $CI =& get_instance();

        $CI->db->select('*');
		$CI->db->from('tb_struktural');
		$CI->db->join('tb_file','id_struktural = ket_file','left');
        $CI->db->where('jabatan_struktural',$jabatan);
        $CI->db->where('kat_file','struktural');
		$query  = $CI->db->get();
        $array  = $query->result_array();
    
        return $array;
    }

?>
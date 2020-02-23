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
        
        // variabel split 0 = tanggal
        // variabel split 1 = bulan
        // variabel split 2 = tahun
    
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }

?>
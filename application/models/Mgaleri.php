<?php
class Mgaleri extends CI_Model {


        public function ajaxtampil()
        {
                $baris='';
                $galeri=$this->db->query('SELECT * from tb_file where url_file like "%.jpg%" or url_file like "%.png%" or url_file like "%.jpeg%"')->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>'.$data['url_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#modal_ubah" onclick="modal_ubah('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#hapus-data" onclick="modal_hapus('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
        public function pembinaan()
        {
                $baris='';
                $galeri=$this->db->get_where('tb_file',array('kat_file'=>'pembinaan'))->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>'.$data['url_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_pembinaan" onclick="pembinaan_ubah('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."','".$data['tgl_file']."',".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#hapus_pembinaan" onclick="pembinaan_hapus('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
        public function pidsus()
        {
                $baris='';
                $galeri=$this->db->get_where('tb_file',array('kat_file'=>'pidana khusus'))->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>'.$data['url_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_pidsus" onclick="pidsus_ubah('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."','".$data['tgl_file']."',".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#hapus_pidsus" onclick="pidsus_hapus('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
        public function datun()
        {
                $baris='';
                $galeri=$this->db->get_where('tb_file',array('kat_file'=>'perdata dan tata usaha negara'))->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>'.$data['url_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_datun" onclick="datun_ubah('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."','".$data['tgl_file']."',".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#hapus_datun" onclick="datun_hapus('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
        public function pengawasan()
        {
                $baris='';
                $galeri=$this->db->get_where('tb_file',array('kat_file'=>'pengawasan'))->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>'.$data['url_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_pengawasan" onclick="pengawasan_ubah('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."','".$data['tgl_file']."',".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#pengawasan_datun" onclick="pengawasan_hapus('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
        public function pengadaan()
        {
                $baris='';
                $galeri=$this->db->get_where('tb_file',array('kat_file'=>'pengadaan'))->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>'.$data['url_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_pengadaan" onclick="pengadaan_ubah('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."','".$data['tgl_file']."',".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#pengadaan_datun" onclick="pengadaan_hapus('."'".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
        public function struktural()
        {
                $baris='';
                $this->db->join('tb_file','tb_struktural.id_struktural=tb_file.ket_file','left');   
                $query=$this->db->get('tb_struktural')->result_array();;
                $no=0;
                foreach ($query as $data) {
                $string1 = "'".$this->Mcrypt->encrypt($data['id_struktural'])."','".$this->Mcrypt->encrypt($data['id_file'])."','".$data['nama_struktural']."','".$data['jabatan_struktural']."','".$data['nip_pegawai']."'";
                $string2 = "'".$this->Mcrypt->encrypt($data['id_struktural'])."','".$this->Mcrypt->encrypt($data['id_file'])."','".++$no."'";
                $baris.='<tr>'.
                                        '<td>'.$no.'</td>'.
                                        '<td>'.$data['nama_struktural'].'</td>'.
                                        '<td>'.$data['nip_pegawai'].'</td>'.
                                        '<td>'.$data['jabatan_struktural'].'</td>'.
                                        '<td>'.'<img width="30px" src="'.$data['url_file'].'">'.'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_struktural" onclick="struktural_ubah('.$string1.')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button onclick="struktural_hapus('.$string2.')" data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus_struktural" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }

}
?>
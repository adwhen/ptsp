<?php
class Mgaleri extends CI_Model {


        public function ajaxtampil()
        {
                $baris='';
                $galeri=$this->db->get('tb_file')->result_array();
                $no=1;
                foreach ($galeri as $data) {
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_file'].'</td>'.
                                        '<td>'.$data['kat_file'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#modal_ubah" onclick="modal_ubah('."'".$this->encryption->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#hapus-data" onclick="modal_hapus('."'".$this->encryption->encrypt($data['id_file'])."','".$data['nama_file']."','".$data['url_file']."','".$data['kat_file']."'".')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
}
?>
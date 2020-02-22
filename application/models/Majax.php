<?php
class Majax extends CI_Model {


        public function tampil_kejari()
        {
                $baris='';
                $dt=$this->db->get('tb_kejari')->result_array();
                $no=1;
                foreach ($dt as $data) {
                        $onclick="'3','".$this->encryption->encrypt($data['id_kejari'])."','".$data['nama_kejari']."','".$data['alamat_kejari']."','".$data['ketua_kejari']."','".$data['url_kejari']."'";
                        $onclick2="'4','".$this->encryption->encrypt($data['id_kejari'])."','".$data['nama_kejari']."','".$data['alamat_kejari']."','".$data['ketua_kejari']."','".$data['url_kejari']."'";
                $baris.='<tr>'.
                                        '<td>'.$no++.'</td>'.
                                        '<td>'.$data['nama_kejari'].'</td>'.
                                        '<td>'.$data['alamat_kejari'].'</td>'.
                                        '<td>'.$data['ketua_kejari'].'</td>'.
                                        '<td>
                                                <center><div class="tooltip-demo">
                                                <button onclick="form_kejari('.$onclick.')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                                                <button onclick="form_kejari('.$onclick2.')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                                </div></center>
                                        </td>'.
                                '</tr>';
                }
                
                return $baris;
        }
}
?>
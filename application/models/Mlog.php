<?php
class Mlog extends CI_Model {


        public function log()
        {
                $data=array(
                        'ip'        =>getIP(),
                        'date'      =>date('Y-m-d h:i:s')
                );
                $this->db->insert('log',$data); 
        }
}
?>
<?php
class Mcrypt extends CI_Model {
        
        function encrypt($data){
                $text = $this->encryption->encrypt($data);
                return str_replace("/","kejati",$text);  
        }
        function decrypt($data){
                $text = str_replace("kejati","/",$data);
                return $this->encryption->decrypt($text);

        }
}
?>
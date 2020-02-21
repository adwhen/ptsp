<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('admin/snippet/footer');
?>

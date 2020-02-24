<!DOCTYPE html>
<html>
<?php 
$this->load->view('frontend/snippet/header');?>
<body style="background-color: #ccd1cb" id="body">
<?php
$this->load->view('frontend/snippet/navbar_home');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('frontend/snippet/footer');
?>
</body>
</html>

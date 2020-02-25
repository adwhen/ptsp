<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
      <title>Berita | Kejaksaan Tinggi Bengkulu </title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets_front/css/responsive.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets_front/css/styles.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/assets_front/vendor/bootstrap/bootstrap.css">
      <link href="<?php echo base_url(); ?>asset/assets_front/vendor/fontawesome/css/all.css" rel="stylesheet">
</head>
<body id="loginBody">
    <br>
    <div class="container-fluid" style="text-align:center;width:100%">
        <br>
        <div class="row justify-content-md-center">
            <div class="col">
                <center>
                <img src="<?php echo base_url(); ?>asset/assets_front/img/logovisi.png" class="img-fluid logoLogin" style="text-align:center;" alt="Responsive image">
                <br>
                </center>
            </div>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <div class="container">
                <div class="container" id="containerLogin">
                    <div class="col">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <h4><b>LOGIN</b></h4>
                        </div>
                        <div class="card-body">
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('msg'); ?>
                            <?php  echo form_open_multipart('login/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kata Sandi</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                    <small id="emailHelp" class="form-text text-muted">Perhatikan dengan baik pengetikan password</small>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    <footer id="footer">
        <div class="footer-one footer-widgets bg-success" style="padding-top:10px; padding-bottom:10px">
            <div class="container">
                <div class="col-md-12 text-white text-center">
                    <p style="margin-bottom:unset; font-size:13px">Copyright © 2020 Website Resmi Kejaksaan Tinggi Bengkulu. All Right Reserved.</p>
                </div>
            </div>
        </div> 
    </footer>

	<script src="<?php echo base_url(); ?>asset/assets_front/vendor/jquery/jquery.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>assetsasset/assets_front/vendor/popper/popper.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>asset/assets_front/vendor/bootstrap/bootstrap.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>asset/assets_front/js/scrolling.js" type="text/javascript">
    </script>

    <script>
    var modal = document.getElementById("modalSarana");
    var modalImg = document.getElementById("imgModal");

    function getSrc(src,nama,ket) {
        modalImg.src = src;
        $("#modalTitle").text(nama);
        $("#namaSarana").text(nama);
        $("#ketSarana").text(ket);
    }

    var span = document.getElementsByClassName("closeFoto")[0];
    span.onclick = function() { 
      modal.style.display = "none";
    }
    </script>

</body>
</html>
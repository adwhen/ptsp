
<link rel="stylesheet" href="<?php echo base_url('/asset/control') ?>/popup.css">


<div id="popup" class="w3-container w3-center w3-animate-zoom">
    <div class="window" >
        <button onclick="mytutup()" href="#"   class="close-button" title="Close">X</button> 
        <img style="width:100%;height:100%;" src="<?php echo $popup[0]['url_file']; ?>">
    </div>
</div>
<script type="text/javascript">
	function mytutup() {
		document.getElementById("popup").style.visibility = "hidden";
	}
</script>
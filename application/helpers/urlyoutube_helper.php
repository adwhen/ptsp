<?php 
	function youtubeBerita($url){
		$url=explode("&",$url);
		$urlFinal=$url[0];
        return str_replace("watch?v=","embed/",$urlFinal);
	}


?>
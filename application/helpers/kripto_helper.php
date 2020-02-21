<?php 

function encrypt($data){
	$simple_string = $data;
	  
	// Store the cipher method 
	$ciphering = "AES-128-CTR"; 
	  
	// Use OpenSSl Encryption method 
	$iv_length = openssl_cipher_iv_length($ciphering); 
	$options = 0; 
	  
	// Non-NULL Initialization Vector for encryption 
	$encryption_iv = '1234567891011121'; 
	  
	// Store the encryption key 
	$encryption_key = "GeeksforGeeks"; 
	  
	// Use openssl_encrypt() function to encrypt the data 
	$encryption = openssl_encrypt($simple_string, $ciphering, 
	            $encryption_key, $options, $encryption_iv); 
  
}
function decrypt(){
	return 1;
}

?>
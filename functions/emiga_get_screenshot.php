<?php


		/* Rest 7 Api */


    $local_url=$server_address."/".$path;
    $start_get_screenshot = "http://api.rest7.com/v1/html_to_image.php?url=".$local_url."&format=png";
		/* Rest 7 Api */


	/*  File Transfer from Api 	   */	
    $client = curl_init($start_get_screenshot);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $get_link = curl_exec($client);
    $result = json_decode($get_link);
    $file_link = $result->file;
    /*  End File Transfer from Api */
 
    $my_save_dir =realpath($_SERVER["DOCUMENT_ROOT"]) .'/local-image/';
    $filename = md5($local_url).".png";
    $complete_save_loc = $my_save_dir . $filename;
    file_put_contents($complete_save_loc, file_get_contents($file_link));
    $safe_path_image=$server_address."/local-image/".$filename;



?>

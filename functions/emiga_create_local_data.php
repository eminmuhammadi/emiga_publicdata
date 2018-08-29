<?php

$md5_url=md5($url);
$date=date("Y/m/d");
$local_url_content = emiga_get_data("$url");
$block=" <!-- EmigaBOT blocked this object --> ";
$local_url_content1 = preg_replace('#<script(.*?)>(.*?)</script>#is', $block, $local_url_content);
$block_host="<head><style>img[alt=\"000webhost logo\"]{display:none;}img[alt=\"www.000webhost.com\"]{display:none;}	</style>";
$local_url_content = preg_replace('#<head>#is', $block_host, $local_url_content1);
$local_data = $md5_url.".html";
$path="local-data/".$local_data;
$get_local_html=$server_address."/".$path;
$local_path = fopen($path, 'w') or die("Sorry we are working to fix this now");
$data = "
<!-- 

				This website crawled by EmigaBOT and stored as 
			            data for using multi purposes 
	
						URL  : ".$url."
						DATE : ".$date."

-->
"
.$local_url_content;

fwrite($local_path, $data);

?>

<?php

/* https://whoapi.com/api/ */

$domain_checked=str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));
$domain_ip_check = file_get_contents("http://api.whoapi.com/?apikey=".$who_api_key."&r=ipwhois&domain=".$domain_checked."&ip=");
$domain_geo_check = file_get_contents("http://api.whoapi.com/?apikey=".$who_api_key."&r=geo&domain=".$domain_checked."&ip=");
$domain_cert_check = file_get_contents("http://api.whoapi.com/?apikey=".$who_api_key."&r=cert&domain=".$domain_checked."&ip=");
$domain_whois_check = file_get_contents("http://api.whoapi.com/?apikey=".$who_api_key."&r=whois&domain=".$domain_checked."&ip=");

$full_ip_check1=str_replace(",", " ,</br>", $domain_ip_check);
$full_ip_check2=str_replace("{", "{ </br>", $full_ip_check1);
$full_ip_check3=str_replace("\/", "/", $full_ip_check2);
$full_ip_check4=str_replace("[", "[ </br>", $full_ip_check3);
$full_ip_check5=str_replace("]", "</br> ]", $full_ip_check4);
$full_ip_check=str_replace("}", "</br> } ", $full_ip_check5);


$full_geo_check1=str_replace(",", ",</br>", $domain_geo_check);
$full_geo_check2=str_replace("{", "{ </br>", $full_geo_check1);
$full_geo_check3=str_replace("\/", "/", $full_geo_check2);
$full_geo_check4=str_replace("[", "[ </br>", $full_geo_check3);
$full_geo_check5=str_replace("]", "</br> ]", $full_geo_check4);
$full_geo_check=str_replace("}", "</br> } ", $full_geo_check5);

$full_cert_check1=str_replace(",", ",</br>", $domain_cert_check);
$full_cert_check2=str_replace("{", "{ </br>", $full_cert_check1);
$full_cert_check3=str_replace("\/", "/", $full_cert_check2);
$full_cert_check4=str_replace("[", "[ </br>", $full_cert_check3);
$full_cert_check5=str_replace("]", "</br> ]", $full_cert_check4);
$full_cert_check=str_replace("}", "</br>} ", $full_cert_check5);


$full_whois_check1=str_replace(",", ",</br>", $domain_whois_check);
$full_whois_check2=str_replace("{", "{ </br>", $full_whois_check1);
$full_whois_check3=str_replace("\/", "/", $full_whois_check2);
$full_whois_check4=str_replace("[", "[ </br>", $full_whois_check3);
$full_whois_check5=str_replace("]", "</br> ]", $full_whois_check4);
$full_whois_check=str_replace("}", "</br> } ", $full_whois_check5);



//// Create Json Database
///
///
////*
$local_data = $domain_checked.".json";
$path="json-data/".$local_data;
$local_path_json = fopen($path, 'w') or die("Sorry we are working to fix this now");
$data = 
"
$domain_ip_check

$domain_geo_check

$domain_cert_check

$domain_whois_check

";
fwrite($local_path_json, $data);
?>
<div class="questions container-fluid" id="data_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Service found this data for <?php echo $domain_checked ;?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cards-holder">
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques1">IP CHECKING FOR <?php echo $domain_checked;?> (click to open)</button>
                        </div>
                        <div id="ques1" class="collapse">
                            <div class="card-body answer-holder">
                                    <?php echo $full_ip_check;?>
                            </div>
                        </div>
                    </div>
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques2" class="collapsed">GEOLOCATION CHECKING FOR <?php echo $domain_checked;?> (click to open)</button>
                        </div>
                        <div id="ques2" class="collapse">
                            <div class="card-body answer-holder">
                                    <?php echo $full_geo_check;?>
                            </div>
                        </div>
                    </div>
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques3" class="collapsed">CERTIFICATE CHECKING FOR <?php echo $domain_checked;?> (click to open)</button>
                        </div>
                        <div id="ques3" class="collapse">
                            <div class="card-body answer-holder">
                                    <?php echo $full_cert_check;?>
                            </div>
                        </div>
                    </div>
                    <div class="card question-card">
                        <div class="card-header question-holder">
                            <button type="button" data-toggle="collapse" data-target="#ques4" class="collapsed">WHOIS CHECKING FOR <?php echo $domain_checked;?> (click to open)</button>
                        </div>
                        <div id="ques4" class="collapse">
                            <div class="card-body answer-holder">
                                    <?php echo $full_whois_check;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
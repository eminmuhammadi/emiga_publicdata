<?php
ini_set("display_errors",0);
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/config.php');
/*
 			Page Layout 
*/
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/head.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/menu.php');
?>
<div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                    <p><b>You can insert a domain too.<b></p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  /*  Search form */ ?>
<div class="search-row container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">          	
                <div class="search-question-holder">
<input id="search" class="search-input" type="text" placeholder="Insert ip address at there">
<button onclick="search()" id="btn_search" class="btn-search">
	<img src="<?php echo $secure_server_address?>/images/search.svg" alt="search-button"></button>
                </div>              
            </div>
        </div>
    </div>
</div>
<?php  /*  Url Testing  */ ?>
<script type="text/javascript">   
function search() {      
var query = document.getElementById('search').value;
if (query == "") {
alert("Are you seriously ??");
return false;
                  }
else  {	
location.href = '/ip-search?ip='+ query;
return false;
       }
                }
</script>
<?php
if(!empty($_GET['ip']))  {
$ip=$_GET['ip'];
if(!is_string($ip)){
echo "
<div class=\"features container-fluid\" style=\"background-color:#EAF2FE;\">
    <div class=\"container\">
        <div class=\"row rtl-row\">
            <div class=\"col-md-12\">
                <div class=\"feature-info\">
                    <div class=\"feature-title\">
                        <i class=\"fa fa-exclamation-triangle\"></i> You cannot do that !
                </div>
            </div>
 </div>
 </div>
  </div>
    </div>   
";
}
else {
$json_url = "http://ip-api.com/json/$ip";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);

$as=$data["as"];
$city=$data["city"];
$country=$data["country"];
$countryCode=$data["countryCode"];
$isp=$data["isp"];
$lat=$data["lat"];
$lon=$data["lon"];
$org=$data["org"];
$query=$data["query"];
$regionName=$data["regionName"];
$timezone=$data["timezone"];
$zip=$data["zip"];
if ($isp===null){
	$query="Enter valid ip address or domain";
}
echo "
<style type=\"text/css\">
@charset \"UTF-8\";.browser-top,.web img{border-top:1px solid #999}.browser-top,.web:before{-moz-border-radius-topleft:3px;-moz-border-radius-topright:3px}.browser-bottom,.web img{border-bottom:1px solid #999}.browser-bottom,.web:after{-moz-border-radius-bottomleft:3px;-moz-border-radius-bottomright:3px}*{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}.browser-bottom:after,.browser-bottom:before,.browser-top:after,.browser-top:before,.cf:after,.cf:before{content:\" \";display:table}.web:after,.web:before,img{display:block}.browser-bottom:after,.browser-top:after,.cf:after{clear:both}.wrapper{max-width:1000px;margin:0 auto;padding:1em}h1{font:24px/1.1 helvetica;font-weight:700}img{max-width:100%;height:auto!important}.centered{text-align:center}.web:before{content:\"● ● ●\";color:#999;text-align:left;font-size:1.5em;background:#ccc;padding:2px 8px 6px;-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-top-right-radius:3px;border-top-right-radius:3px}.web:after{content:\" \";background:#ccc;padding:8px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.web img{border-left:1px solid #ccc;border-right:1px solid #ccc;margin:0 auto}.browser-bottom,.browser-top{background:#fff;width:100%;border-right:1px solid #999;border-left:1px solid #999}.browser-top{padding:8px;-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-top-right-radius:3px;border-top-right-radius:3px}.browser-bottom{margin-top:-4px;padding:8px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.browser-btn{background:#999;width:10px;height:10px;float:left;margin-right:8px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}figcaption{padding-top:.5em;color:#666;font-style:italic}
</style>  
<div class=\"features container-fluid\" style=\"background-color:#EAF2FE;\">
    <div class=\"container\">
        <div class=\"row rtl-row\">
            <div class=\"col-sm-5\">  
<div class=\"wrapper\">
  <figure class=\"web\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\">
<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <div id=\"map\"></div>
    <script>
function initMap() {
  var uluru = {lat: $lat, lng: $lon};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=$google_map_api_key&callback=initMap\">
    </script>
  </figure>
</div>
            </div>
            <div class=\"col-sm-7\">
                <div class=\"feature-info\">
                    <div class=\"feature-title\">
                        $query
                </div>
                <div class=\"table-responsive\">
<table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Attribute</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AS</td>
        <td><b>$as</b></td>
      </tr>
     <tr>
        <td>CITY</td>
        <td><b>$city</b></td>
      </tr>
     <tr>
        <td>COUNTRY</td>
        <td><b>$country</b></td>
      </tr>   
     <tr>
        <td>COUNTRY CODE</td>
        <td><b>$countryCode</b></td>
      </tr>         
     <tr>
        <td>ISP</td>
        <td><b>$isp</b></td>
      </tr> 
     <tr>
        <td>REGION NAME</td>
        <td><b>$regionName</b></td>
      </tr> 
     <tr>
        <td>ORGANIZATION</td>
        <td><b>$org</b></td>
      </tr> 
     <tr>
        <td>TIMEZONE</td>
        <td><b>$timezone</b></td>
      </tr> 
     <tr>
        <td>ZIP</td>
        <td><b>$zip</b></td>
      </tr>                                           
    </tbody>
  </table>
  </div>
            </div>
 </div>
 </div>
  </div>
    </div>    
";
}
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/services.php');
}//end if
else
{ 
$client_ip=$_SERVER['REMOTE_ADDR'];
$json_url = "http://ip-api.com/json/$client_ip";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
$as=$data["as"];
$city=$data["city"];
$country=$data["country"];
$countryCode=$data["countryCode"];
$isp=$data["isp"];
$lat=$data["lat"];
$lon=$data["lon"];
$org=$data["org"];
$query=$data["query"];
$regionName=$data["regionName"];
$timezone=$data["timezone"];
$zip=$data["zip"];
echo "
<style type=\"text/css\">
@charset \"UTF-8\";.browser-top,.web img{border-top:1px solid #999}.browser-top,.web:before{-moz-border-radius-topleft:3px;-moz-border-radius-topright:3px}.browser-bottom,.web img{border-bottom:1px solid #999}.browser-bottom,.web:after{-moz-border-radius-bottomleft:3px;-moz-border-radius-bottomright:3px}*{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}.browser-bottom:after,.browser-bottom:before,.browser-top:after,.browser-top:before,.cf:after,.cf:before{content:\" \";display:table}.web:after,.web:before,img{display:block}.browser-bottom:after,.browser-top:after,.cf:after{clear:both}.wrapper{max-width:1000px;margin:0 auto;padding:1em}h1{font:24px/1.1 helvetica;font-weight:700}img{max-width:100%;height:auto!important}.centered{text-align:center}.web:before{content:\"● ● ●\";color:#999;text-align:left;font-size:1.5em;background:#ccc;padding:2px 8px 6px;-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-top-right-radius:3px;border-top-right-radius:3px}.web:after{content:\" \";background:#ccc;padding:8px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.web img{border-left:1px solid #ccc;border-right:1px solid #ccc;margin:0 auto}.browser-bottom,.browser-top{background:#fff;width:100%;border-right:1px solid #999;border-left:1px solid #999}.browser-top{padding:8px;-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-top-right-radius:3px;border-top-right-radius:3px}.browser-bottom{margin-top:-4px;padding:8px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.browser-btn{background:#999;width:10px;height:10px;float:left;margin-right:8px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}figcaption{padding-top:.5em;color:#666;font-style:italic}
</style>  
<div class=\"features container-fluid\" style=\"background-color:#EAF2FE;\">
    <div class=\"container\">
        <div class=\"row rtl-row\">
            <div class=\"col-sm-5\">  
<div class=\"wrapper\">
  <figure class=\"web\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\">
<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <div id=\"map\"></div>
    <script>
function initMap() {
  var uluru = {lat: $lat, lng: $lon};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=$google_map_api_key&callback=initMap\">
    </script>
  </figure>
</div>
            </div>
            <div class=\"col-sm-7\">
                <div class=\"feature-info\">
                    <div class=\"feature-title\">
                        $query
                </div>
                <div class\"table-responsive\">
<table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Attribute</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AS</td>
        <td><b>$as</b></td>
      </tr>
     <tr>
        <td>CITY</td>
        <td><b>$city</b></td>
      </tr>
     <tr>
        <td>COUNTRY</td>
        <td><b>$country</b></td>
      </tr>   
     <tr>
        <td>COUNTRY CODE</td>
        <td><b>$countryCode</b></td>
      </tr>         
     <tr>
        <td>ISP</td>
        <td><b>$isp</b></td>
      </tr> 
     <tr>
        <td>REGION NAME</td>
        <td><b>$regionName</b></td>
      </tr> 
     <tr>
        <td>ORGANIZATION</td>
        <td><b>$org</b></td>
      </tr> 
     <tr>
        <td>TIMEZONE</td>
        <td><b>$timezone</b></td>
      </tr> 
     <tr>
        <td>ZIP</td>
        <td><b>$zip</b></td>
      </tr>                                           
    </tbody>
  </table>
            </div></div>
 </div>
 </div>
  </div>
    </div>    
";
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/services.php');
}
?>
<div class="support-links container-fluid" style="margin-top:-20px;">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="images/info.svg" alt=""></div>
                <a href="<?php echo $server_address;?>/privacy" class="link">Privacy Policy</a>
                <div class="text">Check our Privacy Policy</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="images/server3.svg" alt=""></div>
                <a href="<?php echo $server_address;?>/data" class="link">Data Policy</a>
                <div class="text">Check our Data Policy</div>
            </div>
        </div>
    </div>
</div>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/foot.php');
?>

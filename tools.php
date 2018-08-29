<?php
ini_set("display_errors",0);
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/config.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/functions/emiga_crawler.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/functions/emiga_get_data.php');

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
                    <p><b>Check all data which our service found.<b></p>   
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
<input id="search" class="search-input" type="url" placeholder="Insert url at there">
<button onclick="search()" id="btn_search" class="btn-search">
	<img src="images/search.svg" alt="search-button"></button>
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
if (!/^(f|ht)tps?:\/\//i.test(query)) 
{query = "http://" + query;}	
location.href = '/tools?url='+ query;
return false;
       }
                }
</script>
<?php
if(!empty($_GET['url']))  {
$url=$_GET['url'];
if(!is_string($url)){
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
$domain=parse_url($url);
$domain=$domain['host'];
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/functions/emiga_create_local_data.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/functions/emiga_get_screenshot.php');
$crawl_url = emiga_crawler("$url");
$doc = new DOMDocument();
@$doc->loadHTML($crawl_url);
$nodes = $doc->getElementsByTagName('title');
$title = $nodes->item(0)->nodeValue;
$all_meta = $doc->getElementsByTagName('meta');
$all_link = $doc->getElementsByTagName('link');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/functions/emiga_search.php');

/* Main Search result */
 
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/result.php');
}
}//end if
else
{ 
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/information.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/services.php');
}
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/foot.php');
?>
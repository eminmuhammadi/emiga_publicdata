<?php
ini_set("display_errors",0);
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/config.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/head.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/menu.php');
?>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="<?php echo $secure_server_address ?>/images/slide-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">SEO for<br>every website</div>
                                    <a href="<?php echo $server_address."/tools";?>" class="hbtn hbtn-primary hbtn-lg">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="<?php echo $secure_server_address ?>/images/slide-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">WHOIS DOMAIN & IP INFORMATION<br>checking</div>
                                    <a href="<?php echo $server_address."/tools";?>" class="hbtn hbtn-primary hbtn-lg">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="<?php echo $secure_server_address ?>/images/slide-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Get data for <br>any domain</div>
                                    <a href="<?php echo $server_address."/tools";?>" class="hbtn hbtn-primary hbtn-lg">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/services.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/information.php');
?>
<?php  /*  Search form */ ?>
<div class="search-row container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">          	
                <div class="search-question-holder">
<input id="search" class="search-input" type="url" placeholder="Insert url at there">
<button onclick="search()" id="btn_search" class="btn-search">
    <img src="<?php echo $secure_server_address ?>/images/search.svg" alt="search-button"></button>
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
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/foot.php');


?>
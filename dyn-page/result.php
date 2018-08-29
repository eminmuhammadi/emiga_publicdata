<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) {
   document.querySelectorAll('img').forEach(function(img){
  	img.onerror = function(){this.style.display='none';};
   })
});	
</script>
<div class="features container-fluid" style="background-color:#EAF2FE;">
    <div class="container">
        <div class="row rtl-row">
            <div class="col-sm-5">
<style type="text/css">
@charset "UTF-8";.browser-top,.web img{border-top:1px solid #999}.browser-top,.web:before{-moz-border-radius-topleft:3px;-moz-border-radius-topright:3px}.browser-bottom,.web img{border-bottom:1px solid #999}.browser-bottom,.web:after{-moz-border-radius-bottomleft:3px;-moz-border-radius-bottomright:3px}*{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}.browser-bottom:after,.browser-bottom:before,.browser-top:after,.browser-top:before,.cf:after,.cf:before{content:" ";display:table}.web:after,.web:before,img{display:block}.browser-bottom:after,.browser-top:after,.cf:after{clear:both}.wrapper{max-width:1000px;margin:0 auto;padding:1em}h1{font:24px/1.1 helvetica;font-weight:700}img{max-width:100%;height:auto!important}.centered{text-align:center}.web:before{content:"● ● ●";color:#999;text-align:left;font-size:1.5em;background:#ccc;padding:2px 8px 6px;-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-top-right-radius:3px;border-top-right-radius:3px}.web:after{content:" ";background:#ccc;padding:8px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.web img{border-left:1px solid #ccc;border-right:1px solid #ccc;margin:0 auto}.browser-bottom,.browser-top{background:#fff;width:100%;border-right:1px solid #999;border-left:1px solid #999}.browser-top{padding:8px;-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-top-right-radius:3px;border-top-right-radius:3px}.browser-bottom{margin-top:-4px;padding:8px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px}.browser-btn{background:#999;width:10px;height:10px;float:left;margin-right:8px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}figcaption{padding-top:.5em;color:#666;font-style:italic}
</style>        
<div class="wrapper">
  <figure class="web" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <a href="<?php echo $safe_path_image;?> "><img src="<?php echo $safe_path_image;?>"></a>
  </figure>
</div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">
                    <?php echo $title;?></div>
                    <div class="feature-text">
                    <?php echo $description;?>
                    </br>
                    <small><?php echo $keywords;?></small>
                    </div>
                    <div class="feature-link">
                    <a href="<?php echo $get_local_html;?>" class="hbtn hbtn-default">View a Stored Page</a></div>
                    <a href="#data_section" class="hbtn hbtn-primary">View a Stored Data as JSON</a></div>
                </div>
            </div>
<div class="questions container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="cards-holder">
                            
                <div class="col-md-4">
<div class="card-header" style="background-color:white;padding:8px;text-align: center;border-bottom: 1px solid #f3f3f3;">
<span style="font-size: 25px;"><span style="color:#0057e7;"><b>G</b></span><span style="color:#d62d20;"><b>o</b></span><span style="color:#ffa700;"><b>o</b></span><span style="color:#0057e7;"><b>g</b></span><span style="color:#008744;"><b>l</b></span><span style="color:#d62d20;"><b>e</b></span></span>
</div>                      
<div class="card" style="background-color: white;padding: 10px;">    
<div class="card-body">
<h5 class="card-title" style="color:#0057e7;"><?php echo $title;?></h5>
<div class="card-header">
<p style="color:green;"><?php echo $domain;?></p>
</div>
<p class="card-text"><?php echo "$description";?></p>
</div>
</div>
<div class="card-header hylink-box" style="background-color:white;padding:8px;text-align: center;border-top: 1px solid #f3f3f3;">
<a target="_blank" href="https://www.google.com/search?q=site:<?php echo $url;?>" class="link">See full result</a>
</div> 
</div>
<div class="col-md-4">
								<!-- TWITTER -->
<div class="card-header" style="background-color: #1DA1F2;padding:8px;text-align: center;">
<i style="color:white;font-size: 25px;" class="fa fa-twitter"></i>
</div>               
<div class="card" style="background-color: white;padding: 10px;">   
<img class="card-img-top" src="<?php echo $twitter_image;?>">
<div class="card-block">
<p class="card-text"><small class="text-muted"><?php echo $twitter_site;?></small></p>  
<h4 class="card-title"><?php echo $twitter_title;?></h4>
<p class="card-text"><?php echo $twitter_description;?></p>
<small><?php  echo $domain;?></small>
</div>
</div>
<div class="card-header hylink-box" style="background-color:white;padding:8px;text-align: center;border-top: 1px solid #f3f3f3;">
<a target="_blank" href="https://cards-dev.twitter.com/validator" class="link">Card Validator</a>
</div>
</div>
<div class="col-md-4">
<div class="card-header" style="color:white;background-color: #3b5998;padding:8px;text-align: center;">
<i style="color:white;font-size: 25px;" class="fa fa-facebook-f"></i>
</div>      
<!-- FACEBOOK -->                
<div class="card" style="background-color: white;padding: 10px;">   
<img class="card-img-top" src="<?php echo $og_image;?>" alt="<?php echo $og_image_alt;?>">
<div class="card-block">
<p class="card-text"><small class="text-muted" style="text-transform: uppercase;"><?php echo $domain;?></small></p>  
<h4 class="card-title"><?php echo $og_title;?></h4>
<p class="card-text"><?php echo $og_description;?></p>
</div>
</div>
<div class="card-header hylink-box" style="background-color:white;padding:8px;text-align: center;border-top: 1px solid #f3f3f3;">
<a target="_blank" href="https://developers.facebook.com/tools/debug/sharing/?q=<?php echo $url;?>" class="link">Debug Sharing</a>
</div> 
</div>

</div>
</div>

</div>
</div>
</div>
</div>
<div class="domain-pricing container-fluid" style="margin-top:-100px;text-align:left;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hstb-pricing-table-holder">
                    <div class="hstb-table">
                        <div class="row thead">
                            <div class="col-xs-2 th">ATTRIBUTE</div>
                            <div class="col-xs-10 th">DATA</div>
                        </div>
<!-- NAME -->
                        <div class="row trow"<?php if (empty($title)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TITLE</div>
                            <div class="col-xs-10 td"><?php echo $title;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($canonical)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">CANONICAL</div>
                            <div class="col-xs-10 td"><?php echo $canonical;?></div>
                        </div>                                                
                        <div class="row trow"<?php if (empty($description)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">DESCRIPTION</div>
                            <div class="col-xs-10 td"><?php echo $description;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($keywords)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">KEYWORDS</div>
                            <div class="col-xs-10 td"><?php echo $keywords;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($viewport)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">VIEWPORT</div>
                            <div class="col-xs-10 td"><?php echo $viewport;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($icon)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ICON</div>
                            <div class="col-xs-10 td"><?php echo $icon;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($robots)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ROBOTS</div>
                            <div class="col-xs-10 td"><?php echo $robots;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($geo_position)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">GEO:POSITION</div>
                            <div class="col-xs-10 td"><?php echo $geo_position;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($geo_placename)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">GEO:PLACENAME</div>
                            <div class="col-xs-10 td"><?php echo $geo_placename;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($geo_region)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">GEO:REGION</div>
                            <div class="col-xs-10 td"><?php echo $geo_region;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($author)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">AUTHOR</div>
                            <div class="col-xs-10 td"><?php echo $author;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($refresh)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">REFRESH</div>
                            <div class="col-xs-10 td"><?php echo $refresh;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($generator)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">GENERATOR</div>
                            <div class="col-xs-10 td"><?php echo $generator;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($date_tag)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">DATE</div>
                            <div class="col-xs-10 td"><?php echo $date_tag;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($identifier)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">IDENTIFIER</div>
                            <div class="col-xs-10 td"><?php echo $identifier;?></div>
                        </div>
<!-- OPEN GRAPH PROTOCOL -->
                        <div class="row trow"<?php if (empty($og_locale)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:LOCALE</div>
                            <div class="col-xs-10 td"><?php echo $og_locale;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_type)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:TYPE</div>
                            <div class="col-xs-10 td"><?php echo $og_type;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_title)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:TITLE</div>
                            <div class="col-xs-10 td"><?php echo $og_title;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_description)){echo "style='display:none;'";}?>">
                            <div class="col-xs-2 td">OG:DESCRIPTION</div>
                            <div class="col-xs-10 td"><?php echo $og_description;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_url)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:URL</div>
                            <div class="col-xs-10 td"><?php echo $og_url;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_site_name)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:SITE_NAME</div>
                            <div class="col-xs-10 td"><?php echo $og_site_name;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_image)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:IMAGE</div>
                            <div class="col-xs-10 td"><?php echo $og_image;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_image_secure_url)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:IMAGE:SECURE_URL</div>
                            <div class="col-xs-10 td"><?php echo $og_image_secure_url;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_image_width)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:IMAGE:WIDTH</div>
                            <div class="col-xs-10 td"><?php echo $og_image_width;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_image_height)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:IMAGE:HEIGHT</div>
                            <div class="col-xs-10 td"><?php echo $og_image_height;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($og_image_alt)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">OG:IMAGE:ALT</div>
                            <div class="col-xs-10 td"><?php echo $og_image_alt;?></div>
                        </div>
<!-- OPEN GRAPH ARTICLE -->
                        <div class="row trow"<?php if (empty($article_publisher)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ARTICLE:PUBLISHER</div>
                            <div class="col-xs-10 td"><?php echo $article_publisher;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($article_author)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ARTICLE:AUTHOR</div>
                            <div class="col-xs-10 td"><?php echo $article_author;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($article_tag)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ARTICLE:TAG</div>
                            <div class="col-xs-10 td"><?php echo $article_tag;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($article_section)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ARTICLE:SECTION</div>
                            <div class="col-xs-10 td"><?php echo $article_section;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($article_published_time)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ARTICLE:PUBLISHED_TIME</div>
                            <div class="col-xs-10 td"><?php echo $article_published_time;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($article_updated_time)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">ARTICLE:UPDATED_TIME</div>
                            <div class="col-xs-10 td"><?php echo $article_updated_time;?></div>
                        </div>
<!-- TWITTER CARD -->
                        <div class="row trow"<?php if (empty($twitter_card)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TWITTER:CARD</div>
                            <div class="col-xs-10 td"><?php echo $twitter_card;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($twitter_description)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TWITTER:DESCRIPTION</div>
                            <div class="col-xs-10 td"><?php echo $twitter_description;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($twitter_title)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TWITTER:TITLE</div>
                            <div class="col-xs-10 td"><?php echo $twitter_title;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($twitter_site)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TWITTER:SITE</div>
                            <div class="col-xs-10 td"><?php echo $twitter_site;?></div>
                        </div>

                        <div class="row trow"<?php if (empty($twitter_image)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TWITTER:IMAGE</div>
                            <div class="col-xs-10 td"><?php echo $twitter_image;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($twitter_creator)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">TWITTER:CREATOR</div>
                            <div class="col-xs-10 td"><?php echo $twitter_creator;?></div>
                        </div>
<!-- HTTP EQUIV -->
                        <div class="row trow"<?php if (empty($content_type)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">CONTENT-TYPE</div>
                            <div class="col-xs-10 td"><?php echo $content_type;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($default_style)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">DEFAULT-STYLE</div>
                            <div class="col-xs-10 td"><?php echo $default_style;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($X_UA_Comptible)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">X-UA-Compatible</div>
                            <div class="col-xs-10 td"><?php echo $X_UA_Comptible;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($refresh)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">REFRESH</div>
                            <div class="col-xs-10 td"><?php echo $refresh;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($cache_control)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">CACHE-CONTROL</div>
                            <div class="col-xs-10 td"><?php echo $cache_control;?></div>
                        </div>
                        <div class="row trow"<?php if (empty($pragma)){echo "style='display:none;'";}?>>
                            <div class="col-xs-2 td">PRAGMA</div>
                            <div class="col-xs-10 td"><?php echo $pragma;?></div>
                        </div>
                    </div>
                </div>
<div class="container">
</br>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="dfeature-box">
                    <div class="icon"><i class="hstb hstb-settings"></i></div>
                    <div class="title">
					<a target="_blank" 
					href="https://search.google.com/structured-data/testing-tool/u/0/" 
					class="link">Stuctured Data Testing Tool</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="dfeature-box">
                    <div class="icon"><i class="hstb hstb-two-circling-arrows"></i></div>
                    <div class="title">
					<a target="_blank" 
					href="https://developers.google.com/search/docs/guides/intro-structured-data" 
					class="link">Introduction to Structured Data</a>
                    </div>                    
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="dfeature-box">
                    <div class="icon"><i class="hstb hstb-lock"></i></div>
                    <div class="title">
					<a target="_blank" 
					href="https://developers.google.com/search/docs/guides/sd-policies" 
					class="link">Structured Data General Guidelines</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>                
            </div>
        </div>
    </div>
</div>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/functions/emiga_other_api.php'); ?>
<div class="support-links container-fluid" style="margin-top:-20px;">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="<?php echo $secure_server_address ?>/images/info.svg" alt=""></div>
                <a href="<?php echo $server_address;?>/privacy" class="link">Privacy Policy</a>
                <div class="text">Check our Privacy Policy</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="<?php echo $secure_server_address ?>/images/server3.svg" alt=""></div>
                <a href="<?php echo $server_address;?>/data" class="link">Data Policy</a>
                <div class="text">Check our Data Policy</div>
            </div>
        </div>
    </div>
</div>	

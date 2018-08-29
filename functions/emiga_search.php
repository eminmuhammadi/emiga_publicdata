<?php

for ($i = 0; $i < $all_link->length; $i++)
{
$link = $all_link->item($i);
if($link->getAttribute('rel') == 'canonical') 	
{$canonical     = $link->getAttribute('href');}
if($link->getAttribute('rel') == 'icon') 	
{$icon          = $link->getAttribute('href');}
}//end for link



for ($i = 0; $i < $all_meta->length; $i++)
{
$meta = $all_meta->item($i);
//------------------ name
if($meta->getAttribute('name') == 'description') 	
{$description 	= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'keywords') 
{$keywords 	 	= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'viewport') 
{$viewport 		= $meta->getAttribute('content');}	
if($meta->getAttribute('name') == 'robots') 
{$robots 	 	= $meta->getAttribute('content');}	
if($meta->getAttribute('name') == 'geo.position') 
{$geo_position 	= $meta->getAttribute('content');}	
if($meta->getAttribute('name') == 'geo.placename') 
{$geo_placename = $meta->getAttribute('content');}	
if($meta->getAttribute('name') == 'geo.region') 
{$geo_region 	= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'author') 
{$author 	 	= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'refresh') 
{$refresh 	 	= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'generator') 
{$generator 	= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'date') 
{$date_tag 	 		= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'identifier') 
{$identifier 	 		= $meta->getAttribute('content');}
//--------------- http-equiv
if($meta->getAttribute('http-equiv') == 'content-type') 
{$content_type 	= $meta->getAttribute('content');}	
if($meta->getAttribute('http-equiv') == 'default-style') 
{$default_style = $meta->getAttribute('content');}	
if($meta->getAttribute('http-equiv') == 'refresh') 
{$http_refresh 	= $meta->getAttribute('content');}
if($meta->getAttribute('http-equiv') == 'X-UA-Compatible') 
{$X_UA_Comptible= $meta->getAttribute('content');}	
if($meta->getAttribute('http-equiv') == 'cache-control') 
{$cache_control = $meta->getAttribute('content');}	
if($meta->getAttribute('http-equiv') == 'pragma') 
{$pragma        = $meta->getAttribute('content');}	
//--------------- open graph protocol
if($meta->getAttribute('property') == 'og:locale') 
{$og_locale     = $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:type') 
{$og_type       = $meta->getAttribute('content');}

//if article
if($meta->getAttribute('property') == 'article:publisher') 
{$article_publisher            = $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'article:author') 
{$article_author               = $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'article:tag') 
{$article_tag                  = $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'article:section') 
{$article_section              = $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'article:published_time') 
{$article_published_time       = $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'og:updated_time') 
{$article_updated_time         = $meta->getAttribute('content');}

if($meta->getAttribute('property') == 'og:title') 
{$og_title      = $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:description') 
{$og_description= $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:url') 
{$og_url        = $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:site_name') 
{$og_site_name  = $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:image') 
{$og_image      = $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:image:secure_url') 
{$og_image_secure_url= $meta->getAttribute('content');}	
if($meta->getAttribute('property') == 'og:image:width') 
{$og_image_width = $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'og:image:height') 
{$og_image_height= $meta->getAttribute('content');}
if($meta->getAttribute('property') == 'og:image:alt') 
{$og_image_alt   = $meta->getAttribute('content');}
//--------------- Twitter Card
if($meta->getAttribute('name') == 'twitter:card') 
{$twitter_card   = $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'twitter:description') 
{$twitter_description= $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'twitter:title') 
{$twitter_title  = $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'twitter:site') 
{$twitter_site   = $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'twitter:image') 
{$twitter_image  = $meta->getAttribute('content');}
if($meta->getAttribute('name') == 'twitter_creator') 
{$twitter_creator= $meta->getAttribute('content');}
}//end for meta




?>
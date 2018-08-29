<!doctype html prefix="og: http://ogp.me/ns#">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
    $index=basename($_SERVER["SCRIPT_FILENAME"], '.php') ;
    $website_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $headline="Public Data &mdash; Get public data of any website";
    $tools="Tools | ".$headline;
    $data="Data Policy | ".$headline;
    $privacy="Privacy Policy | ".$headline;
    $list="Scanned websites | ".$headline;
    $list2="Scanned domains | ".$headline;
    $ip_search="Search ip address information (Geolocation) | ".$headline;
    if ($index=="tools")      {
        echo $tools;
        $w_title=$tools;
    }
    else if ($index=="index") {
        echo $headline;
        $w_title=$headline;
    }
    else if ($index=="data")  {
        echo $data;
        $w_title=$data;
    }
    else if ($index=="privacy"){
        echo $privacy;
        $w_title=$privacy;
    }
    else if ($index=="list"){
        echo $list;
        $w_title=$list;
    }
    else if ($index=="list2"){
        echo $list2;
        $w_title=$list2;
    }
    else if ($index=="ip-search"){
        echo $ip_search;
        $w_title=$ip_search;
    }
    ?>
    </title>
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/slick.css">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $secure_server_address ?>/static/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $secure_server_address ?>/static/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $secure_server_address ?>/static/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $secure_server_address ?>/static/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $secure_server_address ?>/static/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $secure_server_address ?>/static/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo $secure_server_address ?>/static/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="<?php echo $website_link;?>" />
    <meta name="description" content="Public Data free tool for scan any website and get scanned data for public purposes.SEO optimization , Whois Domain scanner , Ip scanner , Geolocation scanner for public users.Check our all service and enjoy .">
    <meta name="keywords" content="publicdata , publicdatacheck , public data digger , publicdata reviews , publicdata check ,  publicdata digger , publicdata entry , free publicdata , no trial public data">
    <meta name="robots" content="all">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="AZ" />
    <meta name="geo.placename" content="Baku" />
    <meta name="geo.position" content="40.409262;49.867092" />
    <meta name="ICBM" content="40.409262, 49.867092" />

    <meta name="author" content="Emin Mühəmmədi">
    <meta name="date" content="<?php echo date("d-m-y");?>">

    <meta property="og:locale" content="en_GB">
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $w_title;?>">
    <meta property="og:description" content="Public Data free tool for scan any website and get scanned data for public purposes.SEO optimization , Whois Domain scanner , Ip scanner , Geolocation scanner for public users.Check our all service and enjoy .">
    <meta property="og:url" content="<?php echo $website_link;?>">
    <meta property="og:site_name" content="Public Data">
    <meta property="og:image" content="<?php echo $secure_server_address ?>/images/publicdata_large.png">
    <meta property="og:image:alt" content="<?php echo $headline;?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Public Data free tool for scan any website and get scanned data for public purposes.SEO optimization , Whois Domain scanner , Ip scanner , Geolocation scanner for public users.Check our all service and enjoy .">
    <meta name="twitter:title" content="<?php echo $w_title;?>">
    <meta name="twitter:image" content="<?php echo $secure_server_address ?>/images/publicdata_large.png">
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ganalytics ;?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $ganalytics ;?>');
</script>
<script type="text/javascript">$('a[href^="#"]').on('click', function(event) {var target = $(this.getAttribute('href'));if( target.length ) {event.preventDefault();$('html, body').stop().animate({scrollTop: target.offset().top}, 1000);}});	
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "<?php echo $adsense ;?>",
    enable_page_level_ads: true
  });
</script>
<style type="text/css">
img[alt="000webhost logo"]{display:none;}
img[alt="www.000webhost.com"]{display:none;}	
</style>
<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Website",
        "headline": "<?php echo $w_title;?>",
        "datePublished": "<?php echo date("d-m-y");?>",
        "image": [
          "<?php echo $secure_server_address ?>/static/fav/favicon-96x96.png"
        ]
      }
</script>
</head>
<body>
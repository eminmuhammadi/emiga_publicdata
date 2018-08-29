<?php
ini_set("display_errors",0);
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/config.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/head.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/menu.php');
?>
<div id="top-content" class="container-fluid">
	<div class="container"><div class="row">
		<div class="col-sm-12"><div class="page-title">Public Scanned Websites</div>
		<div class="text" style="color:white;">
			Our service scanned <b><?php $dir_local_data = realpath($_SERVER["DOCUMENT_ROOT"])  .'/json-data/';$filecount = 0;$files = glob($dir_local_data . "*");if ($files){$filecount = count($files);}echo $filecount;?></b> domain and stored  <b> <?php $dir_local_image = realpath($_SERVER["DOCUMENT_ROOT"])  .'/cache/';$filecount = 0;$files = glob($dir_local_image . "*");if ($files){$filecount = count($files);}echo $filecount;?></b> caches. (All files stored as data for using multi purposes)
		</div>
	</div>
</div>
</div>
</div>
</div>
<div class="plain-content container-fluid">
	<div class="container"><div class="row">
		<div class="content-holder"><div class="col-md-6">
			<h4> Domains Public Data (JSON)</h4>
			<ol reversed class="list-group list-group-flush">
<?php
$directory = realpath($_SERVER["DOCUMENT_ROOT"])  .'/json-data/';
$phpfiles = glob($directory . "*.json");
foreach($phpfiles as $phpfile)
{
$basename=basename($phpfile);
echo "<li class=\"list-group-item text\" ><a href=$server_address/json-data/$basename rel=\"all\" >".substr(basename($phpfile),0,26)."</a></li>";
}
?></ol></div>
<div class="col-md-6"><h4> Our Website Cached Public Data (HTML)</h4>
	<ol  reversed class="list-group list-group-flush">
<?php
$dir = realpath($_SERVER["DOCUMENT_ROOT"])  .'/cache/';
$files = glob($dir . "*.html");
foreach($files as $file)
{
$basefile=basename($file);
echo "<li class=\"list-group-item\" ><a href=$server_address/cache/$basefile rel=\"all\">".substr(basename($file),0,26).".html</a></li>";
}
?></ol></div></div></div></div></div>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/dyn-page/foot.php');
?>

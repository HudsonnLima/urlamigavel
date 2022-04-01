
<?php
$geturl = explode("/", $_GET['url'] ?? 'home');
	
if(file_exists("pages/{$geturl[0]}.php")){
	include "pages/{$geturl[0]}.php";
}else{
	include "pages/404.php";
}
?>

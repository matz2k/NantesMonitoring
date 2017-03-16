<?php
//PING servers
$fp = fsockopen('www.google.fr', 80, $errno, $errstr, 30);

if(!$fp){
	echo $errstr;
}else{
	echo "Connexion Success";
}

?>
<?php
//PING servers
//die('bite');
if(PHP_OS == 'Linux'){
	exec('ping www.google.fr -c 2', $output);
}else{
	exec('ping www.google.fr', $output);
}
echo "Destination : ".$output[0].'<br/>';
echo "Stats : ".$output[1].'<br/>';
echo "Packets : ".$output[4].'<br/>';
echo "Time : ".$output[5].'<br/>';
//index
/*echo count($output).'<br/>';
for($i=0; $i<count($output); $i++){
	echo $output[$i].$i.'<br/>';
}
*/
?>
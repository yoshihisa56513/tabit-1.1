<?php 
$string = '<iframe width="560" height="315" src="//www.youtube.com/embed/wAlwCRk9hj0?rel=0" frameborder="0" allowfullscreen></iframe>';

$youtubeId = "";
	
echo $string;

preg_replace("/www.youtube.com\/embed\/([-_0-1a-zA-Z]+)?.*/","$youtubeId",$embedUrl);
	
echo $youtubeId;


?>
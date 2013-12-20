<?php
$protocolo    = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http' : 'https';
 
$host         = $_SERVER['HTTP_HOST'];
$script       = $_SERVER['SCRIPT_NAME'];
$way     = $protocolo . '://' . $host . $script;
$part = explode('/',$way);
 
$url =  $part[0].$part[1].'//'.$part[2]."/portfolio/";
?>
<?php
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"OSDI-API-Token: [put your action network api key here, and remove the square brackets]\r\n" 
             
  )
);
$context = stream_context_create($opts);
// Open the file using the HTTP headers set above
$file = file_get_contents('https://actionnetwork.org/api/v2/events/', false, $context);
echo $file;
?>
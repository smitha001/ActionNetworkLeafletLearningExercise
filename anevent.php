    <?php  require_once $_SERVER['DOCUMENT_ROOT'].'/users/init.php'; ?>
    <?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>    
<?php
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"OSDI-API-Token: d3345c20597af901f3002b1d3bbe4026\r\n" 
             
  )
);
$context = stream_context_create($opts);



// Recommend editing in 'https://actionnetwork.org/api/v2/event_campaigns/????????/events' in the line below, where ???????? is the campaign you are using...
$file = file_get_contents('https://actionnetwork.org/api/v2/events/', false, $context);
echo $file;
?>
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html; charset=UTF-8');
  
 
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents("https://dbill.pitc.com.pk/hescobill/general?refno=08371540641003", false, stream_context_create($arrContextOptions));
echo $response; 
$label = "click here";
echo "<button>".$label."</button>";
?>

<?php require "components/db_connect.php"; 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');

$method = $_SERVER["REQUEST_METHOD"];
if($method = "POST"){ 
     header('HTTP/1.1 200');
     header("Content-Type: application/json");
     echo json_encode([ "stat" => "ok]);

  } 
?>

<?php
header("Content-Type: application/json");

$data = array(
    "status" => "success",
    "message" => "Hello from JSON response!"
);


echo json_encode($data);
?>

<?php
$myObj = new stdClass();
$myObj->name = "Khailila Rayhana Ryaza";
$myObj->age = 19;
$myObj->city = "Surabaya";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
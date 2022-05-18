<?php
$jsonobj = '"Khailila":19,"Tarangga":20,"Daryl":6';

$arr = json_decode($jsonobj, true);

echo $arr["Khailila"];
echo $arr["Tarangga"];
echo $arr["Daryl"];
?>
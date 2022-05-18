<?php
$jsonobj = '"Khailila":19,"Tarangga":20,"Daryl":6';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
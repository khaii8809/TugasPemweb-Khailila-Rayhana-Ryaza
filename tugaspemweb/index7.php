<?php
$jsonobj = '"Khailila":19,"Tarangga":20,"Daryl":6';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
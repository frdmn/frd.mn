<?php

$info_file = file_get_contents("data/info.json");
$info_json = json_decode($info_file, true);


$info = $info_json['information'];
$projects = $info_json['projects'];

?>

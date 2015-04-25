<?php

$info_file = file_get_contents("data/info.json");
$github_file = file_get_contents("data/github.json");

$info_json = json_decode($info_file, true);
$github_json = json_decode($github_file, true);

$info = $info_json['information'];
$projects = $info_json['projects'];
$github = $github_json['projects'];

?>

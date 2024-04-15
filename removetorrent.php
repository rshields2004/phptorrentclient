<?php

$id = $_GET["id"];

$command = "transmission-remote -t " . $id . " -r";
$output;

exec($command, $output);

echo json_encode($output);

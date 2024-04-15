<?php

$m = $_GET["m"];

$command = "transmission-remote -a " . $m;
$output;

exec($command, $output);

echo json_encode($output);

<?php

$command = "transmission-remote -l";
$output;

exec($command, $output);


echo json_encode($output);


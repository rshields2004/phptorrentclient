<?php

$command = "systemctl is-active transmission-daemon";
$output;

exec($command, $output);


echo json_encode($output);


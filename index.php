<?php

$data = json_encode($_REQUEST);
$input = file_get_contents('php://input');
echo "\n___ payload json raw___ ". PHP_EOL;
print($input);
print($data);
file_put_contents('payload.json',$input."\n", FILE_APPEND);
file_put_contents('request.json',$data."\n", FILE_APPEND);
echo "\n___ payload json parsed__ ". PHP_EOL;

print_r(json_decode($input));

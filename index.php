<?php

$data = json_encode($_REQUEST);
$input = file_get_contents('php://input');
echo "\n___ payload json raw___ ". PHP_EOL;
print($input);
print($data);
$decoded = json_decode($data);
file_put_contents('payload.json',$input."\n"."Incomming message decoded: ".base64_decode($decoded->message->data));
file_put_contents('request.json',$data."\n", FILE_APPEND);
echo "\n___ payload json parsed__ ". PHP_EOL;

print_r(json_decode($input));

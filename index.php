<?php

$input = file_get_contents('php://input');
$decoded = json_decode($input);
file_put_contents('payload.json',$input."\n"."Incomming message decoded: ".base64_decode($decoded->message->data));
file_put_contents('request.json',serialize($decoded)."\n");
die(200);

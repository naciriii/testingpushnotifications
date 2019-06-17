<?php
var_dump($_REQUEST);
$data = json_encode($_REQUEST);
$input = file_get_contents('php://input');
fle_put_contents('data1.json',$input);
file_put_contents('data.json',$data);


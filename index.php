<?php
var_dump($_REQUEST);
$data = json_encode($_REQUEST);
file_put_contents('data.json',$data);


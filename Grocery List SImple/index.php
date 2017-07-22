<?php

require_once('Request.php');

$request = new Request();
$request->parseIncomingParams();

var_dump($request->parameters);

?>
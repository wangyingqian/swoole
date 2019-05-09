#!/usr/bin/env php
<?php
$serv = new swoole_http_server("0.0.0.0", 9501);

$serv->on('Request', function($request, $response) {
    $response->header("X-Server", "Swoole");
    $response->end("<h1>Hello Swoole!</h1>");
});

$serv->start();
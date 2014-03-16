<?php

$system = new \Phastlight\System();

$console = $system->import("console");
$http = $system->import("http");

$ip = '127.0.0.1'; //change this to your ip
$port = 1337;

$http->createServer(function($req, $res) use ($port) {
    //$res->writeHead(200, array('Content-Type' => 'text/plain'));
    $res->write("ok");
    $res->write($req->getUrl());
})->listen($port, $ip);
$console->log("Server is running on port $port");

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Src\Foo;

$f = new Foo();
$f->bar();

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
    echo 'Index';
});

$router->map('GET', '/foo', function() {
    echo 'Welcome to foo';
});
<?php

use App\Controllers\ProductController;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
use Symfony\Component\Dotenv\Dotenv;

require "vendor/autoload.php";

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

//const BASE_PATH = __DIR__;
const VIEW_PATH = __DIR__ . DIRECTORY_SEPARATOR . "views";

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$name = "HTML";

$value = match($name) {
    "PHP" => "Hello from php",
    "HTML" => "Hello from HTML",
    default => "Not found"
};

$handler = match ($uri) {
    "/products" => "Its for products",
    "/students" => "Its for student List",
    "/teachers" => "Its for teacher list",
    "/teachers/create" => "Its for teacher create",
    "/teachers/store" => "Its for teacher store",
    default => "Not found"
};

echo $handler;

if ($uri == '/products') {
    $c = new ProductController();
    $c->index();
    return;
}
if ($uri == '/students') {
    $s = new StudentController();
    $s->index();
    return;
}

if ($uri == '/teachers') {
    $t = new TeacherController();
    $t->index();
    return;
}
if ($uri == '/teachers/create') {
    $t = new TeacherController();
    $t->create();
    return;
}
if ($uri == '/teachers/store') {
    $t = new TeacherController();
    $t->store();
    return;
}

echo "404 NOT FOUND";




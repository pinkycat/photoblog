<?php

require 'application/lib/Dev.php';

use application\core\Router;


spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');

    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router;
$router->run();



header('Content-type: text/html; charset=utf-8');

include 'views/header.php';
include 'views/nav.php';



$router = new Router;

$pdo = new PDO("mysql:host=localhost;dbname=photoblogtest", "root", "1111", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//include "views/index.show.php";

?>


<footer class="container-fluid bg-dark ">
    <p class="text-muted">cc by pinkycat</p>
</footer>



</body>
</html>
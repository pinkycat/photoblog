<?php

require 'application/lib/Dev.php';

header('Content-type: text/html; charset=utf-8');

include 'views/header.php';
include 'views/nav.php';

$router = new Router;

$pdo = new PDO("mysql:host=localhost;dbname=photoblogtest", "root", "1111", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

include "views/index.show.php";

?>


<?php
$start = 20;
$end = 50;
$sum = 0;
for($i = $start; $i <= $end; $i++) {
    if(fmod($i, 3) == 0) {
        $sum += $i;
    }
}
echo $sum;

?>













<footer class="container-fluid bg-dark ">
    <p class="text-muted">cc by pinkycat</p>
</footer>



</body>
</html>
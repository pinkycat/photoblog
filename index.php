<?php
include 'views/header.php';
include 'views/nav.php';




$pdo = new PDO("mysql:host=localhost;dbname=photoblog", "root", "1111");
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

include "views/index.show.php";


?>










<footer class="container-fluid bg-dark ">
    <p class="text-muted">cc by pinkycat</p>
</footer>



</body>
</html>
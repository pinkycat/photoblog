<?php
include 'views/header.php';
include 'views/nav.php';




$pdo = new PDO("mysql:host=localhost;dbname=photoblog", "root", "1111");
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

include "views/index.show.php";


?>






<div class="card mb-3">
    <img style="width: 100%; display: block;" src="uploads/test2.jpg"/>
    <div class="card-footer text-muted">
        <span class="text-muted">Здесь будет выводиться описание в два слова</span>
        2 days ago
        <span style="padding: 0 10px;" class="text-muted">|</span>
        <span class="badge badge-pill badge-primary">Primary</span>
        <span class="badge badge-pill badge-light">Light</span>
        <span class="badge badge-pill badge-dark">Dark</span>
        <span style="padding: 0 10px;" class="text-muted">|</span>
        <div style="display: inline-block">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>

    </div>
</div>




<div class="card">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
</body>
</html>
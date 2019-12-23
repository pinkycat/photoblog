<?php

function uploadImage($image) //функция загружает картинку в папкуаплоадс, переименовывает, добавляет к имени расширение файла
{

    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extension;

    move_uploaded_file($image['tmp_name'], "uploads/" . $filename);

    return $filename;
}

function addPost($title, $genre, $filename)
{

    $pdo = new PDO("mysql:host=localhost;dbname=photoblogtest", "root", "1111", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

    $sql = "INSERT INTO posts (title, genre, image) VALUES (:title, :genre, :image)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":title", $title);
    $statement->bindParam(":genre", $genre);
    $statement->bindParam(":image", $filename);
    $statement->execute();

}
<?php

function uploadImage($image) //функция загружает картинку в папкуаплоадс, переименовывает, добавляет к имени расширение файла
{

    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extension;

    move_uploaded_file($image['tmp_name'], "uploads/" . $filename);

    return $filename;
}

function addPost($title, $content, $filename)
{

    $pdo = new PDO("mysql:host=localhost;dbname=photoblog", "root", "1111");
    $sql = "INSERT INTO posts (title, content, image) VALUES (:title, :content, :image)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":title", $title);
    $statement->bindParam(":content", $content);
    $statement->bindParam(":image", $filename);
    $statement->execute();

}
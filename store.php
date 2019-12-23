<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'Post.php';



$filename = uploadImage($_FILES['image']);

addPost($_POST['title'], $_POST['genre'], $filename);
header("Location: /" );







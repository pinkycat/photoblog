<?php
include 'views/header.php';
include 'views/nav.php';
?>


<form action ="store.php" method="POST" enctype="multipart/form-data">
    <label class="col-form-label" for="inputDefault">Введите название фотографии</label>
    <input type="text" class="form-control" placeholder="Не более 32 символов" id="inputDefault" name="title" required>
    <br>
    <label class="col-form-label"  for="inputDefault2">Введите жанр фото</label>
    <select name="genre" class="form-control" id="inputDefault2">
        <option>Портрет</option>
        <option>Пейзаж</option>
    </select>
    <br>
    <label for="exampleInputFile">Выберете файл</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
    <br>
<!--    <div class="form-group">-->
<!--        <div class="custom-control custom-checkbox">-->
<!--            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">-->
<!--            <label class="custom-control-label" for="customCheck1">Портрет</label>-->
<!--        </div>-->
<!--        <div class="custom-control custom-checkbox">-->
<!--            <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">-->
<!--            <label class="custom-control-label" for="customCheck2">Пейзаж</label>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->

    <button type="submit" class="btn btn-primary">Загрузить</button>


</form>







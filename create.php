<?php
include 'views/header.php';
include 'views/nav.php';
?>
<form action ="store.php" method="POST" enctype="multipart/form-data">
    <input type ="text" name="title"> <br>
    <textarea name="content"></textarea> <br>
    <input type="file" name = "image"> <br><br>
    <button type="submit">Submit</button>
</form>










<div class="form-group">
    <label class="col-form-label" for="inputDefault">Введите название фотографии</label>
    <input type="text" class="form-control" placeholder="Не более 32 символов" id="inputDefault">
</div>
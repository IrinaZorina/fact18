<?php
echo '<pre>';
print_r($_FILES['myFile']);
echo '</pre>';

$old = $_FILES['myFile']['tmp_name'];
$new = 'upload/' . $_FILES['myFile']['name']; 

if (move_uploaded_file($old, $new)) {
    echo 'Файл  перемещен';
} else {
    echo 'что-то пошло не так(';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="file" name="myFile">
    <input type="submit">
  </form>
</body>
</html>

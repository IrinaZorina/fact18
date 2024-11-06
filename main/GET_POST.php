<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1 занятие Верстка</title>
</head>
<body>
	<form action="aboutGET.php" method="post">
		Представьтесь : <input type="text" name="name"><p>

		Чем увлекаетесь? <textarea id="hobby" name="res[hobby]" rows="5"></textarea>
		<br>

		Ваш опыт в программировании ? <input type="checkbox" name="res[skill][]">junior
		                              <input type="checkbox" name="res[skill][]">middle
		                              <input type="checkbox" name="res[skill][]">senior
		<br>
		Хотите обучится другим языкам программирования ? <input type="radio" name="res[choice]">да
		<input type="radio" name="res[choice]"> нет 	
		<br>

		<input type="submit">

        <br>
        <br>

            <a href="lab0.php" >Задание с лабораторными</a>

	</form>

</body>
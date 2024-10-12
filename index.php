<?php 

include 'header.php';

$time = date('H'); // получаем время
if ($time >= 8 && $time <= 17) {
    $backgroundColor = '#fff'; // Белый цвет
} else {
    $backgroundColor = '#808080'; // Серый цвет
}

echo '<style>
body {
  background-color: ' . $backgroundColor . ';
}</style>';

// Функция для подсчета гласных букв
function countVowels($str) {
    return preg_match_all('/[аеёиоуыэюяАЕЁИОУЫЭЮЯaeiouAEIOU]/u', $str, $matches);
}

// Функция для подсчета слов
function countWords($str) {
    return str_word_count($str, 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ');
    //убираем теги
    $text = strip_tags($str);
    // убираем все символы через регулярку
    $text = preg_replace('/[^a-zA-Zа-яА-ЯёЁ\s]/u', ' ', $text);
    // убираем пробелы и прочую чешую
    $text = preg_replace('/\s+/', ' ', $text);
    // убираем пробелы
    $text = trim($text);
    // разделяем
    $words = explode(' ', $text);
    // возвращаем количество
    return count($words);
}
// Инициализация переменных
$totalVowels = 0;
$totalWords = 0;

ob_start(); // Начало буферизации 
?>

	
		<div class="container">
			<div class="one"></div>
			<div class="name">
				<a>АНТОН ШУЛУПАНОВ</a>
			</div>

			<div class="two">
				<div class="two1">
				Меня зовут Антон, и я учусь на первом курсе университета по
				специальности «Программирование».
				</div>
				<br>
				С самого детства я любил компьютеры и всё, что с ними связано. Я часами
				мог сидеть за монитором, изучая новые программы и игры. В школе я начал
				изучать основы программирования, и это оказалось именно тем, чем я хотел
				заниматься всю жизнь.
				<br>
				Сейчас я учусь в университете, где получаю необходимые знания и навыки
				для того, чтобы стать профессиональным программистом. Каждый день я
				узнаю что-то новое, решаю задачи и пишу код. Это очень интересно и
				увлекательно, но также требует много усилий и времени.
				<br>
				Я уверен, что программирование — это моё призвание, и я готов приложить
				все усилия, чтобы достичь успеха в этой области. Я хочу создавать
				полезные и интересные программы, которые будут помогать людям в их
				повседневной жизни.
				<br>
				Конечно, учёба в университете — это только начало моего пути. Впереди
				меня ждёт ещё много работы и трудностей, но я готов к ним. Я верю, что
				если я буду продолжать учиться и развиваться, то смогу достичь своих
				целей и стать успешным программистом.
			</div>

			<div class="three">
<?php
	$text = 'Меня зовут Антон, и я учусь на курсе по программированию. Я выбрал этот
курс, потому что всегда интересовался компьютерами и всем, что с ними
связано.
<br>
На курсе я изучаю основы программирования, алгоритмы, структуры данных и
другие важные темы. Преподаватели — опытные профессионалы, которые
помогают мне разобраться в сложных вопросах и научиться применять
полученные знания на практике.
<br>
Я уверен, что сделал правильный выбор, решив посвятить свою жизнь
программированию. Это очень интересная и перспективная область, которая
постоянно развивается и предлагает множество возможностей для
самореализации.
<br>
Конечно, учёба на курсе — это только начало моего пути. Впереди меня
ждёт ещё много работы и трудностей, но я готов к ним. Я верю, что если я
буду продолжать учиться и развиваться, то смогу достичь своих целей и
стать востребованным специалистом.';

$words = preg_split('/\s+/', $text);
$coloredText = '';

foreach ($words as $index => $word) {
    $class = $index % 2 == 0 ? 'even-word' : 'odd-word';
    $coloredText .= "<span class='$class'>$word</span> ";
}

echo $coloredText;
?>

<style>
.even-word { color: blue; }
.odd-word { color: red; }
</style>

			</div>
			<br />
			<div class="table3">
				<div class="ti">
					<div class="child1"></div>
					<div class="child2"></div>
					<div class="child3"></div>
					<div class="child4"></div>
				</div>
				<div class="tt">
					<div class="child5">Кот1</div>
					<div class="child6">Кот2</div>
					<div class="child7">Кот3</div>
					<div class="child8">Кот4</div>
				</div>
			</div>

			<div class="table4">
				<div class="tc1">
					<div class="child9"></div>
					<div class="car1"><p>Машина1</p></div>
					<div class="child10"></div>
					<div class="car2"><p>Машина2</p></div>
				</div>
				<div class="tc3">
					<div class="child11"></div>
					<div class="car3"><p>Машина3</p></div>
					<div class="child12"></div>
					<div class="car4"><p>Машина4</p></div>
				</div>
			</div>
		</div>
	
<?php
$pageContent = ob_get_contents(); // Получаем содержимое буфера
ob_end_clean(); // Очищаем буфер

// Подсчет гласных и слов
$totalVowels = countVowels($pageContent);
$totalWords = countWords($pageContent);

// Вывод содержимого страницы
echo $pageContent;

// Расчет разницы в днях между датой рождения и текущей датой
$birthDate = new DateTime('2001-01-01');
$currentDate = new DateTime();
$daysDifference = $currentDate->diff($birthDate)->days;

// Вывод информации о датах и разнице в днях
echo '<div class="date-info">';
echo '<p>Дата рождения: ' . $birthDate->format('d.m.Y') . '</p>';
echo '<p>Текущая дата: ' . $currentDate->format('d.m.Y') . '</p>';
echo '<p>Разница в днях: ' . $daysDifference . '</p>';
echo '</div>';

// Передача данных в footer через глобальные
$GLOBALS['totalVowels'] = $totalVowels;
$GLOBALS['totalWords'] = $totalWords;

include 'footer.php';
?>

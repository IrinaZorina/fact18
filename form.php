<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница с формой</title>
</head>
<body>
    <form method="POST" name="my_form">
        <p>
            <label>
                Имя пользователя:
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                E-mail:
                <input type="email" name="email" required>
            </label>
        </p>
        <p>
            <label>
                Что вам больше нравится?
                <select name="like">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Bitrix">Bitrix</option>
                </select>
            </label>
        </p>
        <fieldset>
            <legend>Хочу быть...</legend>
            <label>
                <input type="radio" name="special">
                Junior PHP Developer
            </label>
            <label>
                <input type="radio" name="special">
                Middle PHP Developer
            </label>
            <label>
                <input type="radio" name="special">
                Front-end разработчик
            </label>
        </fieldset>
        <fieldset>
            <legend>Мои навыки в программировании</legend>
            <label>
                <input type="checkbox" name="skills" value="бог">
                Бог программирования
            </label>
            <label>
                <input type="checkbox" name=skills"" value="гуру">
                Гуру программирования
            </label>
            <label>
                <input type="checkbox" name="skills" value="студент">
                Я еще учусь
            </label>
        </fieldset>
        <p>
            <label>
                Во сколько мне удобно приходить на занятия? <input type="time" name="time">
            </label>
        </p>
        <p>
            <label>
                Мои пожелания и комментарии к курсам:
                <textarea name="comments"></textarea>
            </label>
        </p>
        <button type="submit">Всё, я справился с заполнением формы</button>
    </form>
</body>
</html>
<?php include 'assets/header.php' ?>


    <form name="my_form">
        <p>
            <label FOR="namecust">Имя пользователя </label>
            <input id="namecust" name="namecast" required>
        </p>
        <br><br><br>
        <p>
            <label FOR="email">E-mail </label>
            <input id="email" type="email" name="email" required>
        </p>
        <br><br><br><br><br>
        <label>Что вам нравится больше всего?</label>
        <select name="">
            <option value="html">HTML</option>
            <option value="php">PHP</option>
        </select>
        <br><br>
        <fieldset>
            <legend>Хочу быть...</legend>
            <input type="radio" name="radio" value="yes"> Junior PHP Developer
            <input type="radio" name="radio" value="yes"> Middle PHP Developer
            <input type="radio" name="radio" value="yes"> Front-end разработчик
            <input type="radio" name="radio" value="yes"> Неее, хочу быть дизайнером
        </fieldset>
        <fieldset>
            <legend>Мои навыки в программировании</legend>
            <input type="checkbox" name="checkbox" value="one"> Бог программирования
            <input type="checkbox" name="checkbox" value="two"> Гуру программирования
            <input type="checkbox" name="checkbox" value="three"> Эм... я еще учусь
        </fieldset>
        <br><br>
        <label>Во сколлько мне удобно приходить на занятия?</label>
        <input type="time" name="time" required>
        <br><br>
        <label>Мои пожелания и комментарии по курсам</label>
        <textarea name="coment" rows="5"></textarea>
        <br><br>
        <button type="submit">Всё, я справился с заполнением формы</button>
    </form>


<?php include 'assets/footer.php'?>ii
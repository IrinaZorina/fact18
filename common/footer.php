<footer class="wrapper main_footer border">
    <div>
        2024 &copy; Сделано с <span class="heart">&#10084;</span> для <a href="https://academy.fact.digital/" target="_blank">Факт.Академия</a>
    </div>
    <div>
        <a class="icon_footer" href="https://vk.com/aletorop" target="_blank" title="Страница ВКонтакте">
            <img src="/assets/images/vk.svg" alt="Вконтакте">
        </a>
        <a class="icon_footer" href="https://t.me/alesite" target="_blank" title="Написать в Telegram">
            <img src="/assets/images/telegram.svg" alt="Телеграм">
        </a>
        <a class="icon_footer" href="mailto:toropovsite@yandex.ru" target="_blank"  title="Написать на e-mail">
            <img src="/assets/images/email.png" alt="E-mail">
        </a>
    </div>
    <div>
        <?php
        if (isset($_SESSION['login'])) {
            echo "Вы были на странице: {$_COOKIE['visit']} раз";
        }
        ?>
    </div>
</footer>
</body>
</html>

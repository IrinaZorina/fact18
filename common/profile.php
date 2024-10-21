<section class="wrapper main_block border">
    <main>
        <h1 class="name">Профиль пользователя</h1>
        <div class="content">
            <div>
                <?php
                if (isset($_COOKIE['last_page'])) {
                    echo "Последняя посещенная страница: {$_COOKIE['last_page']}";
                }
                ?>
            </div>
            <div>
                <h2>Выбрать цвет фона</h2>
            </div>
        </div>
    </main>
</section>
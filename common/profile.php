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
                <div>
                    <form method="post">
                        <label>
                            Выберете цвет фона:
                            <input type="color" name="bg_color" value="<?php echo $bg_color ?? "";?>">
                        </label>
                        <input type="submit" name="submit" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>
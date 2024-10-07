<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Главная страница</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="all"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="<?php $link = '/index.php';$current_page = false; echo $link;?>" 
                <?php 
                    if($current_page) echo 'class="selected_menu"';?>><span>главная страница</span></a>
                <a href="<?php $link = '/second.php'; $current_page = false; echo $link;?>"
                    <?php 
                    if($current_page) echo 'class="selected_menu"';?>> <span>форма</span></a>
                
            </ul>
        </nav>
    </header>

    

    <div class="auth-container">
        <form class="auth-form" action="" method="post">
            <h2>Форма аутентификации</h2>
            <label for="login">Логин</label>
            <input type="text" name="login" id="login" placeholder="Введите логин" required><br><br>

            <label for="password">Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введите пароль" required><br><br>

            <label for="remember">
                <input type="checkbox" name="remember" id="remember">
                Запомнить меня
            </label><br><br>

            <input type="submit" value="Войти">
        </form>
    </div>

    
</body>

<footer>
    <ul>
        <address>
            Москва, Чертановская 7
        </address>
        <a href="https://yandex.ru/maps/213/moscow/house/chertanovskaya_ulitsa_7k2/Z04YcAdmSEACQFtvfXpzeHlkYw==/?ll=37.606154%2C55.629578&z=16.06"
            target="_blank" title="дроп в яндекс карты">показать на карте</a>
    </ul>
    <a href="mailto:and.andriyanova@mail.ru">Написать нам на почту</a>
</footer>

</html>
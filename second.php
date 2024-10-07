<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Форма обратной связи</title>

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
                <a href="<?php $link = '/login.php'; $current_page = false; echo $link;?>" 
                    <?php 
                    if($current_page) echo 'class="selected_menu"';?>> <span>аутентификация</span></a>
            </ul>
        </nav>
    </header>

    <form action="" method="post">
        <label for="user_name">фио</label>
        <input type="text" placeholder="type smth" maxlength="50" name="user_name" id="user_name"><br><br>

        <label for="email">адрес почты</label>
        <input type="email" placeholder="type smth" maxlength="50" name="email" id="email"><br><br>

        <label for="radio">откуда узнали о нас</label><br><br>

        <div style="display: inline-block">
            <input type="radio" name="radio" value="option1">
            <span>друзья</span>
        </div>

        <div style="display: inline-block">
            <input type="radio" name="radio" value="option2">
            <span>реклама</span>
        </div><br><br>

        <select>
            <option>жалоба</option>
            <option>предложение</option>
        </select><br><br>

        <textarea placeholder="введите сообщение"></textarea><br><br>

        <label for="file"></label>
        <input type="file" name="file" id="file"><br><br>

        <div style="display: inline-block">
            <input type="checkbox" name="checkbox" id="checkbox">
            <span>даю согласие на обработку персональных данных</span>
        </div>
        <br><br>


        <input type="submit" value="отправить">
    </form>

    
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
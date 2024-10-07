<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <?php
    $pageTitle = "Андриянова_231-361_Лаб3"; 
    ?>
    <title><?php echo $pageTitle; ?></title>

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
                <a href="<?php $link = '/second.php'; $current_page = false; echo $link;?>"
                    <?php 
                    if($current_page) echo 'class="selected_menu"';?>> <span>форма</span></a>
                <a href="<?php $link = '/login.php'; $current_page = false; echo $link;?>" 
                    <?php 
                    if($current_page) echo 'class="selected_menu"';?>> <span>аутентификация</span></a>
        
            </ul>
        </nav>
    </header>

    

    <h1>цветочная база</h1>
    <h2>удобный конструктор букетов! выбирай высоту, цвет, упаковку и количество!</h2>
    <h2>за 5 лет на рынке мы заработали доверие наших постоянных клиентов, что поспособствовало целой сети салонов по
        продаже цветов и растений</h2>
    
    <?php
    echo '<img src="\f'.(date('s') % 2+1).'.jpg" alt="Меняющаяся фотография">';
    ?>
    <p>Свежие цветы  
        Каждый день мы привозим только самые свежие и красивые цветы. От классических роз до экзотических орхидей — у нас есть всё! 
        Наши флористы с радостью создадут уникальный букет именно для вас. Вы можете выбрать цветы, которые понравятся, а мы сделаем их шикарным произведением искусства.
        В нашем магазине вы также найдете оригинальные подарки и аксессуары для цветов, которые дополнит ваш заказ.
        Мы предлагаем удобную доставку цветов на дом или в офис в любое время. Порадуйте своих близких!  
        Подписывайтесь на наши новости и акции, чтобы не пропустить специальные предложения и скидки.
        Если у вас есть вопросы или особые пожелания, пожалуйста, свяжитесь с нами! Мы всегда рады помочь и будем ждать вас в нашем магазине.</p>
    <h3>мы рады предложить вам широкий ассортимент живых цветов и букетов на любой вкус и повод. у нас вы найдете:</h3>
    <ul>
    <?php
    $items = ["розы", "пионы", "гартензии", "тюльпаны"];
            foreach ($items as $item) {
                echo "<li>$item</li>";
            }
        ?>
    </ul>
    <table>
        <thead>
            <tr>
                <th>Услуга</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>vip</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>standart</td>
                <td>3000</td>
            </tr>
        </tbody>
    </table>
    <p>.</p>

    
</body>

<footer>
    <ul>
    <p>Сформировано <?php echo date('d.m.Y в H:i:s', strtotime('+1 hours, -2 seconds')); ?> 
        </p>
        <a href="<?php $name='мы на карте'; $link='https://yandex.ru/maps/213/moscow/house/chertanovskaya_ulitsa_7k2/Z04YcAdmSEACQFtvfXpzeHlkYw==/?ll=37.606154%2C55.629578&z=16.06';$current_page = true; 
        echo $link; // выводим адрес ссылки 
        ?>" target="_blank"><?php 
        if ($current_page) // если пункт меню активный
        echo $name; // выводим текст ссылки 
        ?></a>
    </ul>

</footer>

</html>

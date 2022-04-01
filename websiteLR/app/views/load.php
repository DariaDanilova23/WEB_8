<?php
include("class-autoload.inc.php");
?>
<!DOCTYPE HTML>
<head>
    <title> Сайт Душниловой Дашки </title>
    <link rel="stylesheet" href="../../public/assets/css/vizitor.css">
</head>

<body bgcolor="black">
<h1 align="center">Сайт Душниловой Дашки</h1>
<nav>
    <ul>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/menu/menu.html">Главная</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/about/about.html">Обо мне</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/hobby/hobby.html">Мои интересы</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/studies/studies.html">Учёба</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/pics/pics.html">Фотоальбом</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/contact/contact.html">Контакт</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/test/test.html">Тест</a></li>
        <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/history/history.html">История</a></li>
        <li><a href="">Отзыв</a></li>
        <li class="on"><a href="">Книга отзывов</a></li>
    </ul>
</nav>
<br>
<div class="select">
    <?php
        $classcall= new VizitorModel();
        $classcall->post_review();
    ?>
</div>>

</body>

<?php
include ("class-autoload.inc.php");
?>
<!DOCTYPE HTML>
<head>
  <title> Сайт Душниловой Дашки </title>
  <link rel="stylesheet" href="../../public/assets/css/vizitor.css">
</head>

<body bgcolor="#000000" ;>
<h1 align="center">Сайт Душниловой Дашки</h1>
<nav>
    <ul>
        <li><a href="menu.php">Главная</a></li>
        <li><a href="about.php">Обо мне</a></li>
        <li><a href="hobby.php">Мои интересы</a></li>
        <li><a href="studies.php">Учёба</a></li>
        <li><a href="pics.php">Фотоальбом</a></li>
        <li><a href="contact.php">Контакт</a></li>
        <li><a href="test.php">Тест</a></li>
        <li><a href="history.php">История</a></li>
        <li class="on"><a href="vizitorBook.php">Отзыв</a></li>
        <li><a href="blog.php">Блог</a></li>
    </ul>
</nav>
<br>
    <form method="post" action="" >
        <h1>Оставить отзыв</h1>
    ФИО <input type="text" name="fio" id="fio" ><br>
        email <input type="email" name="email"><br>
        Сообщение<br><textarea name="message"></textarea><br>
    <button type="submit" name="submit" value="submit">Отправить</button>
        <?php
        if (isset($_POST['submit'])){
            $classcall= new VizitorModel();
            $classcall->start($_POST);
        }
        ?>
    </form>

</body>
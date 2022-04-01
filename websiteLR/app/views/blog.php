<?php
include "class-autoload.inc.php";
?>
<!DOCTYPE HTML>
<head>
    <title> Сайт Душниловой Дашки </title>
    <link rel="stylesheet" href="../../public/assets/css/blog.css">
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
        <li><a href="vizitorBook.php">Отзыв</a></li>
        <li class="on"><a href="blog.php">Блог</a></li>
    </ul>
</nav>
<div class="blog">
    <?php
    $field = [
        'date',
        'text'
    ];
    $show= new Blog();
    $t=$show->show();
    $i=1;
    while ($row=$t->fetch()) {
        echo "<form method='post' action=''>";
        foreach ($field as $colum) {
            $textSend[$i] = $row['text'];
        }
        echo "<button name='delete' value='$textSend[$i]'>&#9747;</button>";
        if (isset($_POST['delete'])) {
        $show->del($_POST['delete']);
        $_POST['delete'] = NULL;
        header('Location: blog.php', true, 303);
        }
        $i=$i+1;
        /*{
        $textSend=$_POST['textB'];
        $show->del($textSend);}*/
        echo '<br>---------------------------------------------------<br>';
        echo "</form>";
      /*
        }*/
    }
    ?>
</div>
<form method="post" action="">
    Сообщение<br><textarea name="textB" id="textB"> </textarea><br>
    <button type="submit" name="submit" value="submit">Отправить</button>
</form>
<?php
if (isset($_POST['submit'])){
    $save= new Blog();
    $t=$_POST['textB'];
    $save->write($_POST);
    header('Location: blog.php', true, 303);
}
?>
</body>
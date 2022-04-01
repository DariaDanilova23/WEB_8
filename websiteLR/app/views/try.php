<?php
include ("class-autoload.inc.php");
?>
<!DOCTYPE HTML>
<head>
    <title> Сайт Душниловой Дашки </title>
    <link rel="stylesheet" href="../../../../public/assets/css/vizitor.css">
</head>

<body>
<form method="post" action="" >
    ФИО <input type="text" name="fio" id="fio" ><br>
    <button type="submit" name="submit" value="submit">Отправить</button>
</form>
<?php
if (isset($_POST['submit'])){
echo"Добро пожаловать";
$classcall= new TryModel();
//$classcall->getUsers();
$classcall->setUsers($_POST);
}
?>
</body>
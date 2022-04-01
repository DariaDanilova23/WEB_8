<?php
include("class-autoload.inc.php");
require("app/models/validators/Check.php");
if(isset($_POST['submit'])){
    $valid=new FormValidation($_POST);
    $Rules=$valid->validForm();
    $test=new ResultsVerification($_POST);
    $Check=$test->check($_POST['q1']);
    $Check= $Check+$test->check_2($_POST['q2']);
    $Check= $Check+$test->check($_POST['q3']);
    $Check= $Check+$test->check($_POST['q4']);
    $Check= $Check+$test->check($_POST['q5']);
}
?>

<!DOCTYPE HTML>
<head>
    <title> Сайт Душниловой Дашки </title>
    <link rel="stylesheet" href="../../../../public/assets/css/test_style.css">
    <script type="text/javascript" src="../../public/assets/js/test.js"></script>
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
        <li class="on"><a href="test.php">Тест</a></li>
        <li><a href="history.php">История</a></li>
        <li><a href="vizitorBook.php">Отзыв</a></li>
        <li><a href="blog.php">Блог</a></li>
    </ul>
</nav>
<FORM name="quiz" id="quiz" class="quiz_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    ФИО <input type="text" name="FIO" id="fio" value="<?php echo htmlspecialchars($_POST['FIO']) ?? '' ?>">
    <div class="error"><?php echo htmlspecialchars($Rules['FIO']) ?? ''?> </div>
    <br>
    <div class="q1">
        <label for="q1">1.Термин "экология" предложил?</label>
        <br>
        <INPUT NAME="q1" TYPE=RADIO VALUE="no" id="q1"> Э.Гаккель;
        <br>
        <INPUT NAME="q1" TYPE=RADIO VALUE="no" id="q1">В.И.Вернадский;
        <br>
        <INPUT NAME="q1" TYPE=RADIO VALUE="yes" id="q1">Ч.Дарвин;
        <br>
        <INPUT NAME="q1" TYPE=RADIO VALUE="no" id="q1">А.Тенсли
        <br>
        <div class="error_q1">Заполните поле</div>
    </div>
    <br>
    <div class="q2">
        <label for="q2">2.Какой уровень организации живой материии является областью познания в экологии?</label>
        <br>
        <input name="q2" id="q2" type=number>
        <div class="error_q2">Заполните поле</div>
    </div>
    <br>
    <div class="q3">
        <label for="q3">3.Какие из перечисленных ниже огранизмов являются неклеточными?</label>
        <br>
        <INPUT NAME="q3" TYPE=RADIO VALUE="no" id="q3">грибы;
        <br>
        <INPUT NAME="q3" TYPE=RADIO VALUE="yes" id="q3">вирусы;
        <br>
        <INPUT NAME="q3" TYPE=RADIO VALUE="no" id="q3">животные;
        <br>
        <INPUT NAME="q3" TYPE=RADIO VALUE="no" id="q3">растения
        <br>
        <div class="error_q3">Заполните поле</div>
    </div>
    <br>
    <div class="q4">
        <label for="q4">4.Растения, довольствующиеся малым содержанием зольных элементов в почве, называются?</label>
        <br>
        <INPUT NAME="q4" TYPE=RADIO VALUE="no" id="q4">мезотрофами;
        <br>
        <INPUT NAME="q4" TYPE=RADIO VALUE="yes" id="q4">эвтрофами;
        <br>
        <INPUT NAME="q4" TYPE=RADIO VALUE="no" id="q4">олиготрофами
        <br>
        <div class="error_q4">Заполните поле</div>
    </div>
    <br>
    <div class="q5">
        <label for="q5">5.На какой высоте располагается озоносфера?</label>
        <br>
        <INPUT NAME="q5" TYPE=RADIO VALUE="yes" id="q5">80 км;
        <br>
        <INPUT NAME="q5" TYPE=RADIO VALUE="no" id="q5">19-32 км;
        <br>
        <INPUT NAME="q5" TYPE=RADIO VALUE="no" id="q5">10 км
        <br>
        <INPUT NAME="q5" TYPE=RADIO VALUE="no" id="q5">55 км
        <br>
        <div class="error_q5">Заполните поле</div>
    </div>
    <br>
    <div class="rez"><?php echo "Оценка $Check"?></div>
    <button type="reset">Отчистить</button>
    <button type="submit" name="submit" value="Submit">Отправить</button>
    <?php
    if (isset($_POST['submit'])){
    foreach ($_POST as $key=> $value){ if ($value=='no') {echo "$key:Нет "; echo "<style>.$key{background-color:red;} </style>";}
    else if($value=='yes') {echo "$key:Да "; echo "<style>.$key{background-color:green;}</style>";} }
    if ($_POST['q2']==3){echo $_POST['q2']; echo "<style>.q2{background-color:green;}</style>";} else if ($_POST['q2']!=NULL){echo "<style>.q2{background-color:red;}</style>";}
        echo"Добро пожаловать";
        $classcall= new Test();
        $classcall->saveAnwsers($_POST);
    }


    ?>
    </FORM>


<div id="after_sub">
    <p id="num_correct">Good job</p>
</div>
</body>
<?php
require("app/models/validators/Check.php");
if(isset($_POST['submit'])){
    $valid=new FormValidation($_POST);
    $Rules=$valid->validForm();
}
?>

<!DOCTYPE HTML>
<head>
  <title> Сайт Душниловой Дашки </title>
  <link rel="stylesheet" href="../../../../public/assets/css/contact_style.css">
</head>

<body bgcolor="#000000" ;>

  <h1 align="center">Сайт Душниловой Дашки</h1>
  <aside>
    <div type="button" class="connect">&#9742;</div>
  </aside>
  <div class="popup-container">
    <div class="popup-form">
      <div class="popup">
        <button class="close"> &#10006;</button>
        <h3>Я бы перезвонила вам, будь я миллениалкой</h3>
      </div>
    </div>
  </div>
  <nav>
    <ul>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/menu/menu.html">Главная</a></li>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/about/about.html">Обо мне</a></li>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/hobby/hobby.html">Мои интересы</a></li>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/studies/studies.html">Учёба</a></li>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/pics/pics.html">Фотоальбом</a></li>
		<li class="on"><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/contact/contact.html">Контакт</a></li>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/test/test.html">Тест</a></li>
		<li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/history/history.html">История</a></li>
    </ul>
  </nav>
<FORM  name="contact_form" class="form_class" align="center" METHOD="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    ФИО<input type="text" name="FIO" id="fio" value="<?php echo htmlspecialchars($_POST['FIO']) ?? '' ?>">
    <div class="error"><?php echo htmlspecialchars($Rules['FIO']) ?? ''?> </div>
<br>
<div>
<label>Пол:<br></label>
<INPUT NAME="POL" TYPE= RADIO VALUE="Female">женский
<INPUT NAME="POL" TYPE= RADIO VALUE="Male">мужской
<INPUT NAME="POL" TYPE= RADIO VALUE="Other">другое
</div>

<br>

<div align=center>
<label>Дата рождения: </label>
        <div class="calendar">
            <div class="date">
                <select class="month">
                    <optgroup label="Месяц">
                        <option>Январь</option>
                        <option>Февраль</option>
                        <option>Март</option>
                        <option>Апрель</option>
                        <option>Май</option>
                        <option>Июнь</option>
                        <option>Июль</option>
                        <option>Август</option>
                        <option>Сентябрь</option>
                        <option>Октябрь</option>
                        <option>Ноябрь</option>
                        <option>Декабрь</option>
                    </optgroup>
                </select>
                <select class="year">
                    <optgroup label="Год">

                    </optgroup>
                </select>
            </div>
            <table>
                <tbody>
                    <tr>
                        <th>ВС</th>
                        <th>ПН</th>
                        <th>ВТ</th>
                        <th>СР</th>
                        <th>ЧТ</th>
                        <th>ПТ</th>
                        <th>СБ</th>
                    </tr>
                    <tr class="calendar-day">
                    </tr>

                    <tr class="calendar-day">
                    </tr>

                    <tr class="calendar-day">
                    </tr>

                    <tr class="calendar-day">
                    </tr>

                    <tr class="calendar-day">
                    </tr>
                </tbody>
            </table>
</div>

<br>
	<label for="email">Email</label>
	<input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
    <div class="error"><?php echo htmlspecialchars($Rules['email']) ?? ''?> </div>
<br>
    Телефон <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($_POST['phone']) ?? '' ?>">
    <div class="error"><?php echo htmlspecialchars($Rules['phone']) ?? ''?> </div>
<br>
	<label for="letter">Отзыв</label>
    <br>
	<TEXTAREA NAME="Отзыв" id="letter" ROWS=10 COLS=50>
	</TEXTAREA>
	<div class="error_letter">Заполните поле</div>
<button type="reset">Отчистить</button>
<button type="submit" name="submit" value="Submit">Отправить</button>
</FORM>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="../../../../public/assets/js/popup.js"></script>
<script type="text/javascript" src="../../../../public/assets/js/contact.js"></script>
<script type="text/javascript" src="../../../../public/assets/js/calendar.js"></script>
</body>
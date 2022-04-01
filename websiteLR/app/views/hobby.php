<!DOCTYPE HTML>
<head>
  <title> Сайт Душниловой Дашки </title>
  <link rel="stylesheet" href="../../../../public/assets/css/hobby_style.css">
</head>

<body bgcolor="#000000" ;>
  <h1 align="center">Сайт Душниловой Дашки</h1>
  <nav>
    <ul>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/menu/menu.html">Главная</a></li>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/about/about.html">Обо мне</a></li>
      <li class="on"><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/hobby/hobby.html">Мои интересы</a></li>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/studies/studies.html">Учёба</a></li>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/pics/pics.html">Фотоальбом</a></li>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/contact/contact.html">Контакт</a></li>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/test/test.html">Тест</a></li>
      <li><a href="file:///C:/Users/Даша/Desktop/Website/ЛР_3/history/history.html">История</a></li>
    </ul>
  </nav>

  <div class="meInfo">
    <h2>Содержание</h2>

    <a href="#Мое хобби">*Мое хобби</a>
    <br>
    <a href="#Мои любимые книги">*Мои любимые книги</a>
    <br>
    <a href="#Моя любимая музыка">*Моя любимая музыка</a>
    <br>
    <a href="#Мои любимые фильмы">*Мои любимые фильмы</a>
    <br>
    <br>
  </div>

  <div class="list">
      <?php
      include ('app/models/Interest.php');

      foreach($a as $key=>$value) {
          echo '<li name="' . $key . '" class="menu-item"> <a name="' . $key . '">' . $key . '</a>';
          echo '<ol class="sub-menu">';
          foreach ($value as $index => $value2) {
              echo '<li>' . $value2 . '</li> <br>';
          }
          echo  '</ol>';
          echo'</li>';
      }
      ?>
      <!--
    <li name="Мое хобби" class="menu-item"> <a name="Мое хобби">Мое хобби</a>
      <ol class="sub-menu">
        <li>Керамика</li>
        <br>
        <li>Homescapes</li>
        <br>
        <li>Просмотр Youtube</li>
        <br>
        <li>Pinterest</li>
        <br>
        <li>Йога</li>
        <br>
      </ol>
    </li>

    <li name="Мои любимые книги" class="menu-item"> <a name="Мои любимые книги">Мои любимые книги</a>
      <ol class="sub-menu">
        <li>Джейн Эйр-Шарлотта Бронте</li>
        <br>
        <li>Токсичные родители-Сьюзен Форвард</li>
        <br>
        <li>Мастер и Маргарита-Михаила Булгаков</li>
        <br>
        <li>Гордость и предубеждение-Джейн Остен</li>
        <br>
        <li>Евгений Онегин-Александр Пушкин</li>
        <br>
      </ol>
    </li>

    <li name="Моя любимая музыка" class="menu-item"> <a name="Моя любимая музыка">Моя любимая музыка</a>
      <ol class="sub-menu">
        <li>Nicki Minaj</li>
        <br>
        <li>SZA</li>
        <br>
        <li>Drake</li>
        <br>
        <li>Megan Thee Stallion</li>
        <br>
        <li>Doja Cat</li>
        <br>
      </ol>
    </li>

    <li name="Мои любимые фильмы" class="menu-item"> <a name="Мои любимые фильмы">Мои любимые фильмы</a>
      <ol class="sub-menu">
        <li>Мамма Mia!</li>
        <br>
        <li>Сумерки</li>
        <br>
        <li>Пила</li>
        <br>
        <li>Штурм белого дома</li>
        <br>
        <li>Телохранитель</li>
        <br>
      </ol>
    </li>
      -->
  </div>
  <script type="text/javascript" src="../../../../public/assets/js/hobby.js"></script>
</body>
<!DOCTYPE HTML>
<head>
  <title> Сайт Душниловой Дашки </title>
  <link rel="stylesheet" href="../../../../public/assets/css/pics_style.css">
</head>

<body bgcolor="#000000">
  <h1 align="center">Сайт Душниловой Дашки</h1>
  <div class="menu">
    <nav>
      <ul>
          <li><a href="menu.php">Главная</a></li>
          <li><a href="about.php">Обо мне</a></li>
          <li><a href="hobby.php">Мои интересы</a></li>
          <li><a href="studies.php">Учёба</a></li>
          <li class="on"><a href="pics.php">Фотоальбом</a></li>
          <li><a href="../../app/views/contact.php">Контакт</a></li>
          <li><a href="test.php">Тест</a></li>
          <li><a href="history.php">История</a></li>
      </ul>
    </nav>
  </div>

  <h1 align="center">Фото</h1>
  <div class="wall">
    <ul class="img-list">
        <?php
        include('app/models/Photo.php');
        foreach ($photo_ as $key=>$value){
            echo  '<li> <a href="'.$value.'"><img src="'.$value.'" class="image"></a>'.'<figcaption>'.$key.'</figcaption>';
        }
        ?>
    </ul>
    <div class="lightbox">
      <div class="overlay"></div>
      <figure>
        <span class="prev">← prev</span>
        <span class="next">next →</span>
        <img src="#">
      </figure>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="../../../../public/assets/js/pics.js"></script>
  <br>
  <br>
  <br>
</body>
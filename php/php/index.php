<?php 
$current_page = "index.php";

$title = "Тухватуллин Арслан Ниязович, Группа 211-362, Лабораторная работа №3";
date_default_timezone_set("Europe/Moscow");
$date = date("d.m.y");  
$time = date("h:m:s"); 

$isEven = (int) date("s") % 2;

if ($isEven == 0) {
  $main_pic = "../assets/icon.png";
} else {
  $main_pic = "../assets/laptop.jpg";
}

include "db.php";
$result = mysqli_query($mysql, "SELECT * FROM `imgs`");

$array = [];

while ($name = mysqli_fetch_assoc($result)) {
  array_push($array, [$name['src']]);
}

$src1 = $array[0][0];
$src2 = $array[1][0];

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title><?php echo $title?></title>
</head>

<body>
  <?php include 'header.php' ?>

  <main class="container">
    <div class="intro">
      <img src="<?php echo $main_pic?>">
      <div class="intro-info">
        <h1><span class="colored">Ничего</span> интересного</h1>
      </div>
    </div>
    <div class="description">
    <h2>Всем "один-ноль-один" (привет)!<br>Цель моего повествования - описание компонентов моего рабочего стола. Статья не претендует на объективность и меня 
  это не волнует. Формируйте своё мнение на основе собственных выводов и ощущений.</h2>
    </div>
    <div class="album">
      <div class="albums">
      <a class="album-title" name="warlord">Компьютер</a>
      <div class="album-container">
        <img src=<?php echo $src1 ?>>
        <a name="laptop"></a>
        <p>В качестве "мозга" моего рабочего стола выступает ноутбук ASUS ROG Zephyrus G15. Приобретен он в Ситилинке в январе 22-го года за 121 тыс. рублей</p>
    </div>
    </div>  
    </div>
    <div class="album">
    <div class="albums">
      <a class="album-title" name="starz">Keyboard</a>
      <div class="album-container">
        <div>
        <p>Всё, что вы сейчас читаете - результат взаимодействия ноутбука и героя этого блока. Имя ему Red Square Keyrox TKL. Клавиатура оснащена свитчами 
        Gateron Red, которые уже на протяжении нескольких лет демонсрируют поразительные результаты по надежности и комфорту среди всех клавиатур из "массмаркетов".</p>
        </div>
        <img src=<?php echo $src2 ?>>
      </div>
    </div>
    </div>

  </main>
  <footer class="page-footer">
    <div class="info">
      <a name="contacts"><span class="colored">Follow us</span></a>
      <p>Instagram Facebook Twitter</p>
      <p class="copyright">© 2022. All rights reserved.</p>
      <p><?php echo 'Сформировано ',  $date, " в ", $time ?></p>
    </div>
  </footer>
</body>

</html>

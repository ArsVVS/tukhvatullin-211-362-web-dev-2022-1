<?php 
$current_page = "form.php";

$title = "Тухватуллин Арслан Ниязович, Группа 211-362, Лабораторная работа №3";
date_default_timezone_set("Europe/Moscow");
$date = date("d.m.y");  
$time = date("h:m:s"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title><?php echo $title ?></title>
</head>
<body>
  <?php include 'header.php' ?>
  <main>
    <div class="response">
    <?php
      echo '<p>Здравствуйте, <b>'.$_POST['name'].'</b></p>';

      if ($_POST['type']=='suggestment') {
          echo '<p>Спасибо за Ваше предложение</p>';
      } else {
          echo '<p>Мы рассмотрим Вашу жалобу</p>';
      }

      echo '<textarea>'.$_POST['message'].'</textarea>';

      if (isset($_POST['file']) & $_POST['file']!='') echo '<p>Вы приложили следующий файл: <span class="got_file">'.$_POST['file'].'</p>';
                  
      echo '<div><button><a class="btn"<a class="btn" href="form.php?name='.$_POST['name'].
          '&email='.$_POST['email'].
          '&radio='.$_POST['radio'].
          '">Заполнить снова</a></button></div>';
    ?>
    </div>
  </main> 
</body>
</html>
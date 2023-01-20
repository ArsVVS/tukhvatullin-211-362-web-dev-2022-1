<?php 
$current_page = "form.php";

$title = "Тухватуллин Арслан Ниязович, Группа 211-362, Лабораторная работа №3";
date_default_timezone_set("Europe/Moscow");
$date = date("d.m.y");  
$time = date("h:m:s"); 

$name = '';
$email = '';
$message = '';
$type = '';
$radio = '';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title><?php echo $title?></title>
</head>

<body>
  <?php include 'header.php'?>
  <main class="container">
  <?php 
    if (isset($_GET['name'])) $name = $_GET['name'];
    if (isset($_GET['email'])) $email = $_GET['email'];
    if (isset($_GET['radio'])) $radio = $_GET['radio'];
  ?>
  <form action="home.php" method="post">
    <div>
      <label for="name">ФИО</label><br>
      <input name="name" id="name" value="<?php echo $name?>">
    </div>
    <div>
      <label for="email">Ваш еmail</label><br>
      <input name="email" id="email" placeholder="abc@gmail.com" value="<?php echo $email?>">
    </div>
    <div>
      <label for="message">Сообщение</label><br>
      <textarea name="message" id="text" cols="30" rows="10"></textarea>
    </div>
    <div>
      <label for="type">Тип обращения</label><br>
      <select name="type" id="type">
        <option value="complaint">Жалоба</option>
        <option value="suggestment">Предложение</option>
      </select>
    </div>
    <div>
      <label for="agree">Даю согласие на обработку персональных данных</label>
      <input type="checkbox" name="agree" id="agree">
    </div>
    <div>
      <p>Откуда узнали о нас?</p>
      <input type="radio" id="contactChoice1" name="radio" value="internet" <?php if ($radio=='internet') echo 'checked'?>>
      <label for="contactChoice1">Реклама из интернета</label><br>

      <input type="radio" id="contactChoice2" name="radio" value="friends" <?php if ($radio=='friends') echo 'checked'?>>
      <label for="contactChoice2">Рассказали друзья</label><br>
    </div>
    <div>
      <input type="file" name="file"/>
    </div>
    <div>
      <button>Отправить</button>
    </div>
  </form>
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
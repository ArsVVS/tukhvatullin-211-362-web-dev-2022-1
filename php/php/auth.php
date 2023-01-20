<?php 
$current_page = "auth.php";

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
  <link rel="stylesheet" href="../auth-style.css">
  <title><?php echo $title?></title>
</head>

<body>
  <?php include 'header.php' ?>
  
  <main>
    <div class="form">
      <form action="https://httpbin.org/post" method="post">
        <p>Аутентификация</p>
        <div>
          <label for="login">Логин</label>
          <input type="text" name="login" id="login">
        </div>
        <div>
          <label for="password">Пароль</label>
          <input type="password" name="password" id="password">
        </div>
        <div>
          <label for="remember">Запомнить меня</label>
          <input type="checkbox" name="remember" id="remember">
        </div>
        <button>Подтвердить</button>
      </form>
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
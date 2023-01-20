<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Тухватуллин А.Н. 211-362 Лабораторная работа №10</title>
</head>

<body>
  <header class="header">
    <div class="header__content container">
      <img class="header__logo" src="assets/logo.png" alt="logo">
      <p class="header__text">Тухватуллин А.Н. 211-362 Лабораторная работа №10</p>
    </div>
  </header>
  <main class="page">
    <div class="main__content container">
      <div class="main__form">
      <?php 
          $text = $_POST['data'];

          if (isset($text) && $text != '') {
            echo '<p class="src_text">'.$text.'</p>';
          } else {
            echo "Нет текста для анализа";
          }

        ?>
        <table <?php if (!(isset($text) && $text != '')) echo 'class="hidden"'?>>
          <tr><td>Количество символов в тексте (включая пробелы)</td><td><?= mb_strlen($text) ?></td></tr>
          <tr><td>Количество букв</td><td><?= mb_strlen(preg_replace("/[^a-zA-Zа-яА-Я]/u", "", $text)) ?></td></tr>
          <tr><td>Количество строчных букв</td><td><?= mb_strlen(preg_replace("/[^a-zа-я]/u", "", $text)) ?></td></tr>
          <tr><td>Количество заглавных букв</td><td><?= mb_strlen(preg_replace("/[^A-ZА-Я]/u", "", $text)) ?></td></tr>
          <tr><td>Количество знаков препинания</td><td><?= mb_strlen(preg_replace("/[^.,:;!?-]/u", "", $text)) ?></td></tr>
          <tr><td>Количество цифр</td><td><?= mb_strlen(preg_replace("/[^0-9]/u", "", $text)) ?></td></tr>
          <tr>
            <td>Количество слов</td>
            <td><?php
            if ($text != '') {
                echo count(explode(" ", $text));
            } else {
                echo 0;
            }
            ?></td>
          </tr>
          <tr>
            <td>Количество вхождений каждого символа текста</td>
            <td><?php
                $symbols = array();
                $unique_symbols = array_unique($symbols); // уникальные символы
                $unique_symbols_freq = array(); // частота встречаемости символов

                for ($i = 0; $i < mb_strlen($text); $i++) {
                    array_push($symbols, mb_strtolower(mb_substr($text, $i, 1)));
                }

                foreach ($unique_symbols as $symbol) $unique_symbols_freq[$symbol] = 0; // устанавливаем начальные значения
                foreach ($symbols as $symbol) @$unique_symbols_freq[$symbol]++; // считаем частоту встречаемости символов
                foreach ($unique_symbols_freq as $unique_symbol => $frequency) { // выводим результат
                    if ($unique_symbol == " ") $unique_symbol = "'space'";  // пробелы заменяем на 'space'
                    echo "<tr><th>$unique_symbol</th><th>$frequency</th></tr>"; // выводим символ и частоту встречаемости
                }
            ?></td>
            </tr>
            <tr>
              <td>Cписок всех слов в тексте и количество их вхождений, отсортированный по алфавиту</td>
              <td><?php
                    $words = explode(" ", preg_replace("/[^a-zA-Zа-яА-Я]/u", " ", $text));  // разбиваем текст на слова
                    $unique_words_freq = array(); // частота встречаемости слов
                    
                    $unique_words = array_unique($words); // уникальные слова
                    
                    foreach ($unique_words as $unique_word) $unique_words_freq[$unique_word] = 0; // устанавливаем начальные значения
                    foreach ($words as $word) $unique_words_freq[$word]++; // считаем частоту встречаемости слов
                    ksort($unique_words_freq); // сортируем по алфавиту
                    foreach ($unique_words_freq as $unique_word => $frequency)  
                        echo "<tr><th>$unique_word</th> <th>$frequency</th></tr>";
                ?></td>
            </tr>
        </table>
        <a class="main__btn" href="index.html">Другой анализ</a>
      </div>
    </div>
  </main>
  <footer></footer>
</body>

</html>
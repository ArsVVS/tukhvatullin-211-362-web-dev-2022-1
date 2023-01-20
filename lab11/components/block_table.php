<?php
$num = 2;

if (isset($_GET["content"])) {
    $num = $_GET["content"];
    $content = "?content=".$num."&type=block";

    if (is_numeric($num)) {
        echo "<div class='result'>";
            
        for ($i = 2; $i < 10; $i++) {
          $mult;

          if ($num * $i < 10) {
            $mult = '?content='.($num * $i).'&type=block';
          } else {
            $mult = '#';
          }

          echo '<div class="result__item"><a class="number__tag" href="'.$content.'">'.$num.'</a> * <a class="number__tag" href="?content='.$i.'&type=block">'.$i.'</a>
            = <a class="number__tag" href="'.$mult.'">'.($num * $i).'</a>
          </div>';
        }

        echo "</div>";
    } else {
        require("./components/block_fulltable.php");
    }
} 
?>
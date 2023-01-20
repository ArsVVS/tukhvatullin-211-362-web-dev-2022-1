<?php
$num = 2;

if (isset($_GET["content"])) {
    $num = $_GET["content"];
    $content = "?content=".$num."&type=table";

    if (is_numeric($num)) {
        echo '<table border="1px">';

        for ($i = 2; $i < 10; $i++) {
          $mult;

          if ($num * $i < 10) {
            $mult = '?content='.($num * $i).'&type=table';
          } else {
            $mult = '#';
          }

          echo '<tr>
            <td><a class="number__tag" href="'.$content.'">'.$num.'</a> * <a class="number__tag" href="?content='.$i.'&type=table">'.$i.'</a></td>
            <td><a class="number__tag" href="'.$mult.'">'.($num * $i).'</a></td>
          </tr>';
        }
            
        echo '</table>';
    } else {
        require("./components/fulltable.php");
    }
}
?>
<?php
echo '<table class="fulltable" border="1px">';

for ($j = 2; $j < 10; $j++) {
  echo '<tr>';

  $contentJ = "?content=".$j."&type=table";

  for ($i = 2; $i < 10; $i++) {
    $contentI = "?content=".$i."&type=table";
    $contentJI;

    if ($i * $j < 10) {
      $contentJI = "?content=".($i * $j)."&type=table";
    } else {
      $contentJI = "#";
    }

    echo '<td class="fulltable__td"><a class="number__tag" href="'.$contentI.'">'.$i.
         '</a> * <a class="number__tag" href="'.$contentJ.'">'.$j.
         '</a> = <a class="number__tag" href="'.$contentJI.'">'.($i * $j).'</a></td>';
  }
  echo '</tr>';
}

echo '</table>';

?>
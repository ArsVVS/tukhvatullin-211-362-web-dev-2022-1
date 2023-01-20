<?php
echo '<div class="fullblock">';

for ($j = 2; $j < 10; $j++) {
  echo '<div class="fullblock-row">';

  $contentJ = "?content=".$j."&type=block";

  for ($i = 2; $i < 10; $i++) {
    $contentI = "?content=".$i."&type=block";
    $contentJI;

    if ($i * $j < 10) {
      $contentJI = "?content=".($i * $j)."&type=block";
    } else {
      $contentJI = "#";
    }

    echo '<div class="fullblock__item"><a class="number__tag" href="'.$contentI.'">'.$i.
         '</a> * <a class="number__tag" href="'.$contentJ.'">'.$j.
         '</a> = <a class="number__tag" href="'.$contentJI.'">'.($i * $j).'</a></div>';
  }
  echo '</div>';
}

echo '</div>';

?>
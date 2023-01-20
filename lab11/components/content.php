<ul>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=all&type=".$_GET["type"];
        } else {
            echo "?content=all";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "all") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item-selected";
        } ?>>
        <li class="content__item">Вся таблица умножения</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=2&type=".$_GET["type"];
        } else {
            echo "?content=2";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "2") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 2</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=3&type=".$_GET["type"];
        } else {
            echo "?content=3";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "3") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 3</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=4&type=".$_GET["type"];
        } else {
            echo "?content=4";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "4") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 4</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=5&type=".$_GET["type"];
        } else {
            echo "?content=5";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "5") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 5</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=6&type=".$_GET["type"];
        } else {
            echo "?content=6";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "6") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 6</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=7&type=".$_GET["type"];
        } else {
            echo "?content=7";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "7") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 7</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=8&type=".$_GET["type"];
        } else {
            echo "?content=8";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "8") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 8</li>
    </a>
    <a href=<?php 
        if(isset($_GET["type"])) {
            echo "?content=9&type=".$_GET["type"];
        } else {
            echo "?content=9";
        }
        ?> class=<?php 
        if (isset($_GET["content"])) {
            if ($_GET["content"] == "9") {
                echo "content__item-selected";
            } else {
                echo "content__item";
            }
        } else {
            echo "content__item";
        } ?>>
        <li class="content__item">Умножение на 9</li>
    </a>
</ul>
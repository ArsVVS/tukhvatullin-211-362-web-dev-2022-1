<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Тухватуллин А.Н. 211-362 Лабораторная работа №11</title>
</head>

<body>

    <header>
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="logo"><a href="index.php">Тухватуллин А.Н. 211-362 Лабораторная работа №11</a></div>
                <div class="types">
                    <a class=<?php 
                        if (isset($_GET["type"])) {
                            if ($_GET["type"] == "table") {
                                echo "selected";
                            } else {
                                echo "type";
                            }
                        } else {
                            echo "type";
                        }
                    ?> href=<?php
                        if (isset($_GET["content"])) {
                            echo "?content=".$_GET["content"]."&type=table";
                        } else {
                            echo "?type=table";
                        }
                    
                    ?>>Табличная верстка</a>
                    <a class=<?php 
                        if (isset($_GET["type"])) {
                            if ($_GET["type"] == "block") {
                                echo "selected";
                            } else {
                                echo "type";
                            }
                        } else {
                            echo "type";
                        }
                    ?> href=<?php
                        if (isset($_GET["content"])) {
                            echo "?content=".$_GET["content"]."&type=block";
                        } else {
                            echo "?type=block";
                        }
                    
                    ?>>Блочная верстка</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="wrapper">
            <div class="main_wrapper">
                <div class="content">
                    <?php require("./components/content.php") ?>
                </div>
                <div class="result__wrapper">
                    <?php 
                        if (isset($_GET["type"])) {
                            if ($_GET["type"] == "block") {
                                require("./components/block_table.php");
                            } else if ($_GET["type"] == "table") {
                                require("./components/table.php");
                            }
                        } else if (isset($_GET["content"])) {
                            require("./components/table.php");
                        } else {
                            require("./components/fulltable.php");
                        }
                    ?>


                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="wrapper">
            <div class="footer__wrapper">
                <p class="footer__item">Тип верстки: <span><?php 
                    if (isset($_GET["type"])) {
                        if ($_GET["type"] == "table") {
                            echo "Табличая";
                        } else if ($_GET["type"] == "block") {
                            echo "Блочная";
                        } 
                    } else {
                        echo "Табличная";
                    }
                ?></span></p>
                <p class="footer__item">Умножение на: <span>
                        <?php
                        if (isset($_GET["content"])) {
                          if ($_GET["content"] == "all") {
                            echo 'все';
                          } else {
                            echo $_GET["content"];
                          }
                        } else {
                            echo "2";
                        }
                    ?></span></p>
                <p class="footer__item">Дата и время: <span><?=date('d.m.Y');?></span> <span><?=date('H:i:s');?></span></p>
            </div>
        </div>
    </footer>

</body>

</html>
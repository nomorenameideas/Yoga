<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Studio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <?php
            require './core.php';
            $classes = getClasses();

            if (isset($_GET["page"])) {
                switch ($_GET["page"]) {
                    case "register":
                        require 'register.php';
                        break;
                    case "main":
                        require 'main.php';
                        break;
                    case "admin":
                        require "admin.php";
                        break;
                    case "delete":
                        if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
                            delete();
                        }
                        break;
                    case "create":
                        if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
                            require 'create.php';
                        }
                        break;
                    case "mark":
                        if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
                            mark();
                        }
                        break;
                    default:
                        break;
                }
            } else {
                require 'main.php';
            }
            ?>
        </div>
    </body>
</html>

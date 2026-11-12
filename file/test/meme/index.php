<!DOCTYPE html>
<?php session_start(); ?>
<html>
        <head>
                <meta charset="utf-8" />
                <title>PHP Session Login Test</title>
                <link rel="stylesheet" href="style.css">
        </head>
        <body>
                <h1>Snowman</h1>
                <?php
                        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
                                echo "<p>로그인을 해 주세요. <a href=\"login.php\">[로그인]</a></p>";
                        } else {
                                $user_id = $_SESSION['user_id'];
                                $user_name = $_SESSION['user_name'];
                                echo "<p><strong>$user_name</strong>($user_id)님 환영합니다.";
                                echo "<a href=\"logout.php\">[로그아웃]</a></p>";
                        }
                ?>
                <hr />
                <p> My First php file.</p>
        </body>
</html>
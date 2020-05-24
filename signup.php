<?php
require "components/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="library/jquery.js"></script>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Drivebet</title>
</head>
<body>
 <?php include 'header.php';?>
 <div class="intro">
    <form action="components/register.php" method="post">
        <label class="container-signup__label">Ваш логин </label>
        <input class="container-signup"  oninput="nameFun(this)" maxlength="12" type="text" name="name" placeholder="Login" required></br>

        <label class="container-signup__label">Ваш Email</label>
        <input class="container-signup" oninput="emailFun(this)" maxlength="50" type="email" name="email" placeholder="Email" required></br>

        <label class="container-signup__label">Ваш пароль</label>
        <input class="container-signup" oninput="acept_pasFun(this)" maxlength="50" type="password" name="password" placeholder="Password" required></br>

        <label class="container-signup__label">Подтверждение пароля</label>
        <input class="container-signup" oninput="acept_pas2Fun(this)" maxlength="50" type="password" name="password_2" placeholder="Password" required>


        </br><input class="register-btn container-signup" type="submit" value="Regist">
        <p>Уже зарегистрированы? - <a href="login.php">авторизируйтесь</a></p>
    
</div>
<div class="msg"></div>
<script type="text/javascript" src="js/validreg.js"></script>
<script type="text/javascript">
            $('form').submit(function(event) {
                event.preventDefault();
                $.post('components/register.php', $('form').serialize(),
                    function(data) {
                        if (data == '1') {
                            document.location.href = "index.php";
                        } else {
                            alert("Информация была введена не верно, либо аккаунт уже зарегистрирован");
                        }
                    }
                );
            });
        </script>
        </form>
</body>
</html> 
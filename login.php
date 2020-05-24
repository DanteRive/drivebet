<?php require "components/db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Drivebet</title>
</head>
<body>
 <?php include 'header.php';?>
 <div class="intro">
     <form action="components/autoriz.php" method="post">
        <label class="container-signup__label">Ваш Email</label>
        <input class="container-signup" oninput="emailFun(this)"  type="email" name="email" placeholder="Email" required></br>

        <label class="container-signup__label">Ваш пароль</label>
        <input class="container-signup" oninput="acept_pasFun(this)"  type="password" name="password" placeholder="Password" required>
        </br><input class="container-signup" type="submit" value="Autoriz">
        <p>
            Еще не зарегистрированы? - <a href="signup.php">Зарегистрироваться</a>
        </p>
    
</div>

<script type="text/javascript" src="library/jquery.js"></script>
<script type="text/javascript" src="js/validreg.js"></script>
<script type="text/javascript">
            $('form').submit(function(event) {
                event.preventDefault();
                $.post('components/autoriz.php', $('form').serialize(),
                    function(data) {
                        if (data == '1') {
                            document.location.href = "index.php";
                        } else {
                            alert("Данные были введены не верно, либо аккаунта не существует")
                        }
                    }
                );
            });
        </script>
        </form>
</body>
</html>
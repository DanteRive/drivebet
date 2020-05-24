<?php require "components/db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
 <?php include 'header.php';?>
 <div class="intro">
     <form action="components/autoriz.php" method="post">
        <label class="container-signup__label" align="right">Ваш Email</label>
        <input class="container-signup input-group-text" oninput="emailFun(this)"  type="email" name="email" placeholder="Email" required></br>

        <label class="container-signup__label" align="right">Ваш пароль</label>
        <input class="container-signup input-group-text" oninput="acept_pasFun(this)"  type="password" name="password" placeholder="Pass" required>
        <br><label class="container-signup__label" align="right">Авторизоваться</label>
        <input class="container-signup input-group-text" type="submit" value="Auth">
        <br><p>
            Еще не зарегистрированы? - <a href="signup.php">Зарегистрироваться</a>
        </p>
    
</div>
<?php include 'footer.php';?>
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
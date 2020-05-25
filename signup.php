<?php
require "components/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
 <?php include 'header.php';?>
 <div class="intro">
    <form action="components/register.php" method="post">
        <label class="container-signup__label" align="right">Login</label>
        <input class="container-signup input-group-text"  oninput="nameFun(this)" maxlength="12" type="text" name="name" placeholder="Login" required></br>

        <label class="container-signup__label" align="right">Email</label>
        <input class="container-signup input-group-text" oninput="emailFun(this)" maxlength="50" type="email" name="email" placeholder="Email" required></br>

        <label class="container-signup__label" align="right">Pass</label>
        <input class="container-signup input-group-text" align="right" oninput="acept_pasFun(this)" maxlength="50" type="password" name="password" placeholder="Pass" required></br>

        <label class="container-signup__label" align="right">RPass</label>
        <input class="container-signup input-group-text" oninput="acept_pas2Fun(this)" maxlength="50" type="password" name="password_2" placeholder="Pass" required>

        <br><label class="container-signup__label" align="right">Регистрация</label>
        <input class="container-signup input-group-text" type="submit" value="Regist">
        <br><p>Уже зарегистрированы? - <a href="login.php">авторизируйтесь</a></p>
    
</div>
<?php include 'footer.php';?>
<div class="msg"></div>
<script type="text/javascript" src="library/jquery.js"></script>
<script type="text/javascript" src="js/validreg.js"></script>
<script type="text/javascript">
            $('form').submit(function(event) {
                event.preventDefault();
                $.post('components/register.php', $('form').serialize(),
                    function(data) {
                        if (data == '1') {
                            alert("Регистрация прошла успешно")
                            document.location.href = "index.php";
                        } else {
                            alert(data);
                        }
                    }
                );
            });
        </script>
        </form>
</body>
</html> 
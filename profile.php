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
 <ul class="list-group list-group-flush">
  <li class="list-group-item container-profile__label">Ваше имя: <?=$_SESSION['logged_user']->name;?> </li>
  <li class="list-group-item container-profile__label">Ваша почта: <?=$_SESSION['logged_user']->email;?> </li>
  <li class="list-group-item container-profile__label">Ставка: <?=$_SESSION['logged_user']->bet;?>$ на <?=$_SESSION['logged_user']->bteam;?>   </li>
</ul>
<form action="components/changepass.php" method="post">
<br>
  <button class="btn btn-primary btn_profile" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Смена пароля</button>

<div class="collapse" id="collapseExample">
</br><input class="container-signup input-group-text btn_profile"  oninput="acept_pasFun(this)" maxlength="50" type="password" name="password" placeholder="NPass" required><br>
<input class="container-signup input-group-text btn_profile"  oninput="acept_pas2Fun(this)" maxlength="50" type="password" name="password_2" placeholder="RNPass" required><br>
<input class="container-signup input-group-text btn_profile" type="submit" value="Change">
</div>
 </div>
 <script type="text/javascript" src="library/jquery.js"></script>
<script type="text/javascript" src="js/validreg.js"></script>
<script type="text/javascript">
            $('form').submit(function(event) {
                event.preventDefault();
                $.post('components/changepass.php', $('form').serialize(),
                    function(data) {
                        if (data == '1') {
                            alert("Пароль изменен")
                        } else {
                            alert("Данные были введены не верно, проверьте правильность ввода")
                        }
                    }
                );
            });
        </script>
</form>
 <?php include 'footer.php';?>
</body>
</html>
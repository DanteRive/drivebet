<?php
require "db_connect.php";
$navi = strlen($_POST['nv']);
$vpp = strlen($_POST['vp']);
$id = $_SESSION['logged_user']->id;


if (R::findOne('users', 'email = ?', [$_SESSION['logged_user']->email]) > 0) {

    if($_POST['nv'] ==0 && $_POST['vp'] ==0){
        echo 'Введите вашу ставку в одно из полей';
    }
    elseif($_POST['nv'] !=="0" && $_POST['vp'] !=="0"){
        echo 'Поставить можно только на одну команду';
    }
    elseif($_POST['nv'] !=="0" && $_POST['vp'] ==0){
        $_SESSION['logged_user']->bet = $_POST['nv'];
        $_SESSION['logged_user']->bteam = $_POST['Navi'];
        $user = R::load('users',$id);
        $user->bet = $_POST['nv'];
        $user->bteam = $_POST['Navi'];
        R::store($user);
        echo '1';
    }
    elseif($_POST['nv'] ==0 && $_POST['vp'] !=="0" ){
        $_SESSION['logged_user']->bet = $_POST['vp'];
        $_SESSION['logged_user']->bteam = $_POST['virtus'];
        $user = R::load('users',$id);
        $user->bet = $_POST['vp'];
        $user->bteam = $_POST['virtus'];
        R::store($user);
        echo '1';
    }
}else{
    echo 'Пройдите регистрацию\авторизацию';
}

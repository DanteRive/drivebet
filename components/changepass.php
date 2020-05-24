<?php
require "db_connect.php";

$id = $_SESSION['logged_user']->id;
if (R::findOne('users', 'email = ?', [$_SESSION['logged_user']->email]) > 0) {

    $user = R::load('users',$id);
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    R::store($user);
    echo '1';
}
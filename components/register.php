<?php
require "db_connect.php";
$email_l = strlen($_POST['email']);
$pas_l = strlen($_POST['password']);
if (R::findOne('users', 'email = ?', [$_POST['email']]) > 0) {
   
} elseif ($email_l > 50 || $pas_l > 50 /*|| ($_POST['rol'] != '0' && $_POST['rol'] != '1')*/) {
   
} elseif ($_POST['password_2'] != $_POST['password']) {
    
} elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/', $_POST['password'])) {
    
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   
} elseif (!preg_match('/^[A-Z][a-z-0-9]{1,11}$/u', $_POST['name'])) {
    
} else {
    $user = R::dispense('users');
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->rol = $_POST['rol'];
    R::store($user);
    echo '1';
}

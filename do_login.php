<?php

require "db.php";

$data = $_POST;

$user = R::findOne('users', 'login = ?', array($data['login']) );

if ( password_verify($data['password'], $user->password) ) {
     echo true;
     $_SESSION['logged_user'] = $user;
} else {
  echo false;
}

 ?>

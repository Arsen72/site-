<?php

require "db.php";

$data = $_POST;

  if ( R::count('users', "login = ?", array($data['login_signup'])) > 0 )  {
		echo false;
	}

  else {
    echo true;
  }



?>

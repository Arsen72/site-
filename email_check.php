<?php

require "db.php";

$data = $_POST;

if ( R::count('users', "email = ?", array($data['email_signup'])) > 0 )  {
		echo false;
	}

  else {
    echo true;
  }

?>

<?php

require "db.php";

$data = $_POST;

		$user = R::dispense('users');
		$user->login = $data['login_signup'];
		$user->name = $data['name_signup'];
		$user->surname = $data['surname_signup'];
		$user->password = password_hash($data['password_signup'], PASSWORD_DEFAULT);
		$user->email = $data['email_signup'];
		R::store($user);
		echo "Ви успішно зареєстровані!";

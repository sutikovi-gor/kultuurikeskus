<?php

$login = filter_var(trim ($_POST['login']), 
	FILTER_SANITIZE_STRING);
$name = filter_var(trim ($_POST['name']), 
	FILTER_SANITIZE_STRING);
$pass = filter_var(trim ($_POST['pass']), 
	FILTER_SANITIZE_STRING);

 if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
 	echo "Недопустимая длина логина";
 	exit();
 } 
 elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
 	echo "Недопустимая длина имени"; 
 	exit();
 }

elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 12) {
 	echo "Недопустимая длина salasõna (от 5 до 12 символов)";
 	exit();
 }

$pass = md5($pass."565gorski");

$mysql = new mysqli('localhost', 'root', '', 'kultuurnews');
$mysql -> query("INSERT INTO `users` (`login`, `pass`, `name`) 
    VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: ./')

?>
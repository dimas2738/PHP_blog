<?php
$name=trim(htmlspecialchars($_POST['name']));
$email=trim(htmlspecialchars($_POST['email']));
$hash='12345';
$password=md5(trim(htmlspecialchars($_POST['password'])).$hash);

if (strlen($name)<=3){
    echo('Введите имя');
}
else if (strlen($email)<=3){
    echo('Введите email');
}

else if (strlen($password)<=3){
    echo('Введите password');
}


require_once '../../classes/DBConnection.php';

$connection= new DBConnection('root','','blog','localhost');
$connection->insert_data($name,$email,$password);
header('Location: /');
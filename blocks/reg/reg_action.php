<?php
$name=trim(htmlspecialchars($_POST['name']));
$email=trim(htmlspecialchars($_POST['email']));
$hash='12345';
$password=md5(trim(htmlspecialchars($_POST['password'])).$hash);
$error= '';
if (strlen($name)<=3){
//    echo('Введите имя');
    $error='Введите имя';
}
else if (strlen($email)<=3){
//    echo('Введите email');
    $error='Введите email';
}

else if (strlen($_POST['password'])<=3){
//    echo('Введите password');
    $error='Введите password';
}

if ($error!= ''){
    echo $error;
    exit();
}

setcookie('name', $name, time() + 7200,'/');

require_once '../../classes/DBConnection.php';

$connection= new DBConnection('root','','blog','localhost');
$connection->insert_data($name,$email,$password);
//header('Location: /');

echo 'Done!';
<?php
$title=trim(htmlspecialchars($_POST['title']));
$intro=trim(htmlspecialchars($_POST['intro']));
$text=trim(htmlspecialchars($_POST['text']));
//$file=trim(htmlspecialchars($_POST['file']));;
$error= '';
if (strlen($title)<=3){
//    echo('Введите имя');
    $error='title must be more than 3 symbols';
}
else if (strlen($intro)<=3){
//    echo('Введите email');
    $error='intro must be more than 3 symbols';
}
//
else if (strlen($text)<=3){
//    echo('Введите password');
    $error='text must be more than 3 symbols';
}
//
if ($error!= ''){
    echo $error;
    exit();
}


else {
    require_once '../../classes/DBConnection.php';
    $connection= new DBConnection('root','','blog','localhost');
    $connection->insert_data_article($title,$intro,$text);
    echo 'Done!';
}


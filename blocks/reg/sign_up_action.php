<?php
require_once '../../classes/DBConnection.php';
try {

    $name = trim(htmlspecialchars($_POST['name']));
    $hash = '12345';
    $password = md5(trim(htmlspecialchars($_POST['password'])) . $hash);




    $pdo= new DBConnection('root','','blog','localhost');
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $pdo->exec('SET NAMES "utf8"');
    $pdo=$pdo->connect();
//    print_r($pdo);

}
catch (PDOException $e)
{
    $output = 'Невозможно подключиться к серверу баз данных' . $e->getMessage();
    echo $output;
    exit();
}
try
{
    $sql = "SELECT id, name, email, password FROM `users` WHERE `name`='".$name."'  AND `password`='".$password."' LIMIT 1";
    $result = $pdo->query($sql);

}
catch (PDOException $e)
{
    $output = 'Ошибка при выполнении обновления: ' . $e->getMessage();
    echo $output;
    exit();
}
//print_r($result);

////
$row = $result->fetch();
//print_r($row);
$password1 = $row['password'];
$name1 = $row['name'];
$id = $row['id'];

echo '<br>';
echo 'pass='.$password1;
echo '<br>';
echo 'name='.$name1;


if ($password == $password1)
{
//    setcookie('name', $name1, time() + 7200);
    session_start();
    $_SESSION['name']=$name1;
    setcookie('name', $name1, time() + 7200);
    header('Location: /');

}
else header('Location: /blocks/sign_in.php');

//if ($_GET['logout'] == 'YES')
//{
//    setcookie('csgoserv','');
//    header('Location: http://'.$_SERVER['SERVER_NAME']);
//}
//if ($_POST['password'] != $password1 )
//{
//    header('Location: http://'.$_SERVER['SERVER_NAME'].'/?mode=failed');
//}

?>
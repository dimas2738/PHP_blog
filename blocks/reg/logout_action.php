<?php
session_start();
unset($_SESSION['name']);
//setcookie('name', $name1, time() -7200);
header('Location: /');
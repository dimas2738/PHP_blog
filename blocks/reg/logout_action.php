<?php
session_start();
setcookie('name', '', time() -7200,'/');
header('Location: /');
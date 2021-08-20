<?php 
//очищаем авторизацию при выходе из админки
if($_GET["p"]=='exit') {
session_start();
$_SESSION = array();
session_destroy();
header('Location: ../index.php');
}
// Начинаем сессию и вход в кабинет
session_start(); 
$access = array(); 
$access = file("pass.php"); 
$login = trim($access[1]); 
$passw = trim($access[2]); 
if(!empty($_POST['enter'])) 
{ 
 $_SESSION['login'] = $_POST['login']; 

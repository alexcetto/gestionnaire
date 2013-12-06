<?php

include_once 'base.php';

global $bdd, $base_url;



if(isset($_POST['login']) && isset($_POST['pwd'])){
    $pwd = $_POST['pwd'];
    $name = $_POST['login'];
}

$name = sanitizr($name);
$pwd  = sanitizr($pwd);

$userQuery = $bdd->prepare("SELECT * FROM users where login='$name'");
$userQuery -> execute();
$userQuery = $userQuery -> fetch();
$xstngPwd  = $userQuery['pass'];

if($userQuery && $xstngPwd == $pwd){
    setcookie('login',$name, time() + 365*24*3600, '/', null, false, true);
    header("Location: $base_url/index.php");
    exit;
} else {
    header("Location: $base_url/connexion.php");
    exit;
}
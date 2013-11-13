<?php

include_once 'base.php';

global $bdd;

if(isset($_GET['id'])) $id = $_GET['id'];

$statusQuery = $bdd->prepare("SELECT * FROM company where id=$id ");
$statusQuery -> execute();
$statusQuery = $statusQuery -> fetch();

if($statusQuery['attending'] == '1'){
    return $bdd->query("UPDATE company set attending='0' where id=$id ");
} else if($statusQuery['attending'] == '0'){
    return $bdd->query("UPDATE company set attending='1' where id=$id ");
} else {
    return false;
}
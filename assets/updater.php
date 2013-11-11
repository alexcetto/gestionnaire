<?php

include_once 'base.php';

global $bdd;

if(isset($_GET['id'])) $id = $_GET['id'];

/*if(isset($_GET['which']) && $_GET['which'] == 'status')         status();
else if(isset($_GET['which']) && $_GET['which'] == 'attending') attending();
*/
$statusQuery = $bdd->prepare("SELECT * FROM company where id=$id ");
$statusQuery -> execute();
$statusQuery = $statusQuery -> fetch();

if($statusQuery[state] == '1'){
    return $bdd->query("UPDATE company set state='0' where id=$id ");
} else if($statusQuery[state] == '0'){
    return $bdd->query("UPDATE company set state='1' where id=$id ");
} else {
    return false;
}

/*function attending(){
    if($statusQuery[0] === '1'){
        $bdd->query("UPDATE company set attending='0' where id=$id ");
    } else if($statusQuery[0] === '0'){
        $bdd->query("UPDATE company set attending='1' where id=$id ");
    } else {
        return false;
    }
}
*/
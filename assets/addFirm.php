<?php

include_once 'base.php';



if(isset($_POST['firmName']) && $_POST['firmName'] != '') 	$name = $_POST['firmName'];
if(isset($_POST['room']) && $_POST['room'] != '') 			$room = $_POST['room'];

if(isset($_POST['idFirm']) && $_POST['idFirm'] != '') {
	$idFirm = $_POST['idFirm'];
	if (checkIfExists($idFirm)) {
		updateEntryToDB($idFirm,$name,$room);
	} else return false;
} else {
	addEntryToDB($name,$room);
}


function addEntryToDB($name,$room){
    global $bdd;
	global $base_url;

	$statusQuery = $bdd->prepare("INSERT INTO company (name,room) VALUES (:name, :room);");
	$statusQuery -> bindParam(':name',$name);
	$statusQuery -> bindParam(':room',$room);
	$statusQuery -> execute();
	return header("Location: $base_url/index.php");
}

function updateEntryToDB($idFirm,$name,$room){
	global $bdd;
	global $base_url;

	$statusQuery = $bdd->prepare("UPDATE company SET name=:name, room=:room WHERE id='$idFirm';");
	$statusQuery -> bindParam(':name',$name);
	$statusQuery -> bindParam(':room',$room);
	$statusQuery -> execute();
	return header("Location: $base_url/index.php");
}

function checkIfExists($idFirm){

	global $bdd;
	$userQuery = $bdd->prepare("SELECT * FROM company where id='$idFirm'");
	$userQuery -> execute();
	$userQuery = $userQuery -> fetch();
	return $userQuery;
}
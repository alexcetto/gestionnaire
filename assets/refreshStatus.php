<?php
	include_once 'base.php';

    if(isset($_GET['r']) && $_GET['r'] != '') $r = $_GET['r'] ;
    //var_dump($_GET["r"]);

	$rows = fetchCompData($r);

	foreach($rows as $row) {
        print ("<div id='$row[id]' class='showStand "); 
        if($row[1] == '0'){
        	print("vert");
        } else {
        	print("rouge");
        }
        if($row['attending'] == '0'){
        	print(" gris");
        }
       	print("'>$row[name]</div>");
    }
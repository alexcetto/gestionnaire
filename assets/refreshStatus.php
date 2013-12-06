<?php
	include_once 'base.php';

    if(isset($_GET['r']) && $_GET['r'] != '' && strlen($_GET['r']) <= 3) $r = $_GET['r'] ;

    print($r);

	$rows = fetchCompData($r);

    if (!$rows) {
        return print('Salle non existante');
    }


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
<?php
	include_once 'base.php';
	
	$rows = fetchCompData('');

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
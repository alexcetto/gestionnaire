<?php
	include_once 'base.php';

    function searchForRoom(){
        global $bdd;
        
        $rows = $bdd->query("SELECT * from rooms");
        return $rows;
    }
    $roomrows = searchForRoom();

    foreach ($roomrows as $roomrow) {
        print($roomrow[0]);
        print("</br>");
        printMyArrays($roomrow[0]);
    }

    function printMyArrays($arr){

        $rows = fetchCompData($arr);
        if($rows){
            foreach($rows as $row) {
                print ("<div id='$row[0]' class='showStand "); 

                if($row[1] == '0'){
                    print("vert");
                } else {
                    print("rouge");
                }
                if($row[5] == '0'){
                    print(" gris");
                }
                print("'>$row[2] || id = $row[0] </div> </ br>");
            } 
        } else {
            print("\n Pas de stands </ br>");
        }
        
    }
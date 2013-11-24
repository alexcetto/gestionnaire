<?php
$user = 'root';
$pass = '3KJzu8Ib';
try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=testing', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
} 

$base_url = 'http://127.0.0.1/~alex/gestionnaire';
    
function fetchCompData($param) {
    global $bdd;
    
    if($param != ''){
        $rows = $bdd->query("SELECT * from company where room=$param");
        return $rows;
    } else {
    	 $rows = $bdd->query("SELECT * from company");
        return $rows;
    }
}

function sanitizr($str){
	$str = mysql_real_escape_string ($str);
	return $str;
}

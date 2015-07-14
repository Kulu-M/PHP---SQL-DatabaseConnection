<?php


echo "Start - ";


define("DBHOST", "localhost");             
define("DBMAIN", "testbase");
define("DBUSER", "root"); 
define("DBPASS", "sqlpw");



function db_connect($host = DBHOST, $user = DBUSER, $password = DBPASS, $db = DBMAIN) { 
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBMAIN);


    # Hat die Verbindung geklappt ? 
    if (!$link) { 
        echo mysqli_error($link); 
    }


    mysqli_set_charset($link, "utf8");
    return $link; 
} 

function db_close($link) { 
    mysqli_close($link); 
     
}

echo "End";

?>
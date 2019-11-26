<?php
function openconn(){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="1234";
    $db="schema";

    $conn = new mysql($dbhost,$dbuser,$dbpass,$db);
    return $conn;
}
function closeconn($conn){

    $conn -> close();

}



?>
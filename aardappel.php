<?php

$host="localhost";
$databasename="aardappel";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

echo "Antwoorden:".$_POST ["keuze"]."<br>";

?>

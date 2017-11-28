<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>
</html> 

<?php
session_start();

$host="localhost";
$databasename="aardappel";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

?>


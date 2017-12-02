<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>
</html> 

<?php
session_start();

$host="localhost";
$databasename="aardappelquiz";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

    $sql2 = "DELETE FROM `amn_recepten` WHERE id='".$_GET['id']."'";
    $conn->query($sql2);
    header("Location: recepten.php");
    
    
    
    
 
?>


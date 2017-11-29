<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>
 

<?php
session_start();

$host="localhost";
$databasename="aardappelquiz";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

?>
<div id="hoofd" align=center>
        <br><br>
    <div id="kop">heerlijke aardappel recepten</div><br><br>
    

<?php

if (isset($_REQUEST['aantal'])){
    $conn= new mysqli($host, $username, $password, $databasename);
    $sql2="INSERT INTO `recepten`(`personen`, `ingredienten`, `bereiding`) VALUES ('" . $_GET['aantal'] . "','" . $_GET['ingredienten'] . "','". $_GET['bereiding']."')";
    $conn->query($sql2);
        
}


?>

  <input id="knop" type=button onClick="location.href='aardappelquiz.php'" value='menu'>  
  </div>
    </html>
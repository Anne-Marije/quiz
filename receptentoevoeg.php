
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
    <div id="kop">Voeg je favoriete aardappelrecept toe</div><br><br>
    <form action="recepten.php" method="get">
        <span id='par'>aantal personen:</span><br>
        <input type="text" name="aantal" value=""><br><br>
        <span id='par'>ingredienten:</span><br>
        <textarea rows="4" cols="50" name="ingredienten" "> </textarea><br><br>
        <span id='par'>bereiding:</span><br>
        <textarea rows="4" cols="50" name="bereiding" > </textarea><br><br>
        <input id="knop" type="submit" name="login" value="verstuur">
        <input id="knop" type=button onClick="location.href='aardappelquiz.php'" value='menu'>  <br>
        
        
    </form>
    

<?php

if (isset($_REQUEST['aantal'])){
    $conn= new mysqli($host, $username, $password, $databasename);
    $sql2="INSERT INTO `recepten`(`personen`, `ingredienten`, `bereiding`) VALUES ('" . $_GET['aantal'] . "','" . $_GET['ingredienten'] . "','". $_GET['bereiding']."')";
    $conn->query($sql2);
        
}


?>

  
  </div>
    </html>
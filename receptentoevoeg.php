
<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>
    <body>

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
    <div id="kop">voeg je favoriete aardappelrecept toe</div><br><br>
    <form action="receptentoevoeg.php" method="get">
        <span id='par'>naam recept:</span><br>
        <input type="text" name="naam" value="" required><br><br>
        <span id='par'>aantal personen:</span><br>
        <input type="text" name="aantal" value="" required><br><br>
        <span id='par'>ingredienten:</span><br>
        <textarea rows="4" cols="50" name="ingredienten" required> </textarea><br><br>
        <span id='par'>bereiding:</span><br>
        <textarea rows="4" cols="50" name="bereiding" required> </textarea><br><br>
        <input id="knop" type="submit" name="login" value="verstuur">
        <input id="knop" type=button onClick="location.href='aardappelquiz.php'" value='menu'>  <br>  
    </form>
    

<?php

if (isset($_GET['aantal'])){
    $sql2="INSERT INTO `amn_recepten`(`titel`, `personen`, `ingredienten`, `bereiding`) VALUES ('" . $_GET['naam'] . "','" . $_GET['aantal'] . "','" . $_GET['ingredienten'] . "','". $_GET['bereiding']."')";
    $conn->query($sql2);
        
}

//
//class recept{
//    public $titel;
//    public $aantal;
//    public $ingredienten;
//    public $bereiding;
//    
//}
//
//
//$recept = new recept;
//
//$recept ->titel = $_GET['naam'];
//$recept ->aantal = $_GET['aantal'];
//$recept ->ingredienten = $_GET['ingredienten'];
//$recept ->bereiding = $_GET['bereiding'];
//
//
?>

  
        </div>
    </body>
</html>
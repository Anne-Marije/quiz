<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>

<?php
session_start();

$score=0; 
if ($_SESSION ['vraag1']== 'Zuid-Amerika'){
    
    $score++; 
    
}

if ($_SESSION['vraag2'] == 'Vincent van Gogh'){
    
    $score++; 
   
}
if ($_SESSION['vraag3'] == 'Zoete aardappel'){
    
    $score++; 
 
}
if ($_SESSION['vraag4'] == 'Uitspraak van Marie-Antionette over de honger in Frankrijk: "Dan eten ze toch aardappelen."'){
    
    $score++; 
 
}  
if ($_SESSION['vraag5'] == 'De aardappels zijn blootgesteld aan licht'){
    
    $score++;  
}

?>

<div id="hoofd" align=center>
    <div id="kop"> score <br><br>
                <div align="center">
        <image src="blijeaardappel.jpg" style="width: 227px" algin="left"/><br>
        </div>
<?php
    echo "je hebt er $score van de 5";
    
    session_destroy();
 ?>

    </div><br>
     <input id="knop" type=button onClick="location.href='aardappelquiz.php'" value='menu'>  
</div>
</html>
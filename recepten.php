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
//echo $_SESSION['naam'];
        

    
    $sql2="SELECT * FROM `recepten`";
        $result2 = $conn->query($sql2);
        $row3 =$result2->fetch_assoc();
        $recept = array ($row3['titel'],$row3['personen'], $row3['ingredienten'], $row3['bereiding']);
       
//        print_r($row3);
//        print_r($recept);
        
        for($o=0; $o<count($row3);$o++){
             echo $row3['titel'];
            
        }
        
        
//            for($y=0; $y< $row1->num_rows;$y++){
//                echo $row1;
//                echo "<br>";
//		}
//    
?>

  <input id="knop" type=button onClick="location.href='aardappelquiz.php'" value='menu'>  
  </div>
    </html>
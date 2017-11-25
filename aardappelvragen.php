<?php
session_start();

$host="localhost";
$databasename="aardappelquiz";
$username="root";
$password="";

//create connection
$conn= new mysqli($host, $username, $password, $databasename);

//check connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}


//ophalen vragen uit database
$sql = "SELECT `vraag`, `id` FROM `vragen` ORDER BY `id` ASC;";
$result = $conn->query($sql);
         
    for ($x = 0; $x < $result->num_rows; $x++) {
        $row = $result->fetch_assoc();

        echo $row['vraag']."<br>";
                    
//        $sql1="SELECT antwoord, keuze1, keuze2, keuze3 FROM quiz WHERE vraagid = ". $row['id']."";
//        $result1 = $conn->query($sql1);
//        $row1 =$result1->fetch_assoc();
//        $keuze = array ($row1['antwoord'],$row1['keuze1'], $row1['keuze2'], $row1['keuze3']);
//        $goed = $keuze[0];
//        shuffle($keuze);
//        echo '<br>';
//         
//            for($x=0; $x<count($keuze);$x++){
//                echo $keuze[$x];
//                if ($goed == $keuze[$x]){
//                    echo ' goede antwoord';
//                }
//                echo '<br>';
//            }
    }

?>

<html>
    
    <input type=button onClick="location.href='aardappelquiz.php'" value='klaar'>
    
</html>
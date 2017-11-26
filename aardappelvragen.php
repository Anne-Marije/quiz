<html>
<form action='aardappel.php' method='post'>
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
$sql = "SELECT `vraag`, `id`, `afbeelding` FROM `vragen` ORDER BY `id` ASC;";
$result = $conn->query($sql);
         
    for ($x = 0; $x < $result->num_rows; $x++) {
        $row = $result->fetch_assoc();

        echo "<br><b>".$row['vraag']."<br></b>";
        echo "<img src=".$row['afbeelding']." style='width:300px'><br>";
        
       $sql1="SELECT antwoord, keuze1, keuze2, keuze3 FROM quiz WHERE vraagid = ". $row['id']."";
        $result1 = $conn->query($sql1);
        $row1 =$result1->fetch_assoc();
        $keuze = array ($row1['antwoord'],$row1['keuze1'], $row1['keuze2'], $row1['keuze3']);
        $goed = $keuze[0];
        shuffle($keuze);
        echo '<br>';
         
            for($y=0; $y<count($keuze);$y++){
                 echo "<input type='radio' name='keuze' value='$keuze[$y]'></form>". $keuze[$y];
                if ($goed == $keuze[$y]){
                    echo 'goede antwoord';
                }
                echo '<br>';
            }
    }

?>


    <input type=button onclick="volgende()" value='volgende vraag'>

    <input type="submit" value="Submit">

    <input type=button onClick="location.href='aardappelquiz.php'" value='klaar'>
</form>    
</html>

<script>
    
    var n = 0
    function volgende(){
        n++;
        alert (n);
        
    }
        
   
    
</script>
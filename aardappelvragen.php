<html>
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>

<script>
    
    function volgende(){
        
        <?php
        $output = $_GET['vraag'];
        ++$output;
        
        
        ?>
                 
        var data = <?php echo json_encode($output, JSON_HEX_TAG); ?>;
        document.location='aardappelvragen.php?vraag='+data;
    }
    
    
</script>
<div id="hoofd" align=center>
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
$sql = "SELECT `vraag`, `id`, `afbeelding` FROM `vragen` WHERE `id` = ".$_GET['vraag']."";
$result = $conn->query($sql);
         
        $row = $result->fetch_assoc();
        echo "<div id='kop'><br>".$row['vraag']."</div><br>";
        echo "<img src=".$row['afbeelding']." style='width:300px'><br>";
        
 
 
       $sql1="SELECT antwoord, keuze1, keuze2, keuze3 FROM quiz WHERE vraagid = ". $row['id']."";
        $result1 = $conn->query($sql1);
        $row1 =$result1->fetch_assoc();
        $keuze = array ($row1['antwoord'],$row1['keuze1'], $row1['keuze2'], $row1['keuze3']);
        $goed = $keuze[0];
        shuffle($keuze);
        echo '<br>';
        echo'<form action="aardappelvragen.php?vraag='.$output.'" method="POST" name="name1">'; 
            for($y=0; $y<count($keuze);$y++){
                echo "<input id='radio' type='radio'  name=vraag".$_GET['vraag']." value='$keuze[$y]' ><span id='par'>". $keuze[$y]."</span>";

                echo '<br>';
		}
                    
                    
                echo '<br>';
               
            
         
        echo "<input id='knop' type='submit' value='volgende vraag' ></form>";    
       
 
        $sql2="SELECT antwoord FROM quiz";
        $result2 = $conn->query($sql1);
        $row2 =$result2->fetch_assoc();
        
    echo $row2['antwoord']."laat goed antwoord zien";    
        
if(isset($_POST['vraag1'])){
$_SESSION['vraag1'] = $_POST['vraag1'];
}
if(isset($_POST['vraag2'])){
$_SESSION['vraag2'] = $_POST['vraag2'];
}
if(isset($_POST['vraag3'])){
$_SESSION['vraag3'] = $_POST['vraag3'];
}
if(isset($_POST['vraag4'])){
$_SESSION['vraag4'] = $_POST['vraag4'];
}
if(isset($_POST['vraag5'])){
$_SESSION['vraag5'] = $_POST['vraag5'];
}

print_r($_SESSION);
//$antwoorden = array($_SESSION['vraag1'],$_SESSION['vraag2'],$_SESSION['vraag3'],$_SESSION['vraag4'], $_SESSION['vraag']);

$score=0; 
if ($_SESSION == $row2['antwoord']){
    
    $score++; 
    
}

echo $score;
//if ($_SESSION['vraag2'] == 'Vincent van Gogh'){
//    
//    $score++; 
//   
//}
//if ($_SESSION['vraag3'] == 'Zoete aardappel'){
//    
//    $score++; 
// 
//}
//if ($_SESSION['vraag4'] == 'Uitspraak van Marie-Antionette over de honger in Frankrijk: "Dan eten ze toch aardappelen."'){
//    
//    $score++; 
// 
//}  
//if ($_SESSION['vraag5'] == 'De aardappels zijn blootgesteld aan licht'){
//    
//    $score++;  
//}
//  echo $score;
                             
?>

<input id="knop" type=button onClick="location.href='aardappelquiz.php'" value='klaar'>
</div>
</html>

        
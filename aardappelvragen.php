<script>
    

    function volgende(){
        
        <?php
        $output = $_GET['vraag'];
        ++$output;
        
        if($output>5){
       echo "klaar";
            
        }
        ?>
                 
        var data = <?php echo json_encode($output, JSON_HEX_TAG); ?>;
        document.location='aardappelvragen.php?vraag='+data;
    }
    
    
    

  
    
</script>

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

        echo "<br><b>".$row['vraag']."<br></b>";
        echo "<img src=".$row['afbeelding']." style='width:300px'><br>";
        
       $sql1="SELECT antwoord, keuze1, keuze2, keuze3 FROM quiz WHERE vraagid = ". $row['id']."";
        $result1 = $conn->query($sql1);
        $row1 =$result1->fetch_assoc();
        $keuze = array ($row1['antwoord'],$row1['keuze1'], $row1['keuze2'], $row1['keuze3']);
        $goed = $keuze[0];
        shuffle($keuze);
        echo '<br>';
        echo'<form action="" method="POST" name="name1">'; 
            for($y=0; $y<count($keuze);$y++){
                 echo "<input type='radio'  name=vraag".$_GET['vraag']." value='$keuze[$y]' >". $keuze[$y];
                $score=0;
                 if ($goed == $keuze[$y]){
                    $score++; 

		}
                echo '<br>';
		}
                    
                echo '<br>';
               
            
         
        echo "<input type='submit' value='submit' ></form>";    
       echo "<input type='button' onclick='volgende()' value='volgende vraag'>";

    
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
//
//$sql = "SELECT `antwoord` FROM `quiz` WHERE vraagid = ". $row['id']."";
//$result2 = $conn->query($sql);
//for($a=0;$a<$result2->num_rows;$a++){
//   $row2 =$result2->fetch_assoc();
//   echo $row2; 
//}



$score=0; 

if ($_SESSION['vraag1'] == 'Zuid-Amerika'){
    
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

  echo $score;
                 

	
               

?>

    
<!--    <input type=button onClick="location.href='aardappelquiz.php'" value='klaar'>-->
      
<!--    <input type="button" onclick="volgende()" value="volgende vraag">-->
    <input type=button onClick="location.href='aardappelquiz.php'" value='klaar'>
</html>

<script>
    
    
    function volgende(){
        
        <?php
        $output = $_GET['vraag'];
        ++$output;
        
        if($output>5){
       echo "klaar";
            
        }
        ?>
                 
        var data = <?php echo json_encode($output, JSON_HEX_TAG); ?>;
        document.location='aardappelvragen.php?vraag='+data;
    }
    
    
    

  
    
</script>
        
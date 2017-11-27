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
                 echo "<input type='radio' name=vraag".$_GET['vraag']." value='$keuze[$y]'>". $keuze[$y];
                if ($goed == $keuze[$y]){
                    echo 'goede antwoord';
                }
                echo '<br>';
               
            }
            
        echo "<input onclick='volgende()' type='submit' value='submit' ></form>";    
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

echo $_SESSION['vraag1'];
echo "<br>";
echo $_SESSION['vraag2'];
echo "<br>";
echo $_SESSION['vraag3'];
echo "<br>";
echo $_SESSION['vraag4'];
echo "<br>";
echo $_SESSION['vraag5'];

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
        
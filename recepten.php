<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>


    <?php
    session_start();

    $host = "localhost";
    $databasename = "aardappelquiz";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $username, $password, $databasename);
    ?>
    <div id="hoofd" align=center>
        <br><br>
        <div id="kop">heerlijke aardappel recepten</div><br><br>



        <?php
//echo $_SESSION['naam'];



        $sql = "SELECT * FROM `amn_recepten`";
        $result = $conn->query($sql);

//        $recept = array($row3['titel'], $row3['personen'], $row3['ingredienten'], $row3['bereiding']);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                
                echo "<details><summary>".$row['titel']."<span align='right'><input type='button' id='weg' onClick='weg(".$row['id'].")' value='verwijder' style='float: right'></span> </summary>";
                echo "<p>"."aantal personen: <b>".$row['personen']."</b></p>" ; 
                echo "<p>"."ingredienten: <b>".$row['ingredienten']."</b></p>" ; 
                echo "<p>"."bereiding: <b>".$row['bereiding']."</b></p>" ; 
                $_GET['id']=$row['id'];
                echo "</details>";
               
            }
        } else {
            echo "0 results";
        }
        
     
 
    
        ?>
  <script>
    function weg(id){
        alert(id);
        window.location.href="aardappel.php?id="+id;
}

   
    </script>
       
        <br>
        <input id="knop" type=button onClick="location.href = 'aardappelquiz.php'" value='menu'>  
    </div>
</html>
<html>  
    <head>
        <script src="aardappel.js"></script>
        <link rel="stylesheet" type="text/css" href="aardappel.css">
    </head>
    <body>
<?php

    $host = "localhost";
    $databasename = "aardappelquiz";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $username, $password, $databasename);
?>
    <div id="hoofd" align=center hyphens="auto">
    <br><br>
    <div id="kop">heerlijke aardappel recepten</div><br><br>

<?php

        $sql = "SELECT * FROM `amn_recepten`";
        $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                
                echo "<details><summary>".$row['titel']."<span align='right'><input type='button' id='weg' onClick='weg(".$row['id'].")' value='verwijder' style='float: right'></span> </summary>";
                echo "<p>"."aantal personen: <b>".$row['personen']."</b></p>" ; 
                echo "<p>"."ingredienten: <b>".$row['ingredienten']."</b></p>" ; 
                echo "<p>"."bereiding: <b>".$row['bereiding']."</b></p>" ; 
                echo "</details>";             
            }
 
?>
       
            <br>
            <input id="knop" type=button onClick="location.href = 'aardappelquiz.php'" value='menu'>  
        </div>
    </body>
</html>

<?php

$host="localhost";
$databasename="aardappelquiz";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

    $sql2 = "DELETE FROM `amn_recepten` WHERE id='".$_GET['id']."'";
    $conn->query($sql2);
    header("Location: recepten.php");

?>


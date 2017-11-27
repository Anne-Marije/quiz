<?php
session_start();

$host="localhost";
$databasename="aardappel";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

$_SESSION['1'] = $_POST ['1'];
$_SESSION['2'] = $_POST ['2'];
$_SESSION['3'] = $_POST ['3'];
$_SESSION['4'] = $_POST ['4'];
$_SESSION['5'] = $_POST ['5'];

echo $_SESSION['1'];

?>

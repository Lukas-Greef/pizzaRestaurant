<?php
global $pdo;
include_once('toegoegen.php');
include_once('connect.php');

$sql = "INSERT INTO Menu(titel, prijs, beschrijving, img) VALUES (:titel, :prijs, :beschrijving, :img)";


$statement = $pdo->prepare($sql);



// Bind parameters
$statement->bindParam(":titel", $_POST['gerecht-naam']);
$statement->bindParam(":prijs", $_POST['prijs']);
$statement->bindParam(":beschrijving", $_POST['beschrijving']);
$statement->bindParam(":img", $_POST['img']);

$statement->execute();

?>

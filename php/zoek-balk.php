<?php

$conn = new PDO('mysql:dbname=Pizza toko;host=mysql_db','root' ,'rootpassword');
require_once 'connect.php';
$sql = "INSERT INTO Menu(titel, prijs, beschrijving, img) VALUES (:titel, :prijs, :beschrijving, :img)";
?>
<form action="" method="get">
<div class="zoekbalk-achtergrond center">
    <img class="logo-zoekbalk margin-left" src="afbeeldingen/zoekbalk-logo.jpeg" alt="een plaatje voor naast de zoekbalk">
    <input type="text" placeholder="Zoeken" name="zoekinput" class="zoeken margin-left font">
    <button type="submit">Zoeken</button>
</div>
</form>
<?php
if (isset($_GET['zoekinput'])) {
    $searchTerm = $_GET['zoekinput'];
    $searchQuery = "SELECT * FROM Menu WHERE titel LIKE :zoekeninput";
    $stmt_search = $pdo->prepare($searchQuery);
    $searchParam = "%" . $searchTerm . "%";
    $stmt_search->bindParam(":zoekeninput", $searchParam);
    $stmt_search->execute();
} else {
    $stmt_all = $pdo->query("SELECT * FROM Menu");
}
?>


<?php
    if (isset($stmt_search)) {
        while ($Menu = $stmt_search->fetch()) {
            displayMenu($Menu);
        }
    } elseif (isset($stmt_all)) {
        while ($Menu = $stmt_all->fetch()) {
            displayMenu($Menu);
        }
    }
    ?>



<?php

$sql = "INSERT INTO Menu(titel, prijs, beschrijving, img) VALUES (:titel, :prijs, :beschrijving, :img)";

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $searchQuery = "SELECT * FROM Menu WHERE titel LIKE :zoekeninput";
    $stmt_search = $pdo->prepare($searchQuery);
    $searchParam = "%" . $searchTerm . "%";
    $stmt_search->bindParam(":zoekinput", $searchParam);
    $stmt_search->execute();
} else {
    $stmt_all = $PDO->query("SELECT * FROM Menu");
}
?>
<div class="zoekbalk-achtergrond center">
    <img class="logo-zoekbalk margin-left" src="afbeeldingen/zoekbalk-logo.jpeg" alt="een plaatje voor naast de zoekbalk">
    <input type="text" placeholder="Zoeken" name="zoekinput" class="zoeken margin-left font">
</div>


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



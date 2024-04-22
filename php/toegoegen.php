<?php

session_start();

if (!isset($_SESSION['mail'])) {
    header("Location:login.php");
}
?>
<h2>Gerecht Toevoegen</h2>
<form method="post" action="http://localhost:8000/add-logic.php">
    Gerecht Naam: <input type="text" name="gerecht-naam"><br>
    Beschrijving: <input type="text" name="beschrijving"><br>
    Prijs: <input type="number" name="prijs" step="0.01"><br>
    Img:<input type ="text" name="img"><br>
    <input type="submit" value="Toevoegen"><br>
    <a class="login-text margin-top" href="index-admin.php">Terug</a>

</form>




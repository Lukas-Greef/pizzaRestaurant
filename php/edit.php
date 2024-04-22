
<?php
$conn = new PDO('mysql:dbname=Pizza toko;host=mysql_db','root' ,'rootpassword');

$sql = "SELECT titel FROM Menu";
$result = $conn->query($sql);


?>
<form method="post" >
    Gerecht Naam: <input type="text" name="gerecht-naam"><br>
    Beschrijving: <input type="text" name="beschrijving"><br>
    Prijs: <input type="number" name="prijs" step="0.01"><br>
    Img:<input type ="text" name="img"><br>
    <input type="submit" name="submit-boetoen" value="edit"><br>
    <a class="login-text margin-top" href="index-admin.php">Terug</a>

</form>
<?php
var_dump($_POST);
if (isset($_POST["submit-boetoen"])) {
    $sql = "UPDATE Menu
            SET titel = :titel,
                prijs = :prijs,
                beschrijving = :beschrijving,
                img = :img
            WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->bindParam(":titel", $_POST['gerecht-naam']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":img", $_POST['img']);

    $stmt->execute();
}
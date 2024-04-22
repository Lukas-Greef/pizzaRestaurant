<?php

$conn = new PDO('mysql:dbname=Pizza toko;host=mysql_db','root' ,'rootpassword');


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_to_delete = $_GET['id'];

    $sql = "DELETE FROM Menu WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':id', $id_to_delete, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Item succesvol verwijderd.";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van het item: " ;
    }

    $stmt->closeCursor();
} else {
    echo "Geen id verzonden om te verwijderen.";
}

$conn = null;
?>
<html>
<body>
<a class="login-text" href="index-admin.php">Terug</a>
</body>
</html>

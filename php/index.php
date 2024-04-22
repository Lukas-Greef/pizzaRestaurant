



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <title>Home</title>
</head>

<body>
<div class="main">
<?php include_once('header.php') ?>
<?php include_once('zoek-balk.php') ?>
<?php include_once('opties.php') ?>

    <div class="gerecht">
        <img class="img-order border-radius-twee" src="afbeeldingen/extra-tomaat.jpeg" alt="foto pizza"/>
        <div class="flex-colum">
            <div class="title font">
                Extra Tomaat
            </div>
            <div class="beschrijving text-cat margin-top-">
                tomaat
            </div>
            <div class="beschrijving text-cat margin-top-">
                tomaat
            </div>
            <div class="bestel margin-top-">
                10,99
            </div>
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


<?php
function displayMenu($Menu) {
    echo "<div class='gerecht'>";
    echo "<div class='font title'>" . $Menu['titel'] . "</div>";
    echo "<div class='beschrijving text-cat margin-top-'>" . $Menu['beschrijving'] . "</div>";
    echo "<div class='bestel margin-top-'>Price: $" . $Menu['prijs'] . "</div>";
    if (!empty($Menu['image'])) {
        echo "<img class='img-order border-radius-twee' width='140' style='margin-top: 12px;' src='pics/" . $Menu['image'] . "' />";
    }
    echo "</div>";
}
?>


    </div>
</body>
</html>
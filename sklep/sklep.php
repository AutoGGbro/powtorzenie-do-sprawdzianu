<?php
    session_start();
    if (isset($_GET['produkt'])) {
        $produkt = $_GET['produkt'];
        $_SESSION['koszyk'] = $produkt;
        echo $_SESSION['koszyk'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sklep.php?produkt=telefon">telefon</a>
    <a href="sklep.php?produkt=komputer">komputer</a>
    <a href="sklep.php?produkt=klawiatura">klawiatura</a>
</body>
</html>
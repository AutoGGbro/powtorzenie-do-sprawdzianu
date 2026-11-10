<?php
    // echo date('Y-m-d h:i:s');
    $weekend = strtotime("next friday 13:45");
    $teraz = time();

    $roznica = $weekend - $teraz;
    $minuty = $roznica / 60;
    $godziny = $minuty / 60;
    $dni = $godziny / 24;

    echo "minuty: " . $roznica . "</br> godziny: " . $godziny . "</br> dni: " . $dni;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
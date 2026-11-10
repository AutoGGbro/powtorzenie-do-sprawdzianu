<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function losowanie() {
            $losowanaLiczba = rand(1, 30);
            if () {
                # code...
            }
        }
        function wstawienie() {
            $wylosowanaTablica[] = $losowanaLiczba;
        }

        function () {

        }
        for ($i=1; $i<6 ; $i++) { 
        $losowanaLiczba = rand(1, 30);
        if (in_array($losowanaLiczba, $wylosowanaTablica)) {
            $losowanaLiczba = rand(1, 30);
            $wylosowanaTablica[] = $losowanaLiczba;

        }

        }
        print_r($wylosowanaTablica);

    ?>


</body>
</html>
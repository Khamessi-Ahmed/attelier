<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nombre = rand(1,50);  

while ($nombre % 2 != 0) {
    $nombre = rand(1, 50);
}

echo "Le premier nombre pair est : " . $nombre;

?>

</body>
</html>
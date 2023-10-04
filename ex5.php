<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tva=0.2;
    $prix=150;
    $nombre=10;
    $prixht= $prix*$nombre;
    $prixttc=$prixht +($prixht*$tva);

echo "<h1>calcule sur les variable</h1>";

echo "le prix ht est  $prixht  <br>";
echo"leprix ttc est $prixttc";


?>
</body>

</html>
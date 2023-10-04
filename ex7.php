<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 11;
$b = 5;

$c = $a <=> $b;

switch ($c) {
    case -1:
        echo "$a est  inferieur a  $b";
        break;
    case 0:
        echo "$a est egale $b";
        break;
    case 1:
        echo "$a est superieur $b";
        break;
    default:
        echo "ereur";
        break;
}
?>

</body>
</html>
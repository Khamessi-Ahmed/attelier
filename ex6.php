<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo '<input type="number" id="1">
    <p>+</p>
    <input type="number" id="2">
    <input type="button" value="Calculer" id="cal">
    <p id="p"></p>';

    echo '<script>
        var a, b;
        var c = document.getElementById("cal");
        var p = document.getElementById("p");

        c.addEventListener("click", calculer);

        function calculer() {
            a = Number(document.getElementById("1").value);
            b = Number(document.getElementById("2").value);
            var res = a + b;
            p.innerHTML = "Le résultat est " + res;
        }
    </script>';
?>
</body>
</html>

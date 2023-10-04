<!DOCTYPE html>
<html>
<head>
    <title>Ex4</title>
</head>
<body>
   
    <?php
    
    $nom = "CHERIF";
    $pre = "Nidhal";
    echo "nom: $nom prénom: $pre<br>";   
    echo "nom: $nom<br>";
    echo "Prénom: $pre<br>";
    echo "<table border='1'>
            <tr>
                <td>nom</td>
                <td>prénom</td>
            </tr>
            <tr>
                <td>$nom</td>
                <td>$pre</td>
            </tr>
          </table>";
          $info=$nom.$pre;
          echo'<script>
          alert("L\'info est ' . $info . '");
      </script>';

    ?>

</body>
</html>

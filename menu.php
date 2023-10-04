<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

 echo '
 <input type="button" value="menu" id="cal">
 <p id="p"></p>';

 echo '<script>
      var c = document.getElementById("cal");
      var p = document.getElementById("p");
 
      c.addEventListener("click", display_menu);
 
      function display_menu() {
          p.innerHTML = \'<a href="ex1.php">exercice 1</a><br>\' +
                       \'<a href="ex2.php">exercice 2</a><br>\' +
                       \'<a href="ex3">exercice 3</a><br>\' +
                       \'<a href="ex4.php">exercice 4</a><br>\' +
                       \'<a href="ex5.php">exercice 5</a><br>\' +
                       \'<a href="ex6.php">exercice 6</a><br>\' +
                       \'<a href="ex7.php">exercice 7</a><br>\' +
                       \'<a href="ex8.php">exercice 8</a><br>\' +
                       \'<a href="ex9.php">exercice 9</a><br>\' +
                       \'<a href="ex10.php">exercice 10</a>\';
      }
 </script>';
 ?>
    
    
</body>
</html>
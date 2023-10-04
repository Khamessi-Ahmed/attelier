<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu des exercices</h1>

    <?php
    include('menu.php'); 

    

    echo '<script>
         var c = document.getElementById("cal");
         var p = document.getElementById("p");

         c.addEventListener("click", display_menu); 

         function display_menu() {
             
             ';
   
    display_menu();
   
    echo '
         }
    </script>';
    ?>
</body>
</html>

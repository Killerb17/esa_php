<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAMIER</title>
   
</head>
<body>

<?php
for ($i=0; $i<=7; $i++) {
    echo "<div style='clear:both'> ";

    for ($j=0;$j<=7; $j++){
         if(($i+$j)% 2 == 0){
            echo"<div style='border: solid 2px ; width: 50px;height: 50px;
                background-color: black; float: left'> </div>";
            } else {
                echo "<div style=' border: solid 2px; width: 50px;height: 50px;
                background-color: white; float: left'> </div>";
            }
            
         }
         echo "</div>";
    }

?>

</body>
</html>



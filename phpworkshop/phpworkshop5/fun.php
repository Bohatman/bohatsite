<?php 
    $cal = parseInt($_POST["value"]);
    $c =1;
    while($c!=13)
    {
        echo "".$cal."*".$c."=";
        echo $cal*$c++;
        echo "<br>";
    }
?>
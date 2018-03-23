<?php 
    $cal = $_POST["value"];
    $c =1;
    while($c!=13)
    {
        echo "".$cal."*".$c."=";
        echo $cal*$c;
        $c+=1;
        echo "<br>";
    }
?>
<?php 
$n = count($_POST["c"]);
echo $n;
for($i =0;$i<$n;$i++){
    echo $_POST["c"][$i] . "<BR>";
}

?>
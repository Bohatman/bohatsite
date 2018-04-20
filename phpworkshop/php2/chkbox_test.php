<?php 
$n = count($_post["c"]);

for($i = 0 ; $i<$n;$i++){
    echo $_post["c"][$i]."<BR>";
}

?>
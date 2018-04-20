<?php 
$n = count($_post["c"]);
echo "Iam";
for($i = 0 ; $i<$n;$i++){
    echo $_post["c"][$i]."<BR>";
}

?>
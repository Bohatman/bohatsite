<?php 
$n = count($_post["c"]);
echo "Iam";
echo $_POST["c"][0];
for($i = 0 ; $i<$n;$i++){
    echo $_post["c"][$i]."<BR>";
}

?>
<html>
<head><meta charset="uft-8" />
<title>Chapter 9 การจัดารไฟล์และไดเรกทอรี</title>
</head>
<body>
<h1>FREE SPACE</h1>
<hr/>
<form action="" method="post">
<button name = "Go">กดเพื่อเพิ่มข้อมูล</button></form>
<?php 
$handle1=fopen("text.txt","r");
$content = fpassthru($handle1);
echo $content;
fclose($handle1);
if($_SERVER['REQUEST_METHOD']=="post" and isset($_POST['Go'])){
    wF();
}
function wF(){
    $handle2 = fopen("text.txt","w");
    fputs($handle2, "<br> Add Add Add");

}
?>
</body>
</html>
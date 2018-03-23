<html>
<head><meta charset="uft-8" />
<title>Chapter 9 การจัดารไฟล์และไดเรกทอรี</title>
</head>
<body>
<h1>FREE SPACE</h1>
<hr/>
<?php 
$handle1=fopen('text.txt','r');
$content = fread($handle1, 50);
echo $content;
fclose($handle1);
?>
</body>
</html>
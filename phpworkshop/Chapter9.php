<html>
<head><meta charset="uft-8" />
<title>Chapter 9 การจัดารไฟล์และไดเรกทอรี</title>
</head>
<body>
<?php 
$handle1=fopen('text.txt','r');
$content = fread($handle1, 50);
echo $content;
?>
</body>
</html>
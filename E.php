<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$text = "Kampus saya adalah STEKOM";
	echo "sebelum MDS:".$text ;
	echo "<br><br>Hasil MDS:".md5($text);
echo"</b>";
?>
</body>
</html>
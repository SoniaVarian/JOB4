<html>
<head>
<title>MENGENAL FUNNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
$pesan = "<div style=\" font-size:70\">Hacked</div>";
echo"$pesan <br>"; // sebelum strip_tags()
echo strip_tags($pesan) ; // sesudah strip_tags()
echo"</br>";
?>
</body>
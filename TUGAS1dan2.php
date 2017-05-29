<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
	;
	$text[0]="<b><u>PHP</u></b>pertama kali dibuat oleh <b><i>**Rasmus Lerdorf**</i></b> pada tahun 1995.";
	$text[1]="Pada waktu itu <b><u>PHP</u></b> bernama FI(Form Interpected).Pada saat tersebut <b><u> PHP</u></b>";
	$text[2]="adalah sekumpulan script yang digunakan untuk mengolah data form dari web";
	
	echo "<br><h2> Tugas 4 </h2>
	".str_replace(" ","",$text[0])."<br>
	".str_replace(" ","",$text[1])."<br>
	".str_replace(" ","",$text[2])."<br>";
?>

<?php

	$text[0]="PHP <b>PERTAMA</b> kali <b>DIBUAT</b> oleh <b>Rasmus</b> Lerdorf <b>PADA</b> tahun <b>1995.</b>";
	$text[1]="Pada <b>WAKTU</b> itu <b>PHP</b> bernama <b>F1</b> (Form <b>INTERPRETED</b>). Pada <b>SAAT</b> tersebut <b>PHP</b>";
	$text[2]="Adalah <b>SEKUMPULAN</b> script <b>YANG</b> digunakan <b>UNTUK</b> mengolah <b>DATA</b> form <b>DARI</b> web";
	
	echo "<br>
	".trim($text[0])."<br>
	".trim($text[1])."<br>
	".trim($text[2])."<br>";
?>


</body>
</html>

<html style="margin: 0px; line-height: 1.5; text-align: center;">
	<head>
		<title>Para Üstü</title>
	</head>
	<body style="text-align:center ; background: #e7eff8; border: 2px solid #e66465 ";>
			<table style="margin: 0px; line-height: 1.5; text-align: center;">
		<form action="4para.php" method="post">
  	<tr>
    	<td>Alışveriş Tutarı =></td>
    	<td><input name="tuttu" type="text"/></td>
  	</tr>
  	<tr>
    	<td>Ödenen Para =></td>
    	<td><input name="miktar" type="text"/></td>
  	</tr>
  	<tr>
    	<td>&nbsp;</td>
    	<td><input name="gonder" type="submit" value="Para Üstü" /></td>
  	</tr>
			</table>
		</form>

<?php 
$tuttu=$_POST['tuttu'];
$odendi=$_POST['miktar'];
echo "********************** <br>"; 
echo "Alışveriş Tutarı => ".$tuttu."<br>";
echo "********************** <br>"; 
echo "Ödenen Tutar => ".$odendi."<br>";
echo "********************** <br>";
$para=$odendi-$tuttu;
echo "Para Üstü => ".$para."<br>";
echo "********************** <br>"; 

if($para >=0 ){
	$birlira=floor($para/1.00);
	echo "1 TL	x ".$birlira."<br>";
	echo "********************** <br>"; 
	$para=$para-$birlira;
	$ellikurus=floor($para/0.50);
	echo "			50 Krş x ".$ellikurus."<br>";
	echo "********************** <br>"; 
	$para=$para-$ellikurus;
	$yirmibes=floor($para/0.25);
	echo "			25 Krş x ".$yirmibes."<br>";
	echo "********************** <br>"; 
	$para=$para-$yirmibes;
	$beskurus=floor($para/0.05); 
	echo "			5 Krş x ".$para."<br>";
	echo "********************** <br>"; 
	$para=$para-$beskurus;
	$para=floor($para/0.01);
	echo "			1 Krş x ".$para."<br>";
	echo "********************** <br>";
}
elseif ($para<0){
	echo "Para yetmedi :D ";
}
?>

</body>
</html>

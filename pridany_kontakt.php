
<?php
include ("config.php");
$meno =$_POST["meno"]; 
$email =$_POST["email"]; 
$predmet=$_POST["predmet"]; 
$sprava=$_POST["sprava"]; 
//mysql_connect("localhost","root","") or die ("conect error");
//mysql_select_db ("zaklad") or die ("nepodarilo sa otvorit databazu");
$var = mysqli_connect("$localhost","$user","$password","$db") or die ("connect error");
$sql = "insert into `imapl_kontakt` (`meno`,`email`,`predmet`,`sprava`)
values ('$meno','$email','$predmet','$sprava')";
//$res = mysql_query($sql) or die ("registration error");
$res = mysqli_query($var,$sql) or die ("registration error");



echo "<font color=\"black\"><br><strong>Vaša správa bola úspešne odoslaná </strong>";

echo "<meta http-equiv=\"refresh\" content=\"1;URL=contact.html>";
echo "";
?>



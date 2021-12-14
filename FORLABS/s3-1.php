<!DOCTYPE html>
<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>
<html>
<head>
	<title>Логинова А.В.</title>
<body bgcolor="#F08080">
</head>
<body>
 <h1>Задание №3.1</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите число A:  <INPUT type="text" name="a" size="5">
 Введите число B:  <INPUT type="text" name="b" size="5">
 <P> <INPUT type="submit" name="result" value="Сравнить">
</FORM>

<?php
if (isset($_POST["result"])) {

if ($_POST["a"]>$_POST["b"]) { echo("Наибольшее число: ".$_POST["a"]);}
else if($_POST["b"]>$_POST["a"]){ echo("Наибольшее число:".$_POST["b"]);}
else if($_POST["b"]==$_POST["a"]){ echo("Числа равны.");}
}
?>

</body>
</html>

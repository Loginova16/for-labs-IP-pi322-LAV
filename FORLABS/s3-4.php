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
 <h1>Задание №3.4</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин:  <INPUT type="text" name="login" size="3">
 <P> <INPUT type="submit" name="enter" value="Войти">
</FORM>

<?php
if (isset($_POST["enter"])) {
if($_POST["login"]=="Loboradoria") {echo "Здравствуйте, Лобная ДОЛЯ!!!!";}
else if($_POST["login"]=="Davai") {echo "Здравствуйте, Давай Давай!";}
else if($_POST["login"]=="Lukash") {echo "Здравствуйте, таракашка Таракашкович";}
else if($_POST["login"]=="Tadjik") {echo "Здравствуйте, Мужик по фамилии Таджик!";}
else {echo "Такой пользователь не зарегестрирован на сайте.";}
}
?>

</body>
</html>

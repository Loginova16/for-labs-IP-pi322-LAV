<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<?php
 $conn = mysqli_connect("sql11.freemysqlhosting.net","sql11466478","vbqFjsYdN9", "sql11466478") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<H2>Добавление новой записи:</H2>
<form action="save_new_app.php" metod="get">

<?php
print "<br>id Языка программирования: <select name='id_pl'>";
$result=mysqli_query($conn, "SELECT * FROM pl");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<?php
print "<br>id Разработчика: <select name='id_developer'>";
$result=mysqli_query($conn, "SELECT * FROM developer");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<br>Дата создания: <input name="date" type="date">
<br>Текущая версия: <input name="ver" size="20" type="text">
<br>Название: <input name="name" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p><a href="index.php"> Вернуться </a>
</body>
</html>

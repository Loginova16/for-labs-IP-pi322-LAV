<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once('connect.php');

if(isset($_GET['add'])){
$lang_name = $_GET['name'];
$lang_type = $_GET['type'];
$lang_year = $_GET['year'];
$lang_proc = $_GET['proc'];
$lang_autor = $_GET['autor'];


$sql_add = "INSERT INTO `lang` (`lang_name`, `lang_type`, `lang_year`, `lang_proc`, `lang_autor`)
VALUES ('$lang_name', '$lang_type', '$lang_year', '$lang_proc', '$lang_autor')";

 if(mysqli_query($connection, $sql_add))
 { print "<p>Язык добавлен!";
 print "<p><a href=\"index.php\"> Вернуться в меню</a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }}


 if(isset($_GET['add_raz'])){
    $name = $_GET['name'];
    $city = $_GET['city'];
    $sql_add = "INSERT INTO `razrab` (`name`, `city`)
    VALUES ('$name', '$city')";
    if(mysqli_query($connection, $sql_add))
    { print "<p>Разработчик добавлен!";
    print "<p><a href=\"index.php\"> Вернуться в меню</a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }}

  if(isset($_GET['add_app'])){
    $ID_razrab = $_GET['raz_id'];
    $ID_lang = $_GET['lang_id'];
    $Date = $_GET['data'];
    $Version = $_GET['vers'];
    $Name = $_GET['name'];
    $sql_add = "INSERT INTO `application` (`ID_lang`, `ID_razrab`, `Date`, `Version`, `Name`)
    VALUES (".$ID_lang.",".$ID_razrab.",'$Date','$Version','$Name')";
    if(mysqli_query($connection, $sql_add))
    { print "<p>Приложение добавлено!";
    print "<p><a href=\"index.php\"> Вернуться в меню</a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }}
?>

<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html><body>
<?php
 $conn = mysqli_connect("sql11.freemysqlhosting.net","sql11466478","vbqFjsYdN9", "sql11466478") or die ("���������� ������������ � �������");
 mysqli_query($conn , 'SET NAMES cp1251');
 $zapros="UPDATE pl SET name='".$_GET['name'].
"', type='".$_GET['type']."', year='"
.$_GET['year']."', exec='".$_GET['exec'].
"', dev='".$_GET['dev']."' WHERE id='"
.$_GET['id']."'";
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>
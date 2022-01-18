<?

require_once('connect.php');
$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM razrab WHERE `razrab`.`ID_razrab` = '$id'");

header("Location: index.php");

?>

<?

require_once('connect.php');
$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM application WHERE `application`.`ID` = '$id'");

header("Location: index.php");

?>

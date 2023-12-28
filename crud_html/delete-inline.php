 <?php
require "deep.php";

$stu_id = $_GET['id'];

$stem = "DELETE FROM `data` WHERE id = '$stu_id'";
$result = $conn->query($stem) or die("Query Unseccssful");

header("Location:http://localhost/crud_html/index.php");

mysqli_close($conn);

?>
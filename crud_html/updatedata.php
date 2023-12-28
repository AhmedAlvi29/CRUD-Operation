<?php require "deep.php";?>
<?php include 'edit.php'; ?>

<?php
$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['adsress'];
$phone = $_POST['phone'];

$sql2 = "UPDATE data SET name = '{$name}',adsress = '{$address}',class_id = '{$class}',phone = '{$phone}' WHERE id = {$id} ";
$result = mysqli_query($conn, $sql2) or die("Query Unseccfull");

header("Location: http://localhost/crud_html/index.php");

$conn->close();
?>
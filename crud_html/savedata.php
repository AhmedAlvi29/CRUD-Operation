<?php include 'deep.php'; ?>
<?php

$name = $_POST['name'];
$address = $_POST['adsress'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$sql = "INSERT INTO data(name,adsress,class_id,phone) VALUES('$name','$address','$class','$phone')";

$result = $conn->query($sql);

header("Location:http://localhost/crud_html/index.php");
?>
<?php

 $stu_name = $_POST['s_name'];
 $stu_address = $_POST['s_address'];
 $stu_class = $_POST['s_class'];
 $stu_phone = $_POST['s_phone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student(s_name,s_address,s_class,s_phone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: index.php");

mysqli_close($conn);

?>

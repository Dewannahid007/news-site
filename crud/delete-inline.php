<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE s_id = {$stu_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($con);

?>

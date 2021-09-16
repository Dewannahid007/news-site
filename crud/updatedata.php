<?php
$stu_id = $_POST['s_id'];
$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_class = $_POST['s_class'];
$stu_phone = $_POST['s_phone'];

include 'config.php';

$sql = "UPDATE student SET s_name = '{$stu_name}', s_address = '{$stu_address}',s_class = '{$stu_class}', s_phone = '{$stu_phone}' WHERE s_id = {$stu_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location:index.php");

mysqli_close($con);

?>

<?php
include "config.php";
if($_SESSION['user_role']=='0'){

    header("location: http://localhost/php-project/news-template/admin/post.php");
    
    }
$userid= $_GET['id'];
$sql="DELETE FROM user where user_id ={$userid}";
if(mysqli_query($conn,$sql)){
    header("location:http://localhost/php-project/news-template/admin/users.php");
    
}
else{
    echo "<p style='color:red margin:10px 0px; '> can't Delete </p>";
}



?>
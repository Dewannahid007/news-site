<?php
include "config.php";
if(isset($_FILES['fileToUpload'])){
    $errors=array();

    $file_name=$_FILES['fileToUpload'] ['name'];
    $file_size=$_FILES['fileToUpload'] ['size'];
    $file_tmp=$_FILES['fileToUpload'] ['tmp_name'];
    $file_type=$_FILES['fileToUpload'] ['type'];
    $file_ext= strtolower(end(explode('.',$file_name)));
    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)===false){

        $errors[]="this extension file is not allowed";
    }
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
    
}
session_start();
$title= mysqli_real_escape_string($conn,$_POST['post_title']);
$description=mysqli_real_escape_string($conn,$_POST['postdesc']);
$category=mysqli_real_escape_string($conn,$_POST['category']);
$date =date("d M, Y");
$author=$_SESSION['user_id'];
$sql="INSERT INTO post(title,description,category,post_date,author,post_img) values ('{$title}','{$description}',{$category},'{$date}','{$author}','{$file_img}');";
$sql .="UPDATE category SET post =post+1 where category_id={$category}";
if(mysqli_multi_query($conn,$sql)){
    header("location: http://localhost/php-project/news-template/admin/post.php");

}
else {
   echo " <div class =' alert alert-danger';> can't run query </div>";
}



?>
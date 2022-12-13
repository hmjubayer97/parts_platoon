<?php 
session_start();
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


if(isset($_POST['submit'])){
    echo $title =$_POST['title'];
    
  $sql= "INSERT INTO type(name) VALUES ('$title')";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']="Type Added Successfully";
    header("Location: ../type_read.php");

  }
  else{
    $_SESSION['status']="Type Adding Failed";
    header("Location: ../type_read.php");
  }
}

if(isset($_POST['update'])){
  $id =$_POST['id'];
  $title =$_POST['title'];
  

$sql= "UPDATE type set name='$title' where id='$id'";
if(mysqli_query($conn,$sql) == TRUE){
 
  $_SESSION['status']=" Updated Successfully";
  header("Location: ../type_read.php");

}
else{
  $_SESSION['status']="updating Failed";
  header("Location: ../type_read.php");
}
}

if(isset($_POST['delete'])){
  $id =$_POST['d_id'];
  $sql="DELETE from type where id=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']=" Deleted Successfully";
    header("Location: ../type_read.php");

  }
  else{
    $_SESSION['status']="Category Deleting Failed";
    header("Location: ../type_read.php");
  }

}
?>
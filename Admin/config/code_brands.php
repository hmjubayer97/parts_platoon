<?php 
session_start();
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


if(isset($_POST['submit'])){
    echo $title =$_POST['title'];
    
  $sql= "INSERT INTO brands(name) VALUES ('$title')";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']="Brands Added Successfully";
    header("Location: ../brands_read.php");

  }
  else{
    $_SESSION['status']="Brands Adding Failed";
    header("Location: ../brands_read.php");
  }
}

if(isset($_POST['update'])){
  $id =$_POST['id'];
  $title =$_POST['title'];
  

$sql= "UPDATE brands set name='$title' where id='$id'";
if(mysqli_query($conn,$sql) == TRUE){
 
  $_SESSION['status']=" Updated Successfully";
  header("Location: ../brands_read.php");

}
else{
  $_SESSION['status']="Category updating Failed";
  header("Location: ../brands_read.php");
}
}

if(isset($_POST['delete'])){
  $id =$_POST['d_id'];
  $sql="DELETE from brands where id=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']=" Deleted Successfully";
    header("Location: ../brands_read.php");

  }
  else{
    $_SESSION['status']="Category Deleting Failed";
    header("Location: ../brands_read.php");
  }

}
?>
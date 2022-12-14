<?php 
session_start();
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


if(isset($_POST['submit'])){
    echo $name =$_POST['name'];
    
    echo $price =$_POST['price'];
    
    echo $type =$_POST['type'];
    echo $brand =$_POST['brand'];
   echo $imege =  $_FILES['file']['name'];
   echo $status =  $_POST['Stock_status'];
   $tmpname =  $_FILES['file']['tmp_name'];
   $uploc = '../imeges/'.$imege;
   $uploadOk=1;
   $imageFileType= strtolower(pathinfo($imege,PATHINFO_EXTENSION));
   if(file_exists($uploc)){
       $uploadOk=0;
       $_SESSION['status']="File allready  exist";
       header("Location: ../product_read.php");

   }
   if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
       $uploadOk=0;
       $_SESSION['status']="Only jpg,png and jpeg required";
       header("Location: ../product_read.php");
   }
   if($uploadOk==1){
    $sql= "INSERT INTO `products`( `name`, `type`, `brands`, `price`, `imege`, `status`) VALUES ('$name','$type','$brand','$price','$imege','$status')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
      $_SESSION['status']="Product Added Successfully";
      header("Location: ../product_read.php");
  
    }
    else{
      $_SESSION['status']="Product Adding Failed";
      header("Location: ../product_read.php");
    }
   }
   
 }
   
  

if(isset($_POST['update'])){
  echo $name =$_POST['name'];
    
  echo $price =$_POST['price'];
  
  echo $type =$_POST['type'];
  echo $brand =$_POST['brand'];

 echo $status =  $_POST['Stock_status'];
    
  //  $image =  $_FILES['file']['name'];
  //  $status =  $_POST['Stock_status'];
  //  $tmpname =  $_FILES['file']['tmp_name'];
  //  $uploc = 'imeges/'.$image;
  $sql= "UPDATE products set name='$name',price='$price',brands='$brand',type='$type',status='$status' where id='$id'";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']="Product Updated Successfully";
    header("Location: ../product_read.php");

  }
  else{
    $_SESSION['status']="Product Adding Failed";
    header("Location: ../product_read.php");
  }
}

if(isset($_POST['delete'])){
  $id =$_POST['d_id'];
  $sql ="SELECT * from products where id= $id";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
     $imege=$rows ['imege'];

     
  $sql="DELETE from products where id=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    unlink("../imeges/".$imege);
    $_SESSION['status']="Product Deleted Successfully";
    header("Location: ../product_read.php");

  }
  else{
    $_SESSION['status']="Product Deleting Failed";
    header("Location: ../product_read.php");
  }

}
}
}
else{
   die("Can not execute query");
}


?>
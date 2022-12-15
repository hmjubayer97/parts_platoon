<?php 
session_start();
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


if(isset($_POST['submit'])){
    echo $name =$_POST['name'];
    
    
   echo $imege =  $_FILES['file']['name'];
   
   $tmpname =  $_FILES['file']['tmp_name'];
   $uploc = '../imeges/'.$imege;
   $uploadOk=1;
   $imageFileType= strtolower(pathinfo($imege,PATHINFO_EXTENSION));
   if(file_exists($uploc)){
       $uploadOk=0;
       $_SESSION['status']="File allready  exist";
       header("Location: ../asmb_read.php");

   }
   if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
       $uploadOk=0;
       $_SESSION['status']="Only jpg,png and jpeg required";
       header("Location: ../asmb_read.php");
   }
   if($uploadOk==1){
    $sql= "INSERT INTO `ambas`( `name`,`imege`) VALUES ('$name','$imege')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
      $_SESSION['status']="Ambassadors Added Successfully";
      header("Location: ../asmb_read.php");
  
    }
    else{
      $_SESSION['status']="Ambassadors Adding Failed";
      header("Location: ../asmb_read.php");
    }
   }
   
 }
   
  



 if(isset($_POST['del'])){
   
    $id =$_POST['d_id'];
    $sql ="SELECT * from ambas where id= $id";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
 while( $rows = mysqli_fetch_array( $data ) ) 
 {
    $imege=$rows ['imege'];

    

   $sql="DELETE from ambas where id=$id";
   if(mysqli_query($conn,$sql) == TRUE){
     unlink("../imeges/".$imege);
     $_SESSION['status']="Ambassadors Deleted Successfully";
     header("Location: ../asmb_read.php");
 
   }
   else{
     $_SESSION['status']="Ambassadors Deleting Failed";
     header("Location: ../asmb_read.php");
   }
 
 }
}
}
else{
  die("Can not execute query");
}


?>
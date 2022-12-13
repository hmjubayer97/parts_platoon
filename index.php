<?php 
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <?php include "includes/header.php" ?>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home - Parts Platoon</title>
</head>
<body>

    <?php include "includes/navbar.php" ?>

        <!-- Slider -->
        <div class="slider1">
   <?php 

$sql ="SELECT imege from slider";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>

<div class="card" style="width:18rem;background-color:black; padding:10px; color:white; ">

  <img src="Admin/imeges/<?php echo $rows ['imege']?>" class="card-img-top" style="height:600px;" alt="...">

</div>

<?php
    }
}
else{
   die("Can not execute query");
}
?>	
   </div>
</body>
</html>
<script src="https://kit.fontawesome.com/a3253ecb96.js" crossorigin="anonymous"></script>
<?php include "includes/footer.php" ?>
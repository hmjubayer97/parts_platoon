
<?php 
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


?>

<?php
$brand = $_GET["brand"];
$All = "All_product";
?>

<?php include "includes/header.php" ?>  
<?php include "includes/navbar.php" ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row mt-4" style="padding:20px;">
    
<?php 
 $sql ="SELECT * from products where brands = '$brand' or type='$brand' or name='$brand' or name like'%%$brand%%' or name like'$brand%%' or name='$brand' or '$All'='$brand' ";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>

            <div class="col-md-4 col-lg-3 col-12" style="padding:20px;">
                <div class="card container" style="width: 14rem; color:white;">
                      <a href="purchase.php?id=<?php echo $rows ['id']?>"><img style="height:200px;" src="Admin/imeges/<?php echo $rows ['imege']?>" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                        <span style="color:black;"><?php echo $rows ['name']?></span> 
                        <span style="color:black;">Brand: <?php echo $rows ['brands']?></span> 
                        <h4 style="color:black;">Tk.<?php echo $rows ['price']?></h4> 
                           
                            
                        </div>
                </div>
            </div>

<?php
    }
}
else{
    ?>
     <h2>!Sorry.No Products found</h2>
    <?php
}
?>		
    </div>
    </div>
</body>



</html>
<?php include 'includes/footer.php';?>
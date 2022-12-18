<?php 

$id=$_GET["id"];
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}


?>


<?php include "includes/header.php" ?>  
<?php include "includes/navbar.php" ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puchase -Parts_platoon</title>
</head>
<body>
  

<div class="container">
            <?php 
            $sql ="SELECT * from products where id='$id'";
            $data = mysqli_query($conn, $sql);
            $check_result= mysqli_num_rows($data)> 0;
            if($check_result){
            while( $rows = mysqli_fetch_array( $data ) ) 
            {
            ?>

        <div class="row mt-5">
            
            <div class="col-md-6 col-12">
            <form action="config/code_cart.php" method="POST" enctype="multipart/form-data">
              <img name="file" style="width:100%;" src="Admin/imeges/<?php echo $rows ['imege']?>" alt="">
              <input name="image" type="hidden" value="<?php echo $rows ['imege']?>" >

          </div>
          <div class="col-md-4 col-12" style="color:white; padding-top:50px;align-items:center;">
          <strong><h1>About the product</h1></strong> 
              <strong>
                  <h4 style="color:black;" name="name">Product name:  <?php echo $rows ['name']?></h4>
                  <h5 style="color:black;" name="name">Brand name:  <?php echo $rows ['brands']?></h5>
                  <input name="name"type="hidden" value="<?php echo $rows ['name']?>" >
                  <input name="brands"type="hidden" value="<?php echo $rows ['brands']?>" >
                  <input name="id"type="hidden" value="<?php echo $rows ['id']?>" >
                  <h5></h5>
                  <span style="color:black;" name="price"> Price:৳  <?php echo $rows ['price']?>
                  <input name="price" type="hidden" value="<?php echo $rows ['price']?>" >
                  <p style="color:black;" name="cat">Category:  <?php echo $rows ['type']?></p>
                  <input name="cat" type="hidden" value="<?php echo $rows ['type']?>" >
                  <p style="color:black;"><?php echo $rows ['status']?></p>
                
                
              </strong>
         
              <button type="submit" name="submit" style=" font-weight:bold; background:black ;color:white; width:250px; border-radius:20px;">Add to Cart</button>
              </form>
          </div>
           
        </div>
    </div>
    <?php
    }
}
else{
   die("Can not execute query");
}
?>	




</body>
</html>
<?php include 'includes/footer.php';?>
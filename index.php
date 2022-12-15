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
    <style>
      
   .zoom {
    
    
    transition: transform .1s;
    
    
  }
  
  .zoom:hover {
    -ms-transform: scale(1.2); /* IE 9 */
    -webkit-transform: scale(1.2); /* Safari 3-8 */
    transform: scale(1.2); 
  }
    </style>
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

<div class="card" style="width:18rem;background-color:black; padding:0px;  ">

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

<!-- Mid Box -->
 <br><br><br>
<div class="container"  >

<div class="row"  >
<h4 style=" height:50px;">Find your best deals</h4>
  <div class="col-md-4 col-12 " style="padding-top:10px;">
  <div class="card zoom" style="width: 22rem;  background-image:linear-gradient(to right,#93A5CF ,  #FCB69F); height:150px;padding-top:10px;">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5> -->
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
   
    <h1><i  class="fa-sharp fa-solid fa-bottle-droplet"></i></h1>
    <h4>Get your Engine oil </h4>
    <a href="product.php?brand=Oil" class="card-link text-dark">More Info</a>
    
    
  </div>
</div>
  </div>
 






  <div class="col-md-4 col-12" style="padding-top:10px;">
  <div class="card zoom" style="width: 22rem;  background-image:linear-gradient(to right,#02AABD , #00CDAC);padding-top:10px;">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5> -->
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <h1><i class="fa-solid fa-bucket"></i></h1>
    <h4>Get your Authentic Parts </h4>
    <a href="product.php?brand=Parts"  class="card-link text-dark">More Info</a>
    
  </div>
</div>
  </div>
 
  <div class="col-md-4 col-12" style="padding-top:10px;">
  <div class="card zoom" style="width: 22rem;  background-image:linear-gradient(to right,#93A5CF,  #E4EfE9);">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5> -->
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <h1><i class="fa-solid fa-crown"></i></h1>
    <h4>Get your Accessories </h4>
    <a href="product.php?brand=Accessories" class="card-link text-dark">More Info</a>
  </div>
</div>
  </div>
</div>
</div>

<br><br><br>
   <!-- Part4 -->
   <h1 class="container  "  style="">Featured Items</h1>  

   <div class="container slider2 " style="padding:10px;">
   <?php 

$sql ="SELECT imege,price,name from products";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>

<div>
<div class="card" style="width:200px; height:300px; padding:10px; color:white;">

<img src="Admin/imeges/<?php echo $rows ['imege']?>" class="card-img-top" style="height:300px;" alt="...">
<div class="card-body">
  <span style="  color:black;"><?php echo $rows ['name']?></span><br>
  <span style=" height:80px; color:black;">Tk.<?php echo $rows ['price']?></span> 
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
   </div>




<!-- Ambassadors -->
   <br><br>
                <Center> <h2 style=" height:80px;">Our Beloved Ambassadors</h2></Center>

                <div class="slider3 container "style="padding:40px;">
                <?php 

              $sql ="SELECT name,imege from ambas";
              $data = mysqli_query($conn, $sql);
              $check_result= mysqli_num_rows($data)> 0;
              if($check_result){
                while( $rows = mysqli_fetch_array( $data ) ) 
                {
                    ?>
                    

              <div >
              <div class="card " style="width:18rem; padding:10px; color:white; box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">

              <img src="Admin/imeges/<?php echo $rows ['imege']?>" class="card-img-top" style="height:300px;" alt="...">
              <div class="card-body">
              <Center> <h2 style=" height:80px; color:black;"><?php echo $rows ['name']?></h2></Center>

                
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
   </div>
</body>
</html>
<script src="https://kit.fontawesome.com/a3253ecb96.js" crossorigin="anonymous"></script>
<?php include "includes/footer.php" ?>
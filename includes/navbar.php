<link rel="stylesheet" href="imeges/font-awesome/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <style>
.nav-item:hover {
  background-color: orange;
}
.nav-link{
  color: white;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
  <div class="col-12 col-md-4 mt-5">
<a style="text-decoration:none; color:black;" href="index.php">
<h2  class=" fw-semibold  " style=" height:80px;" aria-current="true"> <i class="fas fa-home"></i>Parts Platoon
</h2>
</a>
  </div> 
<div class="col-md-4 mt-5">
<form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
<div class="col-12 col-md-4 mt-5">
<button class="btn fw-semibold fw-1 position-relative " type="submit" ><i class="fas fa-cart-arrow-down"></i>
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>

  </div> 
</div>
</div>
<nav class="navbar bg-dark  navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="imeges/logo.png" style="width:70px;" alt=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
        <li class="nav-item dropdown " style="width:200px;">
        <a class="nav-link active fs-5 text-white  "  role="button" data-bs-toggle="dropdown" aria-expanded="false"href="#">  <i class="fas fa-bars"></i> Brands
        
        </a>

       
          <ul class="dropdown-menu" style="width:200px;text-align:center;">
          <?php 
$sql ="SELECT name from brands";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; "><?php echo $rows ['name']?></a></li>
           
            <?php
    }
}
else{
   die("Can not execute query");
}
?>
          </ul>
        </li>
        <li class="nav-item dropdown ">
        <a class="nav-link active fs-5 text-white  "  role="button" data-bs-toggle="dropdown" aria-expanded="false"href="#" style="width:200px;text-align:center;">   Accessories
        
        </a>

       
          <ul class="dropdown-menu" style="width:200px;">
            <li><a class="dropdown-item fs-4fs-5" href="#" style="text-align:center; ">Gloves</a></li>
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; ">Covers</a></li>
          
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; ">Polish</a></li>
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; ">Generel Tools</a></li>
          
          </ul>
        </li>
        <li class="nav-item dropdown " style="width:200px;">
        <a class="nav-link active fs-5 text-white  "  role="button" data-bs-toggle="dropdown" aria-expanded="false"href="#" style="text-align:center; ">   Lubricant
        
        </a>

       
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; ">Engine Oil</a></li>
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; ">Gear Box Lube</a></li>
          
            <li><a class="dropdown-item fs-5" href="#" style="text-align:center; ">Booster</a></li>
            
          
          </ul>
        </li>

        <li class="nav-item "  role="button"  style="width:200px;text-align:center;">
          <a class="nav-link fs-5 text-white">All Parts</a>
        </li>
        <li class="nav-item "   style="width:200px;text-align:center;">
          <a class="nav-link fs-5 text-white"  role="button" href="#">Contact Us</a>
        
        </li>
        <!-- <li class="nav-item active fs-5">
          <a class="nav-link" href="#">DESIGN</a>
        </li>
        <li class="nav-item active fs-5">
          <a class="nav-link" href="#">DEMAND</a>
        </li> -->
      </ul>
     
    
  
    </div>
  </div>
</nav>

</body>
</html>




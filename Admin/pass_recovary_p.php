<?php

session_start();
include('includes/header.php');
if(isset ($_SESSION['auth']))
{
    $_SESSION['status']="Already Logged In";
    header("Location: ./index.php");
    exit(0);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password- Noveltees</title>
</head>
<body  style="background-color:lightgrey;">
<div   style=" margin-top:100px; ">
        <div class="container" >
        <?php 
                            if(isset($_SESSION['status'])){
                              ?>
                              <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['status']. '</h4>'?></div>
                              <?php 
                              unset($_SESSION['status']);
                              }
                            ?>
 
        <div class="row" >
            <div class="col-md-12 col-12">
          <div class="bg-light bg-gradient text-dark"style="display:flex; align-items: center; justify-content:center; height:700px;">
                          <form action="config/code_reset.php" method="POST">
                          <center>
                            <h2  class=" fw-semibold  " style=" height:80px;" aria-current="true"> <i class="nav-icon fas fa-motorcycle"></i>Parts Platoon
</h2>
                          </center>
                            <div class="form-group">
                              <label for="" class="form-label text-white">Email</label>
                              <input type="email" class="form-control" name="email">
                            </div>
                            
    
                          <button type="submit" name="submit" class="btn " style="width:300px; background-color:black;color:white;">Send a reset  link</button><br><br>
                        
                        </form>  
                    </div>
                    
                </div> 
              </div>
            </div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a3253ecb96.js" crossorigin="anonymous"></script>
</body>
</html>
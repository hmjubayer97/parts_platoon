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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body  style="background-color:lightgrey">

    <div   style=" margin-top:100px; ">
        <div class="container" >
        <?php 
              if(isset($_SESSION['auth_status_U'])){
                ?>
                <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['auth_status_U']. '</h4>'?></div>
                <?php 
                unset($_SESSION['auth_status_U']);
              }
            ?>
  <?php 
              if(isset($_SESSION['lout_status'])){
                ?>
                <div class="alert alert-light" role="alert"> <?php echo'<h4>'.$_SESSION['lout_status']. '</h4>'?></div>
                <?php 
                unset($_SESSION['lout_status']);
              }
            ?>
                <div class="row" >
                <div class="col-md-12 col-12">
          <div class="bg-light bg-gradient text-dark " style="display:flex; align-items: center; justify-content:center; height:700px;">
                          <form action="config/code_loging.php" method="POST">
                            <center>
                            <h2  class=" fw-semibold  " style=" height:80px;" aria-current="true"> <i class="nav-icon fas fa-motorcycle"></i>Parts Platoon
</h2>
                          </center>
                            <div class="form-group">
                              <label for="name" class="form-label text-dark">Username</label>
                              <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
                              <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                              <a style="color:black; text-decoration:none;" href="pass_recovary_p.php">Forget password</a>
                            </div>
                            <?php 
                            if(isset($_SESSION['status'])){
                              ?>
                              <div class="alert alert-success" role="alert"> <?php echo'<h4>'.$_SESSION['status']. '</h4>'?></div>
                              <?php 
                              unset($_SESSION['status']);
                              }
                            ?>
                          <button type="submit" name="login"class="btn " style="width:300px; background-color:black;color:white;">LogIn</button>
                        </form>  
                      </div>
                    </div> 
              </div>
            </div>
        </div>
</body>
</html>
<?php  include('includes/script.php');?>
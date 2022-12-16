<?php 
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12" style="padding:20px;">
               <a href="https://www.google.com/maps/place/Nikunja-2,+Dhaka/@23.832198,90.4169057,19.75z/data=!4m9!1m2!2m1!1sHouse+16,+Road+1%2F6,Nukunju+2!3m5!1s0x3755c70ad1a88b93:0xaf150749058b2469!8m2!3d23.832105!4d90.4172902!15sChxIb3VzZSAxNiwgUm9hZCAxLzYsTmlrdW5qYSAykgEUY29uc3RydWN0aW9uX2NvbXBhbnngAQA"><img src="Admin/imeges/map.png" alt=""></a> 
            </div>
            <div class="col-md-6 col-12" style="padding-top:100px;padding-bottom:20px;">
                <H3>Our Corparate Branch</H3>
                <h4><i class="fa-sharp fa-solid fa-house-laptop"></i> House:16, Road:1/6, Nikunja - 2, Dhaka</h4>
                <h5><i class="fa-sharp fa-solid fa-comment"></i> +880 17885520</h5>
                <h5><i class="fa-sharp fa-solid fa-at"></i> parts_platoon@gmail.com</h5>
                <a href="https://www.google.com/maps/place/Nikunja-2,+Dhaka/@23.832198,90.4169057,19.75z/data=!4m9!1m2!2m1!1sHouse+16,+Road+1%2F6,Nukunju+2!3m5!1s0x3755c70ad1a88b93:0xaf150749058b2469!8m2!3d23.832105!4d90.4172902!15sChxIb3VzZSAxNiwgUm9hZCAxLzYsTmlrdW5qYSAykgEUY29uc3RydWN0aW9uX2NvbXBhbnngAQA" style="text-decoration:none;color:black;"><h5><i class="fa-solid fa-map"></i> Location in map</h5></a>
            </div>
        </div>
    </div>
</body>
</html>



<?php include 'includes/footer.php';?>

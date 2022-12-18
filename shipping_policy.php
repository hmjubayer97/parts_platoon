<?php 
$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}
global $grand_total;
?>
<?php include "includes/header.php" ?>  
<?php include "includes/navbar.php" ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Policy - Parts_platoon</title>
</head>
<body>
<div class="container mt-5">
<h3>Shipping Policy</h3>
<br><br>
        
<br><br>

        <h5>This policy begins 24 hours after the order has been placed on our website.</h5>
        <br><br>
        <h5>It is the customers responsibility to provide the correct mailing address before submitting the order, Parts_platoon WILL NOT BE HELD LIABLE for shipping discrepancies that includes stolen, misplaced, lost or shipping address that was entered wrong on our website.</h5>
<br><br>
        <h5>Questions or comments?<br><br> Contact us at Info@parts_platoon.com</h5>
</div>
</body>
</html>
<?php include 'includes/footer.php';?>
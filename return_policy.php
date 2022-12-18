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
        <h3>Return Policy</h3>
<br><br>
        <h5>Parts_platoon will honor and replace items that were damaged upon receipt, which may include unauthentic, cutting wires and holes. We also will honor if an incorrect product has been issued, but the customer is responsible for shipping back to our production warehouse, absolutely NO EXCEPTIONS.  Customs will cover shipping cost back to you.</h5>
<br><br>

      

<br><br>
        <h5>Questions or comments?<br><br> Contact us at Info@parts_platoon.com</h5>
</div>
</body>
</html>
<?php include 'includes/footer.php';?>
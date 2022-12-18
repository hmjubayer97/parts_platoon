<?php 
session_start();

$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}
    require('config/code_payment.php');
?>
<?php include "includes/header.php" ?>  
<?php include "includes/navbar.php" ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Payment-Parts_platoon</title>
</head>
<body>
  
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="config/code_payment_submit.php" method="POST">
<div class="table-responsive">
  <table class="table">
  <thead>
        <tr>
          
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Amount</th>
          <th scope="col">Action</th>
        
          
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
       
       $sql ="SELECT * from orders where status='unpaid' && payment_method='Card Payment'  ";
       $data = mysqli_query($conn, $sql);
       $check_result= mysqli_num_rows($data)> 0;
       if($check_result){
         while( $rows = mysqli_fetch_array( $data ) ) 
         {
        ?>
            <td><?php echo $rows['id']?></td>
            <td><?php echo $rows['product_name']?></td>
            <td><?php echo $rows['amount']?></td>
            
            <td>           
            <?php if(!isset($id)){ ?>  
            <input type="hidden" name="order_id" value="<?php echo $rows['id']?>">
                <?php } else{ ?>
                  <input type="hidden" name="order_id" value="<?php echo $id?>">
                  <?php }?>    
                    <input type="hidden" name="name" value="<?php echo $rows['product_name']?>">
                    
                    <input type="hidden" name="amount" value="<?php echo $rows['amount']?>">

                    <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="<?php echo $publishKey ?>"
                    data-amount="<?php echo $rows['amount']*100 ?>"
                    data-name="Parts_platoon"
                    data-description="<?php echo $rows['customer_name'] ?>"
                    
                    data-image="imeges/logo.png"
                    data-currency="BDT"></script>
                </td>


        </tr>
        </form>
      </tbody>
      <?php            
            }
        }
     
     ?>
  </table>


  
</div>
         

            </div>
        </div>
    </div>
    
  <?php
 
  ?>
</body>
</html>

<?php include 'includes/footer.php' ?>
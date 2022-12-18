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
    <title>Cart-Parts Platoon</title>
</head>
<body>
    
<div class="container mt-5">

  <div class="table-responsive-sm">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Items</th>
          <th scope="col">Image</th>
          <th scope="col">Category</th>
          <th scope="col">Brand</th>
          
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Sub Total</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr> 
          <?php 
            $sql ="SELECT * from cart ";
            $data = mysqli_query($conn, $sql);
            $check_result= mysqli_num_rows($data)> 0;
            if($check_result){
              while( $rows = mysqli_fetch_array( $data ) ) 
              {
          ?>
          <td><?php echo $rows ['id']?></td>
          <td><?php echo $rows ['items']?></td>
          <td><img style="width:20px;" src="Admin/imeges/<?php echo $rows ['imege']?>"></td>
          <td><?php echo $rows ['type']?></td>
          <td><?php echo $rows ['brands']?></td>
          <td>
             <form action="config/code_cart.php" method="POST">
             <input type="hidden" name="uq_id" value="<?php echo $rows['id'] ?>">
          
              <input style="width:50px;" type="number" name="uq" min="1" max="1000" value="<?php echo $rows ['quantity']?>" >
              <input  style="margin-left:5px;"class="btn btn-light" type="submit" value="Update" name="update"> 
             
          </td>
          <td>৳ <span></span><?php echo $rows ['price']?></td>
          <td>৳ <?php echo $sub_total=($rows ['price']*$rows ['quantity']);
               ?>
          </td>
          <td>
         
              <input onclick ="return confirm('Are you sure you want to remove item from cart?')" type="submit" name="delete" value="DELETE"  class="btn btn-danger deletebtn" ></td>
              </form> 
        </tr>
           <?php (int)$grand_total  += (int)$sub_total;?>
          <?php     
            }}else{
              ?>
              <div style="font-weight:bold;color:black;"class="alert alert-secondary" role="alert"><h4 class="shadow-sm p-3 mb-5 bg-body rounded">"Cart is now empty" </h4></div>
            <?php 
          }
          ?>

                 <tr >
                 
                    <td colspan="6"><a  href="product.php?brand=All_product"> <button style="width:400px;" class="btn btn-light">Continue Shopping</button> </a></td>
                    <td colspan="">Grand Total</td>
                    <td>৳ <?php echo number_format( $grand_total)?></td>
                    <form action="config/code_cart.php" method="POST">
                    <td><input onclick ="return confirm('Are you sure you want to remove all item from cart?')" type="submit" name="delete_all" value="DELETE ALL"  class="btn btn-danger " ></td>
                    </form> 
                  </tr>
  </tbody>
</table>
        </div>
    
      
      <div class="d-grid">
      <a href="checkout.php"  type="button" class="btn btn-secondary <?= ($grand_total>1)?'':'disabled';?>">Proceed to checkout</a>
    </div>
   
    </div>
   
<div  style="margin-top:380px;">
<?php include 'includes/footer.php';?>

</div>




</body>
</html>
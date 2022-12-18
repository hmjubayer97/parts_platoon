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
    <title>Checkout- Parts_platoon</title>
</head>
<body>
    
<div class="container mt-5">
       
    <form class="row g-3" action="config/code_checkout.php" method="POST">
  <div class="col-md-6">
  
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" name="name" value="" class="form-control" id="inputEmail4" required>
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" value="" class="form-control" id="inputPassword4" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" value="" required>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Phone Number</label>
    <input type="text" name="number" class="form-control" value="" id="inputCity" required>
  </div>
  <div class="col-md-6">
  <label for="inputCity" class="form-label">Payment Method</label>
  <select  name ="payment"class="form-select" aria-label="Default select example" required>
  <option selected disabled value="" >Plase choose a payment option</option>
  <option value="Cash on delivery">Cash on delivery</option>
  <option value="Card Payment">Card Payment</option>
 
</select>
</div>


  <div class="table-responsive">
    <table class="table table-Dark table-striped">
      <thead>
        <tr>
          
         
          <th scope="col">Items</th>
          <th scope="col">Image</th>
          <th scope="col">Category</th>
          <th scope="col">Brands</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Sub Total</th>
          
        </tr>
      </thead>
      <tbody>
        <tr> 
          <?php 
            $sql ="SELECT * from cart";
            $data = mysqli_query($conn, $sql);
            $check_result= mysqli_num_rows($data)> 0;
            if($check_result){
              while( $rows = mysqli_fetch_array( $data ) ) 
              {
          ?>
          
          <td><?php echo $rows ['items']?></td>
          <td><img style="width:80px;" src="Admin/imeges/<?php echo $rows ['imege']?>"></td>
          <td><?php echo $rows ['type']?></td>
          <td><?php echo $rows ['brands']?></td>
          <td><?php echo $rows ['quantity']?> </td>
          <td>৳<?php echo $rows ['price']?></td>
          <td>৳<?php echo $sub_total=($rows ['price']*$rows ['quantity']);
               ?>
          </td>

             
        </tr>
           <?php (int)$grand_total  += (int)$sub_total;?>
          <?php     
            }}else{
              ?>
              <div style="font-weight:bold;color:black;"class="alert alert-success" role="alert"><h4>"Cart is now empty" </h4></div>
            <?php 
          }
          ?>

                 <tr >
                 
                    <td colspan="5"></td>
                    <td colspan="">Grand Total</td>
                    <td >৳<?php echo number_format( $grand_total)?></td>
                 <input type="hidden" name="total" value="<?php echo (int)$grand_total ?>">
                  </tr>
  </tbody>
</table>
        </div>


        <input type="hidden" name="product_name" value="
        <?php
        $sql ="SELECT * from cart  ";
        $data = mysqli_query($conn, $sql);
        $check_result= mysqli_num_rows($data)> 0;
        if($check_result){
          while( $rows = $product= mysqli_fetch_assoc( $data )) 
          {
             $p_name[] = $product['items'].'('. $product['brands'] .')'.'('. $product['quantity'] .')';
            
          
          }
           echo $product_name=implode(',',$p_name);
          }
        ?>
        " >
        <input type="hidden" name="quantity" value="
        <?php 
                        $sql2 ="SELECT sum(quantity) from cart ";
                        $data1 = mysqli_query($conn, $sql2);
                        $check_result1= mysqli_num_rows($data1)> 0;
                        if($check_result){
                          while( $rows1 = mysqli_fetch_array( $data1 ) ) 
                          {
                            
                            echo $quantity= $rows1['sum(quantity)'];
                              
                          }
                      }         
         ?>
        
        ">
             
           <div class="col-12 d-grid">
    <input name="submit" type="submit" class="btn btn-dark" value="Place an order" >
  </div>


  
  <a style="text-decoration:none; color:black;" href="shipping_policy.php">Shipping  Policy</a>
  <a style="text-decoration:none; color:black;" href="return_policy.php">Return Policy</a>
        </form>


    

    </div>




</body>
</html>
<?php include 'includes/footer.php';?>
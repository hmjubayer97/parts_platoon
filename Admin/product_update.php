<?php 
include('auth.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>
<?php 

$conn = mysqli_connect('localhost','root','','parts_platoon');

?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Content Header (Page header) -->

      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
         
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Update:</h3>

                <a href="product_read.php"  class="btn btn-primary float-right" >Back</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
               
                   <form action="config/code_product.php" method="POST" enctype="multipart/form-data" style="padding:20px; width=100px;">
                    <?php
                    if (isset($_GET['id'])){
                        $id= $_GET['id'];
                        $sql= "SELECT * FROM products WHERE id=$id";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
<input type="hidden" name="id" value="<?php echo $rows ['id']?>">
<div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input name="name" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['name']?>" placeholder="">
</div>

<div class="form-group">
    <label for="exampleFormControlInput1">Price Start</label>
    <input name="price1" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['price']?>" placeholder="">
</div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Category(Please Choose category again)</label>

    <select name="type" class="form-control" id="exampleFormControlSelect1">
        <option  selected hidden value="">Choose an option</option>
        <?php 
$sql ="SELECT * from type";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
while( $rows = mysqli_fetch_array( $data ) ) 
{
?>
        <option value="<?php echo $rows ['name']?>"><?php echo $rows ['name']?></option>
        <?php
}
}
else{
die("Can not execute query");
}
?>
    </select>
</div>

<div class="form-group">
            <label for="exampleFormControlSelect1">Brand(Please make sure brands again)</label>

            <select name="brand" class="form-control" id="exampleFormControlSelect1">
                <option  selected hidden value="">Choose an option</option>
                <?php 
$sql ="SELECT * from brands";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>
                <option value="<?php echo $rows ['name']?>"><?php echo $rows ['name']?></option>
                <?php
    }
}
else{
   die("Can not execute query");
}
?>
            </select>
        </div>


<div class="form-group">
    <label for="exampleFormControlSelect1">Stock Status(Please make sure status again)</label>
    <select name="Stock_status" class="form-control" id="exampleFormControlSelect1">
        <option  selected hidden value="">Choose an option</option>
        <option value="in_stock">In Stock</option>
        <option value="stock_out">Stock Out</option>
    </select>
</div>

<a href="product_read.php"><button type="button" class="btn btn-secondary" > View Product</button></a>
<button type="submit" name="update" class="btn btn-primary">Update Product</button>
</div>

</form>

<?php
                          }
                        }
}
else{
   die("Can not execute query");
}
?>

</div>

</div>
</div>


<?php include('includes/script.php');?>
<?php include('includes/footer.php');
?>
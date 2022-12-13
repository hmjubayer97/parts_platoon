<?php 
include('auth.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/db_conn.php');

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
              <li class="breadcrumb-item active">Update Brands</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Brands Update:</h3>

                <a href="brands_read.php"  class="btn btn-primary float-right" >Back</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
               
                   <form action="config/code_brands.php" method="POST" enctype="multipart/form-data" style="padding:20px; width=100px;">
                    <?php
                    if (isset($_GET['id'])){
                        $id= $_GET['id'];
                        $sql= "SELECT * FROM brands WHERE id=$id";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
<input type="hidden" name="id" value="<?php echo $rows ['id']?>">
<div class="form-group">
            <label for="exampleFormControlInput1">Brand Title</label>
            <input name="title" type="text"  class="form-control" id="exampleFormControlInput1" value="<?php echo $rows ['name']?>" placeholder="">
        </div>
  

      
        

<a href="brands_read.php"><button type="button" class="btn btn-secondary" > View Brands</button></a>
<button type="submit" name="update" class="btn btn-primary">Update Brand</button>
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
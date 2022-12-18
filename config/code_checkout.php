<?php 

session_start();

$conn = mysqli_connect('localhost','root','','parts_platoon');
if(!$conn){
  echo mysqli_connect_error();
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

function send_reset_code($name,$email,$amount,$product_name,$product_quantity,$payment){

  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPAuth   = true;                                          //Send using SMTP
  $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
                                    //Enable SMTP authentication
  $mail->Username   = 'novelteesssw@gmail.com';                     //SMTP username
  $mail->Password   = 'kmnxkixkzmgnwkqu';                               //SMTP password
  $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom("novelteesssw@gmail.com","Parts Platoon");
  $mail->addAddress($email);     //Add a recipient
                //Name is optional
     $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirm Order!';
    $email_template= "
    <h1>Hello</h1>
    <h3>Thnak you for being with us!</h3><br><br>
    <h1>Dear $name</h1>
    <h4>Product Deteils:</h4>
    
    <span >Products Name:$product_name</span ><br>
    <span >Quantiy:$product_quantity</span ><br>
    <span> Grand Total:$amount</span ><br>
    <span >Peyment:$payment</span ><br>
    
    ";
    $mail->Body =$email_template;
    $mail->send();

}

if(isset($_POST['submit'])){
    echo $name= $_POST['name'];
    
    echo $email= $_POST['email'];
    echo $address= $_POST['address'];
    echo $number= $_POST['number'];
    echo $payment= $_POST['payment'];
    echo $amount=$_POST['total'];
    echo $product_name=$_POST['product_name'];
    echo $product_quantity=$_POST['quantity'];

 
  echo $sql="INSERT INTO orders(product_name,product_quantity,amount,customer_name,address,number,payment_method) VALUES('$product_name','$product_quantity ','$amount','$name','$address','$number','$payment') ";
    if(mysqli_query($conn,$sql) == TRUE){
                

            if($payment=="Card Payment"){
                $sql1="DELETE from cart";
              if(mysqli_query($conn,$sql1) == TRUE){
                send_reset_code($name,$email,$amount,$product_name,$product_quantity,$payment);
                $_SESSION['status']="You have placed your order successfully";
                
                header("Location: ../payment_card.php");
            
              }
              
            }
             
             else if($payment=="Cash on delivery"){
              $sql="DELETE from cart ";
              if(mysqli_query($conn,$sql) == TRUE){
                send_reset_code($name,$email,$amount,$product_name,$product_quantity,$payment);
               
            
             
              $_SESSION['status']="You have placed your order successfully";
              header("Location: ../index.php");
              }
            }
            else{
              $_SESSION['status']="You have placed your order successfully";
              header("Location: ./checkout.php");
            }
          
            } 
      else{
          echo "Can not execute query";
           
      }      

}
?>
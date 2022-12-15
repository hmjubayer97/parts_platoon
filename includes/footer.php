<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<footer style=" " class="bg-dark p-2 text-dark bg-opacity-10">
<br><br>
        <h1 style="text-align: center; color:#525966;" class="brand-text font-weight-light"><i class="nav-icon fas fa-motorcycle"></i>Parts Platoon </h1>
        <p style="text-align: center; color:#525966;">Give us the chance to serve you</p>
    <br><br>
    <section style="display: flex; justify-content: space-evenly;" class="container">
 
      
      <div>
        <h3> Our Services </h3>
        <h5 ><a style="text-decoration:none; color:#525966;" href="">Brands Authenticity </a></h5>
        <h5 ><a style="text-decoration:none; color:#525966;" href="">Authentic Accessories</a></h5>

        <h5 ><a style="text-decoration:none; color:#525966;" href="">All Parts</a></h5>
        <h5 ><a style="text-decoration:none; color:#525966;" href="">After Sell Services</a></h5>
      </div>
     
      <div>
        <h3> TERMS & POLICY 2022 </h3>
        <p>Terms & Condition Of Us<p>
        <p>Privacy Polic<p>
        
      </div>
      <div>
        <h3> Payment Method </h3>
       <img src="imeges/payment-removebg-preview.png" alt="">
        
      </div>


</body>






<script src="asset/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a3253ecb96.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
//          $('.single-item').slick({
//   dots: true,
//   infinite: false,
//   speed: 300,
//   slidesToShow: 4,
//   slidesToScroll: 4,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//     // You can unslick at a given breakpoint now by adding:
//     // settings: "unslick"
//     // instead of a settings object
//   ]
// });

$('.slider1').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});


$('.slider2').slick({
   autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.slider3').slick({
   autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});



</script>
</html>
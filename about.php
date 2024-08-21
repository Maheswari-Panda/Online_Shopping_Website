<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Shipcell, we're your one-stop destination for an exceptional shopping experience. Here's why you should choose us:
         Quality Guaranteed: We take pride in offering top-notch products, handpicked for their quality and durability.
         Wide Selection: Discover a diverse range of products that cater to your unique preferences and needs.
         Affordable Prices: Enjoy competitive pricing and exclusive deals that maximize your savings.
         Customer-First Service: Our dedicated support team is here 24/7 to assist you, ensuring your satisfaction.
         Ready to upgrade your shopping experience? Choose Shipcell today!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-7.jpg" alt="">
         <p>Your website is incredibly easy to navigate. Finding products, adding them to my cart, and checking out is a breeze. It's a smooth and hassle-free shopping process.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maheswari Panda</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-8.jpg" alt="">
         <p> I appreciate the wide selection of products available. It's not just about the quantity; it's also the quality. I've found unique items I couldn't find elsewhere.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>

         </div>
         <h3>Karishma Tailor</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.jpeg" alt="">
         <p>The shipping is impressively fast, and I always receive my orders in great condition. The tracking feature is also a big plus.Very good service for each customer</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Janki Chauhan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-10.jpg" alt="">
         <p>I've reached out to your customer support a couple of times, and they are responsive and helpful. It's clear that you care about your customers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shreya Vasava</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-11.jpeg" alt="">
         <p>I had to make a return once, and the process was so smooth and quick. It's rare to find a company that honors their return policy without any issues.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
         </div>
         <h3>Manisha Gupta</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-20.png" alt="">
         <p>Your frequent deals and promotions have saved me a lot of money. It's nice to see a company that values its customers' wallets.Thankyou for your services</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Krupamay Pandya</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KG Hotel-contact us</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4 align-center">
    <h2 class="fw-bold h-font text-center">Contact us</h2>
    <div class="h-line bg-dark"></div>
    
</div>

<!--reach us-->


<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56062.109751875534!2d77.0450953!3d28.573310099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a9c31eec4e1%3A0x39493976cba4c89a!2sDwarka%2C%20Delhi!5e0!3m2!1sen!2sin!4v1717666751302!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
         <h5>call us</h5>
         <a href="tel: +919250172412" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i> +919250172412
         </a>
         <br>
         <a href="tel: +917876061272" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i> +917876061272
         </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
         <h5>Follow us</h5>
         <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-twitter-x"></i>twitter
           </span>
         </a>
         <br>
         <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-facebook"></i></i>Facebook
           </span>
         </a>
         <br>
         <a href="#" class="d-inline-block">
           <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram"></i>Instgram
           </span>
         </a>
     </div> 
  </div>
</div>
<?php require('inc/footer.php') ?>

<!--Registration-->
<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">

    <form >
       <div class="modal-header">
         <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-vcard fs-3 me-2"></i>User Registration
         </h5>
         <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.)
          that will be required during check-in.
        </span>
        <div class="container-fluid">
         <div class="row">
         <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Name</label>
           <input type="text" class="form-control shadow-none">
         </div>
          <div class="col-md-6 p-0">
           <label class="form-label">Email</label>
           <input type="email" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Phone Number</label>
           <input type="number" class="form-control shadow-none">
          </div>
          <div class="col-md-6 p-0 mb-3">
           <label class="form-label">Picture</label>
           <input type="file" class="form-control shadow-none">
          </div>
          <div class="col-md-12 p-0 mb-3">
           <label class="form-label">Address</label>
           <textarea class="form-control shadow-none" rows="1"></textarea>
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">PinCode</label>
           <input type="number" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Date of Birth</label>
           <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Password</label>
           <input type="password" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
           <label class="form-label">Confirm password</label>
           <input type="password" class="form-control shadow-none">
          </div>
          <div class="Text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
          </div>
        </div>
   </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerview:"2",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      }
    });
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KG Hotel-facilities</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4 align-center">
    <h2 class="fw-bold h-font text-center">OUR facilites</h2>
    <div class="h-line bg-dark"></div>
    
</div>

<div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_43553.svg" width="80px">
       <h5 class="mt-3">wifi</h5>
       <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
         Enim consequatur maiores libero consectetur? Incidunt, porro!
       </p>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_96423.svg" width="80px">
       <h5 class="mt-3">Heater</h5>
       <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
         Qui inventore nostrum ut aut nulla dolorem?
       </p>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_49949.svg" width="80px">
       <h5 class="mt-3">Air-Conditioner</h5>
       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
         Eligendi dolorum atque nobis facilis, et suscipit.
       </p>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_47816.svg" width="80px">
       <h5 class="mt-3">SPA</h5>
       <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
         Illo, laborum quia. Dicta sequi veritatis quae.
       </p>
      </div> 
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <img src="images\facilities\IMG_27079.svg" width="80px">
       <h5 class="mt-3">Fire Alarm</h5>
       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
         Labore atque eveniet, id hic corrupti voluptatem.
       </p>
     </div>
    </div>
  </div>
  <div class="col-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>></a>
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